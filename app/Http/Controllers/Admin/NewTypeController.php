<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Model\NewType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $newTypes = NewType::paginate(10);
        return view('admin.newType.newType',compact('newTypes'));
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
        return view('admin.newType.newTypeEdit',compact('name'));
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
            'name'=>'required'
        ];
        $message = [
            'name.required'=>'请输入分类名称！'
        ];
        $validator = Validator::make($request->except('_token'),$rules,$message);
        if($validator->fails()){
            return back()->withErrors($validator);
        }else{
            $newType = NewType::create($request->except('_token'));
            if($newType){
                $validator->errors()->add('success','创建新闻分类成功！');
                return redirect()->route('newType.index');
            }
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
        $name = 'edit';
        $newType = NewType::find($id);
        return view('admin.newType.newTypeEdit',compact('name','newType'));
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
        //dd($request);
        $rules = [
            'name'=>'required'
        ];
        $message = [
            'name.required'=>'请输入分类名称！'
        ];
        $validator = Validator::make($request->except('_token','_method'),$rules,$message);
        if($validator->fails()){
            return back()->withErrors($validator);
        }else{
            $newType = NewType::find($id);
            $newType->update($request->except('_token','_method'));
            if($newType){
                $validator->errors()->add('success','修改新闻分类成功！');
                return redirect()->route('newType.index');
            }
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
        $newType = NewType::find($id);
        if($newType){
            $newType->delete();
        }
        return back();
    }
}
