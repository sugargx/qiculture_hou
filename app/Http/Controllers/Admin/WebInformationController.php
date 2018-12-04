<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Http\Model\WebInformation;

class WebInformationController extends Controller
{
    //
    public function index()
    {
        $key = WebInformation::first();
        if($key==null){
            $key = new WebInformation();
        }
        return view('admin.webinformation.index',compact('key'));
    }
    public function  store(Request $request){
        //
        $data = $request->except('_token','qrcode');
        $qrcode = $request->file('qrcode');
        if($qrcode){
            $data['qrcode'] = $qrcode->store('upload/image');
        }
        $key = WebInformation::first();
        if($key==null){
            $key = WebInformation::create($data);
        }else{
            if($qrcode&&file_exists($key->qrcode)){
                unlink($key->qrcode);
            }
            $key->update($data);
        }
        return redirect()->back();
    }
}
