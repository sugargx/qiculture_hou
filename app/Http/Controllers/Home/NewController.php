<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\News;
use App\Http\Model\NewType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewController extends Controller
{
    public function newtype($id){
        $type = NewType::find($id);
        $news = $type->news()->orderBy('created_at','desc')->paginate(10);
        $name = '';
        $typename = $type->name;
        return view('home.newlist',compact('news','name','typename'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $next_new = News::where('id','<',$id)->get()->last();
        $pre_new = News::where('id','>',$id)->get()->first();
        $new = News::findOrFail($id);
        $newtype = NewType::findOrFail($new->type_id);
        $news = News::where('type_id',$new->type_id)->orderBy('created_at','desc')->get()->take(12);
        $new->page_view = $new->page_view + 1;
        $new->save();
        return view('home.new',compact('newtype','new','news','next_new','pre_new'));
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
