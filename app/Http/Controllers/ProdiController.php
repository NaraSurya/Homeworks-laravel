<?php

namespace App\Http\Controllers;

use App\prodi;
use App\mahasiswa;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prodi = prodi::all();;
        return view('prodi/index',['prodis'=>$prodi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prodi/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prodi = new prodi;
        $prodi->nama_prodi = $request->nama_prodi;
        $prodi->save();
        return redirect('prodi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function show(prodi $prodi)
    {
        $mahasiswas = prodi::find($prodi->id)->mahasiswa;
        return view('prodi/show' , ['mahasiswas'=>$mahasiswas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function edit(prodi $prodi)
    {
        return view('prodi/edit' , ['prodi'=>$prodi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, prodi $prodi)
    {
        $prodi->nama_prodi = $request->nama_prodi;
        $prodi->save();
        return redirect('prodi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function destroy(prodi $prodi)
    {
        $prodi->delete();
        return redirect('prodi');
    }
}
