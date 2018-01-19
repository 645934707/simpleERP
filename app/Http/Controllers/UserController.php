<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as User;
use Hash;

class UserController extends Controller
{
    //
    public function userList(Request $request){
        $keyword = empty($request->get('keyword')) ? '' : $request->input('keyword');
        if($keyword){
            //var_dump(User::where('name',$keyword)->toSql());
            $userlist = User::where('name','like','%'.$keyword.'%')->paginate(10);
        }else{
            $userlist = User::paginate(10);
        }
        return view('user/userList',['breadcrumb'=>'管理员列表','userlist'=>$userlist,'keyword'=>$keyword]);
    }

    public function addUser(){
        return view('user/userAdd',['breadcrumb'=>'添加管理员']);
    }

    public function doAddUser(Request $request){
        $this->validate($request,[
            'name' => 'required|unique:users|max:50',
            'email' => 'required|unique:users|max:50',
            'password' => 'required|max:18|min:6',
            'repass' => 'required|max:18|min:6',
        ]);
        if($request->input('password') !== $request->input('repass')){
            return back()->withErrors('两次密码不一致');
        }
        $data['name'] = $request->input('name');
        $data['email'] = $request->input('email');
        $data['password'] = Hash::make($request->input('email'));
        $data['created_at'] = date('Y-m-d H:i:s');
        if(User::insert($data)){
            return redirect('/user/list')->with('Update Success! 成功！');
        }
        return back()->withErrors('添加失败');
    }


    public function store(Request $request){

    }
}
