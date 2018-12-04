<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //列表
    public function index()
    {
        $users = User::paginate('10');
        return view('admin.user.index', compact($users, 'users'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'password'              => 'required|confirmed',
            'password_confirmation' => 'required',
            'account' => 'unique:users,account'
        ],[
            'account.unique' => '此账号已被注册！'
        ]);

        $user           = new User();
        $user->account     = $request->get('account');
        $user->password = Hash::make($request->get('password'));
        if($user->save())
        {
            return redirect()->route('user.index');
        }
        return back()->withErrors('新增失败');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit',compact('user'));
    }

    public function update(Request $request, $id)
    {

        $user = User::find($id);
        $pass = $request->get('password');
        if ($pass)
        {
            if ($request->get('password_confirmation') == $pass)
                $user->password = Hash::make($request->get('password'));
            else
                return back()->withErrors('两次密码不匹配，请重新输入');
        }
        if ($user->save())
            return redirect('admin/user/');
        return back()->withErrors('修改失败');
    }
}
