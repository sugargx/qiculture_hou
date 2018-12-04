<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Model\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $banners = Banner::where('rank',1)->orderBy('order','asc')->get();
        return view('admin.banner.banner',compact('banners'));
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
        $banners = Banner::orderBy('order','asc')->get();
        return view('admin.banner.bannerEdit',compact('name','banners'));
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
        //dd($request);
        $rules = [
            'title'=>'required|',
            'url'=>'required|alpha|unique:banner,url',

        ];
        $message = [
            'title.required'=>'请输入菜单名称！',
            'url.required'=>'请输入菜单别名！',
            'url.alpha'=>'菜单别名必须由字母组成！',
            'url.unique'=>'别名已存在,请重新输入',
        ];
        $validator = Validator::make($request->all(),$rules,$message);
        if($validator->fails()){
            return back()->withErrors($validator);
        }else{
            $data = $request->except('_token');
            $arr = explode('/',$request->input('type'));
            $type_id = $arr[1];
            $type = $arr[0];
            $data['type'] = $type;
            $data['type_id'] = $type_id;
            if($request->input('pre_id')==-1){
                $data['order'] = count(Banner::where('pre_id',-1)->get()) + 1;
                $data['rank'] = 1;
            }else{
                $data['rank'] = 2;
                $data['order'] = count(Banner::where('pre_id',$request->input('pre_id'))->get()) + 1;
            }
            $banner = Banner::create($data);
            $validator->errors()->add('success','菜单添加成功！');
            return redirect()->route('banner.index');
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
        $banners = Banner::where('pre_id',-1)->orderBy('order','asc')->get();
        $banner = Banner::find($id);
        return view('admin.banner.bannerEdit',compact('banner','name','banners'));
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
        $oldBanner = Banner::find($id);
        $oldimage = $oldBanner->image;
        $order = $oldBanner->order;
        $rules = [
            'title'=>'required',
            'url'=>'required'
        ];
        $banners = Banner::all();
        foreach ($banners as $banner) {
            if ($banner->id != $id)
            {
                if ($banner->url == $request->get('url'))
                    return redirect()->back()->withErrors('菜单别名已存在');
            }
        }
        $message = [
            'title.required'=>'请输入菜单名称！',
            'name.required'=>'请输入菜单别名！',
            'name.alpha'=>'菜单别名必须由字母组成！',
        ];
        $validator = Validator::make($request->all(),$rules,$message);
        if($validator->fails()){
            return back()->withErrors($validator);
        }else {
            $data = $request->except('_token','image');
            $arr = explode('/', $request->input('type'));
            $type = $arr[0];
            $type_id = $arr[1];
            $data['type_id'] = $type_id;
            $data['type'] = $type;
            if ($request->input('pre_id') == -1) {
                $data['order'] = count(Banner::where('pre_id', -1)->get()) + 1;
                $data['rank'] = 1;
            } else {
                $data['rank'] = 2;
                $data['order'] = count(Banner::where('pre_id', $request->input('pre_id'))->get()) + 1;
            }
            $newbanner = Banner::create($data);
            $erBanners = Banner::where('pre_id',$id)->get();
            foreach ($erBanners as $erBanner){
                //dd($banner->id);
                $erBanner->pre_id = $newbanner->id;
                $erBanner->save();
            }
            $this->remove($id);
            return redirect()->route('banner.index');
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

        $thisbanner = Banner::find($id);
        if($thisbanner) {
            if ($thisbanner->pre_id == -1) {
                $banners = Banner::where('pre_id', -1)->where('order', '>', $thisbanner->order)->orderBy('order', 'asc')->get();
                foreach ($banners as $banner) {
                    $banner->order = $banner->order - 1;
                    $banner->save();
                }
            } else {
                $banners = Banner::where('pre_id', $thisbanner->pre_id)->where('order', '>', $thisbanner->order)->orderBy('order', 'asc')->get();
                foreach ($banners as $banner) {
                    $banner->order = $banner->order - 1;
                    $banner->save();
                }
            }
            $thisbanner->delete();
        }
        return back();
    }
    function up($id){
        $banner = Banner::find($id);
        $order = $banner->order;
        $rank = $banner->rank;
        if($rank==1)
            $upBanner = Banner::where('rank',$rank)->where('order','=',$order-1)->get();
        else
            $upBanner = Banner::where('pre_id',$banner->pre_id)->where('order','=',$order-1)->get();
        if(count($upBanner)>=1){
            $upBanner[0]->order = $upBanner[0]->order + 1;
            $upBanner[0]->update();
        }
        $banner->order = $banner->order - 1;
        $banner->update();
        return back();
    }
    function down($id){
        $banner = Banner::find($id);
        $order = $banner->order;
        $rank = $banner->rank;
        if($rank==1)
            $downBanner = Banner::where('rank',$rank)->where('order','=',$order+1)->get();
        else
            $downBanner = Banner::where('pre_id',$banner->pre_id)->where('order','=',$order+1)->get();
        if(count($downBanner)>=1){
            $downBanner[0]->order = $downBanner[0]->order - 1;
            $downBanner[0]->update();
        }
        $banner->order = $banner->order + 1;
        $banner->update();
        return back();
    }
    function isShow($id){
        $banner = Banner::find($id);
        $banner->show = !$banner->show;
        $banner->update();
        return back();
    }
    public function remove($id){
        $delbanner = Banner::find($id);
        if($delbanner) {
            if ($delbanner->pre_id == -1) {
                $banners = Banner::where('pre_id', -1)->where('order', '>', $delbanner->order)->orderBy('order', 'asc')->get();
                foreach ($banners as $banner) {
                    $banner->order = $banner->order - 1;
                    $banner->save();
                }
            } else {
                $banners = Banner::where('pre_id', $delbanner->pre_id)->where('order', '>', $delbanner->order)->orderBy('order', 'asc')->get();
                foreach ($banners as $banner) {
                    $banner->order = $banner->order - 1;
                    $banner->save();
                }
            }
            $delbanner->delete();
        }
    }
}
