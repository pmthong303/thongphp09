<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class userController extends Controller
{
    public function getUser()
    {
        return view('admin.user.create');
    }
    public function postUser(UserRequest $request)
    {
        $users = new User();
        $users->name     =  $request->name;
        $users->role     =  $request->role;
        $users->username =  $request->username;
        $users->password =  bcrypt($request->password);
        $users->email    =  $request->email;
        $users->save();
        Session::flash('message', 'Thêm người dùng thành công');
        return redirect()->route('listUser');
    }
    public function listUser()
    {
        $users = User::all();
        return view('admin.user.list',compact('users'));
    }
    public function editUser($id)
    {
        $users = User::find($id);
        return view('admin.user.edit',compact('users'));
    }
    public function updateUser(Request $request)
    {
        $id = $request->id;
        $users = User::find($id);
        $users->name     =  $request->name;
        $users->role     =  $request->role;
        $users->username =  $request->username;
        $users->password = bcrypt($request->password);
        $users->email    =  $request->email;
        $users->save();
        Session::flash('message', 'Sửa thành công');
        return redirect()->route('listUser');
    }
    public function deleteUser($id)
    {
        $users = User::find($id);
        $users->delete();
        Session::flash('message', 'Xóa thành công');
        return redirect()->route('listUser');
    }
    public function getLogin()
    {
        return view('login');
    }
    public function postLogin(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        if(Auth::attempt(['username'=>$username,'password'=>$password])){
            return redirect()->route('admin');
        }else{
            return redirect()->route('login');
        }
    }
    public function adminLogout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
