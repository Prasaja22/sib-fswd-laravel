<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\TryCatch;

class ProductApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Car::get();

        return response()->json([
            'status' => 'success',
            'message' => 'data berhasil didapatkan',
            'data' => $data,
        ]);
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

        $validator = Validator::make( $request->all(), [
            'name' => 'required',
            'type' => 'required',
            'jenis' => 'required',
        ]);

        if($validator->fails()){
            $errors = $validator->errors();
            return response()->json(['errors' => $errors], 422);
        }

        $data = Car::create([
            "name" => $request->name,
            "type" => $request->type,
            "jenis" => $request->jenis,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'data berhasil ditambahkan',
            'data' => $data
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $data = Car::findOrFail($id);

            return response()->json([
                'status' => 'success',
                'message' => 'data berhasil ditemukan',
                'data' => $data,
            ], 200);

        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $data = Car::findOrFail($id);

            return response()->json([
                'status' => 'success',
                'message' => 'data berhasil ditemukan',
            ], 200);

        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'type' => 'required',
            'jenis' => 'required',
        ]);

        if($validator->fails()){
            $errors = $validator->errors();
            return response()->json(['errors' => $errors], 422);
        }

        $data = Car::findOrFail($id)->update([
            'name' => $request->name,
            'type' => $request->type,
            'jenis' => $request->jenis,
            'image' => $request->image,
        ]);

        return response()->json(
            [
                'status' => 'success',
                'message' => 'data berhasil di update',
            ]
            , 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Car::findOrFail($id)->delete();

            return response()->json([
                'message' => 'data berhasil dihapus',
            ], 200);

        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['message' => 'Data yang dihapus tidak ada'], 404);
        }
    }
}
