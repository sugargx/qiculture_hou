<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\IndexColumn;
use App\Http\Model\NewType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexColumnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $index_columns = IndexColumn::get();
        return view('admin.indexColumn.indexColumn',compact('index_columns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $column = IndexColumn::find($id);
        $news_types = NewType::get();
        return view('admin.indexColumn.indexColumnEdit',compact('name','column','news_types'));
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
        $column = IndexColumn::find($id);
        $column->name = $request->input('name');
        $column->news_type_id = $request->input('news_type_id');
        $column->update();
        return redirect()->route('indexColumn.index');
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
    }
}
