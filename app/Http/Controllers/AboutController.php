<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index()
    {
        $data = array(
            'abouts' => About::all()
        ) ;
        return view('back.about',$data);
    }

    public function edit($id){
        $about = About::find($id);
        return view('back.edit',compact(['about']));
    }

    public function update(Request $request, $id){
        $request->validate([
            'about' => 'required',
        ]);
        $about = About::find($id);
        $about->update([
            'about'=> $request->about,
        ]);
        return redirect('/about') -> with('success','About Has Been Updated');
    }
    public function show(){
        $data = array(
            'abouts' => About::all()
        ) ;
        return view('index',$data);
    }
}
