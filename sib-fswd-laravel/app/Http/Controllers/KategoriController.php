<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kategori::all();

        return view('dashboard.pages.kategori' , compact('data'));
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
        Kategori::create([
            "nama_kategori" => $request->nama,
            "deskripsi" => $request->deskripsi,
        ]);

        return redirect('/kategory');
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
    public function update(Request $request)
    {
        Kategori::find($request->id)->update([
            "nama_kategori" => $request->nama,
            "deskripsi" => $request->deskripsi,
        ]);

        return redirect('/kategory');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Kategori::find($request->id)->delete();

        return redirect('/kategory');
    }
}
