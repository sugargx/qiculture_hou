<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //登陆页面
    public function index()
    {
        return view('admin.login');
    }

    //登陆逻辑
    public function login(Request $request)
    {
        //dd($request);
        $this->validate(request(), [
            'name'     => 'required',
            'password' => 'required',
        ],[
            'name.required'=>'请输入账号！',
            'password.required'=>'请输入密码！',
        ]);

        $user = User::where('account',$request->input('name'))->get();
        if (count($user)>=1 && Hash::check($request->input('password'),$user[0]->password)) {
            session(['rank'=>1,'adminID'=>$user[0]->id]);
            return redirect('/admin/index');
        } else{
            return redirect()->back()->withInput()->withErrors("用户名或密码不正确");
        }
    }

    public function logout()
    {
        session(['rank'=>0]);
        return redirect('/admin/login');
    }

    public function reset()
    {
//        dd('123');
        return view('admin.reset');
    }

    public function change(Request $request)
    {
        $this->validate($request, [
            'new_pass'              => 'required|confirmed',
            'new_pass_confirmation' => 'required',
        ]);
        $user = User::findOrFail(session('adminID'));
        $pass = $request->get('new_pass');
        $user->password = Hash::make($pass);
        if ($user->save())
            return back()->withErrors('修改成功');
        return back()->withErrors('修改失败');
    }

}
