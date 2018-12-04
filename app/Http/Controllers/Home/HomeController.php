<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Banner;
use App\Http\Model\News;
use App\Http\Model\Slide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index(){
        $slides = Slide::where('show',1)->orderBy('order','asc')->get();
        return view('home.index',compact('slides'));
    }
    public function banner($url){
        $banner = Banner::where('url',$url)->first();
        if($banner->type == 2){
            return view('home.list',compact('banner'));
        }else if ($banner->type == 6){
            return redirect('/');
        }else if ($banner->type == 4){
            return redirect($banner->href);
        }
    }
    public function more_new(){
        $name = '';
        $typename = '';
        $news = News::paginate(15);
        return view('home.newlist',compact('news','name','typename'));
    }
    public function search(Request $request){
        $keywords = $request->input('key');
        $news =  News::where('title','like','%'.$keywords.'%')->get();
        $flag = 1;
        $name = 'search';
        return view('home.newlist',compact('news','flag','name'));
    }
}
