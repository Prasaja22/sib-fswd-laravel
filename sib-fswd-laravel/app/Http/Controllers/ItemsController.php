<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $car = Car::all();

        return view('dashboard.pages.product', compact('car'));
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
        $validateCreate = Validator::make($request->all(), [
            'name' => 'required|string',
            'type' => 'required|string',
            'jenis' => 'required|string',
        ]);

        if($validateCreate->fails()){
            return back()->withErrors($validateCreate)->withInput();
        }

        Car::create([
            "name" => $request->name,
            "type" => $request->type,
            "jenis" => $request->jenis,
        ]);

        return redirect('/products');
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

        $validate = Validator::make($request->all(), [
            'name' => 'required|string',
            'type' => 'required|string',
            'jenis' => 'required|string',
        ]);

        if($validate->fails()){
            return back()->withErrors($validate)->withInput();
        }

        Car::find($request->id)->update([
            "name" => $request->name,
            "type" => $request->type,
            "jenis" => $request->jenis,
        ]);

        return redirect('/products');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Car::find($request->id)->delete();

        return redirect('/products');
    }
}
