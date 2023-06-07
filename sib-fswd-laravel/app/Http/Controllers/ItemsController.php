<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Spatie\Backtrace\File;

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

        $image = $request->file('gambar');
        $imageName = Str::uuid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        Car::create([
            "name" => $request->name,
            "type" => $request->type,
            "jenis" => $request->jenis,
            "image" => $imageName,
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


        if($request->file('gambar')){

            $image = $request->file('gambar');
            $imageName = Str::uuid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            Car::find($request->id)->update([
                "name" => $request->name,
                "type" => $request->type,
                "jenis" => $request->jenis,
                "image" => $imageName
            ]);
        } else {
            Car::find($request->id)->update([
                "name" => $request->name,
                "type" => $request->type,
                "jenis" => $request->jenis,
            ]);
        }




        return redirect('/products');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $car = Car::find($request->id);

        $imageName = $car->image;

        Car::find($request->id)->delete();

        if(!empty($imageName)){
            $imagePath = public_path('images/' . $imageName);
            if (file_exists($imagePath)) {
               unlink($imagePath);
            }
        }

        return redirect('/products');
    }
}
