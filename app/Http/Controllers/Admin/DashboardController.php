<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function registered(){
        $users=user::all();
        return view('admin.register')->with('users',$users);
    }
    public function edit(Request $request,$id){
        $users=user::findOrFail($id);
        return view('admin.edit')->with('users',$users);
    }
    public function update(Request $request,$id){
        $users=user::find($id);
        $users->name=$request->input('username');
        $users->usertype=$request->input('usertype');
        $users->update();
        return redirect('/roleRegister')->with('status','Updated');
    }
    public function delete($id){
        $users=user::findOrFail($id);
        $users->delete();
        return redirect('/roleRegister')->with('status','Deleted');
    }

}
