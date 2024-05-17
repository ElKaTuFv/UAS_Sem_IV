<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //public function index()
    public function index()
    {
        $data = array(
            'tamus' => Tamu::all()
        ) ;
        return view('back.dashboard',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->isMethod('post')){
            $tamu = new Tamu();
            $tamu->nama = $request->nama;
            $tamu->email = $request->email;
            $tamu->pesan = $request->pesan;
            $tamu->save();
            return redirect('/')->with(['success' => 'your message has been sent']);
        }
        return view('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tamu  = Tamu::find($request->id);
        $data = array(
            'tamu' => $tamu
        );

        if($request->isMethod('post')){
            $tamu->nama = $request->nama;
            $tamu->email = $request->email;
            $tamu->pesan = $request->pesan;
            $tamu->save();
            return redirect('/login')->with(['success' => 'Update successful']);
        }
        return view('index',$data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $tamu = Tamu::find($request->id);
        $tamu->delete();
        return redirect('/login')->with(['delete' => 'data has been successfully deleted']);
    }

    public function cari(Request $request)
    {
        if($request->has('cari')){
            $tamus = Tamu::where('nama','LIKE','%'.$request->cari.'%')->orwhere('email','LIKE','%'.$request->cari.'%')->paginate(5);

        }else{
            $tamus = Tamu::all();
        }
        return view('back.cari',compact('tamus'));
    }

}
