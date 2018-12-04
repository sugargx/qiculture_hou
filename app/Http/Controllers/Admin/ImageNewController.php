<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\ImageNew;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ImageNewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $imageNews = ImageNew::orderBy('order','asc')->paginate(8);
        return view('admin.imageNew.imageNew',compact('imageNews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $name = 'create';
        return view('admin.imageNew.imageNewEdit',compact('name'));
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
        $rules = [
            'image'=>'required',
        ];
        $messages = [
            'image.required'=>'请选择一张图片！'
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return back()->withErrors($validator);
        }else{
            $image = $request->file('image')->store('upload/image');

            $imageNew = ImageNew::create([
                'image'=>$image,
                'order'=>count(ImageNew::all()) + 1,
                'show'=>1,
                'title'=>$request->input('title'),
                'content'=>$request->input('content')?:""
            ]);
            return redirect()->route('imageNew.index');
        }
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
        $name = "edit";
        $imageNew = ImageNew::findOrFail($id);
        return view('admin.imageNew.imageNewEdit',compact('name','imageNew'));
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
        $rules = [
        ];
        $messages = [
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return back()->withErrors($validator);
        }else{
            $imageNew = ImageNew::findOrFail($id);
            if($request->file('image')){
                $image = $request->file('image')->store('upload/image');
                if(file_exists($imageNew->image)){
                    unlink($imageNew->image);
                }
                $imageNew->update([
                    'image'=>$image,
                    'title'=>$request->input('title'),
                    'content'=>$request->input('content')
                ]);
            }else{
                $imageNew->update([
                    'title'=>$request->input('title'),
                    'content'=>$request->input('content')
                ]);
            }

            return redirect()->route('imageNew.index');
        }
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
        $imageNew = ImageNew::findOrFail($id);
        if($imageNew){
            if(file_exists($imageNew->image)){
                unlink($imageNew->image);
            }
            $imageNew->delete();
        }
        return back();
    }
    function up($id){
        $imageNew = imageNew::find($id);
        $order = $imageNew->order;
        $upImageNew = imageNew::where('order','=',$order-1)->get();
        if(count($upImageNew)>=1){
            $upImageNew[0]->order = $upImageNew[0]->order + 1;
            $upImageNew[0]->update();
        }
        $imageNew->order = $imageNew->order - 1;
        $imageNew->update();
        return back();
    }
    function down($id){
        $imageNew = imageNew::find($id);
        $order = $imageNew->order;
        $upImageNew = imageNew::where('order','=',$order+1)->get();
        if(count($upImageNew)>=1){
            $upImageNew[0]->order = $upImageNew[0]->order - 1;
            $upImageNew[0]->update();
        }
        $imageNew->order = $imageNew->order + 1;
        $imageNew->update();
        return back();
    }
    function isShow($id){
        $imageNew = ImageNew::find($id);
        $imageNew->show = !$imageNew->show;
        $imageNew->update();
        return back();
    }
}
