<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Model\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $slides = Slide::orderBy('order','asc')->paginate(8);
        return view('admin.slide.slide',compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $name = "create";
        return view('admin.slide.slideEdit',compact('name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'image'=>'required',
            'title'=>'max:35'
        ],[
            'image.required'=>'请选择一张图片',
            'title.max'=>'标题最多35个字'
        ]);
        $image = $request->file('image');
        $data = $request->except('_token');
        $data['image'] = $image->store('upload\image');
        $data['order'] = count(Slide::get()) + 1;
        if(!$request->input('title')){
            $data['title'] = "";
        }
        if(!$request->input('show')){
            $data['show'] = 1;
        }
        $slide = Slide::create($data);
        return redirect()->route('slide.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $slide = Slide::find($id);
        $name = "edit";
        return view('admin.slide.slideEdit',compact('slide','name'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //dd($request);
        $this->validate($request,[
            'title'=>'max:20',
        ],[
            'title.max'=>'标题最多20个字'
        ]);
        $image = $request->file('image');
        $data = $request->except('_token');
        $slide = Slide::find($id);
        if($image){
            $data['image'] = $image->store('upload\image');
            if(file_exists($slide->image)){
                unlink($slide->image);
            }
        }
        if(!$request->input('title')){
            $data['title'] = "";
        }

        $slide->update($data);
        return redirect('/admin/slide');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $slide = Slide::find($id);
        if($slide){
            if(file_exists($slide->image)){
                unlink($slide->image);
            }
            $slide->delete();
        }
        return back();
    }
    function up($id){
        $slide = Slide::find($id);
        $order = $slide->order;
        $upSlide = Slide::where('order','=',$order-1)->get();
        if(count($upSlide)>=1){
            $upSlide[0]->order = $upSlide[0]->order + 1;
            $upSlide[0]->update();
        }
        $slide->order = $slide->order - 1;
        $slide->update();
        return back();
    }
    function down($id){
        $slide = Slide::find($id);
        $order = $slide->order;
        $downSlide = Slide::where('order','=',$order+1)->get();
        if(count($downSlide)>=1){
            $downSlide[0]->order = $downSlide[0]->order - 1;
            $downSlide[0]->update();
        }
        $slide->order = $slide->order + 1;
        $slide->update();
        return back();
    }
    function isShow($id){
        $slide = Slide::find($id);
        $slide->show = !$slide->show;
        $slide->update();
        return back();
    }
}
