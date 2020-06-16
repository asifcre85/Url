<?php

namespace App\Http\Controllers\Admin;

use App\Models\Abouts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutsController extends Controller
{
    public function index(){
        $abouts=abouts::all();
        return view('admin.abouts')->with('abouts',$abouts);
       
    }
public function save(Request $request)
{
    $abouts=new Abouts;
    $abouts->title=$request->input('title');
    $abouts->subtitle=$request->input('subtitle');
    $abouts->description=$request->input('description');
    $abouts->save();
    return redirect('/abouts')->with('status','Data added');
}
public function edit($id){
    $abouts=Abouts::findOrFail($id);
    return view('admin.abouts.edit')->with('abouts',$abouts);
}
public function update2(Request $request,$id){
    $abouts=Abouts::find($id);
    $abouts->title=$request->input('title');
    $abouts->subtitle=$request->input('subtitle');
    $abouts->description=$request->input('description');
    $abouts->update();
    return redirect('/abouts')->with('status','Updated');
}
public function delete2($id){
    $abouts=Abouts::findOrFail($id);
    $abouts->delete();
    return redirect('/abouts')->with('status','Deleted');
}


}
