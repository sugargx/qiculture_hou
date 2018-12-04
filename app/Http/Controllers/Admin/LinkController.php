<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Link;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $links = Link::paginate(8);
        return view('admin.link.link',compact('links'));
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
        return view('admin.link.linkEdit',compact('name'));
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
            'name'=>'required',
            'url'=>'required'
        ];
        $message = [
            'name.required'=>'请输入友情链接的名字！',
            'url.required'=>'请输入友情链接的地址！'
        ];
        $validator = Validator::make($request->all(),$rules,$message);
        if($validator->fails()){
            return back()->withErrors($validator);
        }else{
            $link = Link::create($request->except('_token'));
            return redirect()->route('link.index');
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
        $link = Link::findOrFail($id);
        return view('admin.link.linkEdit',compact('name','link'));
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
            'name'=>'required',
            'url'=>'required'
        ];
        $message = [
            'name.required'=>'请输入友情链接的名字！',
            'url.required'=>'请输入友情链接的地址！'
        ];
        $validator = Validator::make($request->all(),$rules,$message);
        if($validator->fails()){
            return back()->withErrors($validator);
        }else{
            $link = Link::findOrFail($id);
            $link->update($request->except('_token','_method'));
            return redirect()->route('link.index');
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
        $link = Link::findOrFail($id);
        if ($link){
            $link->delete();
        }
        return back();
    }
}
