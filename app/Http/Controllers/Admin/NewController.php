<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Model\News;
use App\Http\Model\NewType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $news = News::orderBy('created_at','desc')->paginate(10);
        session(['page'=>$request->input('page')]);
        return view('admin.new.new',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $newTypes = NewType::get();
        $name = "create";
        return view('admin.new.newEdit',compact('name','newTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $rules = [
            'title'=>'required',
            'content'=>'required',
            'type_id'=>'required',
            'keywords'=>'max:100',
            'description'=>'max:100'
        ];
        $message = [
            'title.required'=>'请输入新闻标题！',
            'content.required'=>'请输入新闻内容！',
            'type_id.required'=>'请选择新闻分类！',
            'keywords.max'=> '关键词最多100字！',
            'description.max'=>'摘要最多100字！'
        ];
        $validator = Validator::make($request->except('_token'),$rules,$message);
        if($validator->fails()){
            return back()->withErrors($validator);
        }else{
            $data = $request->except('_token','created_at');
            $data['created_at'] = $data['created_at'] = date('Y-m-d H:i:s',strtotime($request->input('created_at')));
            $image = $request->file('image');
            if($image){
                $data['image'] = $image->store('upload/image/');
            }
            $new = News::create($data);
            $validator->errors()->add('success','发布新闻成功！');
            return redirect()->route('new.index');
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
        $newTypes = NewType::get();
        $name = "edit";
        $new = News::find($id);
        return view('admin.new.newEdit',compact('name','new','newTypes'));
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
            'title'=>'required',
            'content'=>'required',
            'type_id'=>'required',
            'keywords'=>'max:100',
            'description'=>'max:100'
        ];
        $message = [
            'title.required'=>'请输入新闻标题！',
            'content.required'=>'请输入新闻内容！',
            'type_id.required'=>'请选择新闻分类！',
            'keywords.max'=> '关键词最多100字！',
            'description.max'=>'摘要最多100字！'
        ];
        $validator = Validator::make($request->except('_token'),$rules,$message);
        if($validator->fails()){
            return back()->withErrors($validator);
        }else{
            $data = $request->except('_token','created_at');
            $data['created_at'] = date('Y-m-d H:i:s',strtotime($request->input('created_at')));
            if($request->file('image')){
                $image = $request->file('image');
                $data['image'] = $image->store('upload/image');
            }
            $new = News::find($id);
            $new->update($data);
            $validator->errors()->add('success','修改新闻成功！');
            return redirect()->route('new.index',['page'=>session('page')]);
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
        $new = News::find($id);
        if($new){
            if(file_exists($new->image)){
                unlink($new->image);
            }
            $new->delete();
        }
        return back();
    }
}
