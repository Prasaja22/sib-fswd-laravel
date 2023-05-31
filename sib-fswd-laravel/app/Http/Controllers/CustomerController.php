<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer = Customer::all();

        return view('dashboard.pages.customer', compact('customer'));
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
        // Customer::create(
        //    [
        //     "nama" => $request->nama,
        //     "email" => $request->email,
        //     "alamat" => $request->alamat,
        //    ]
        // );

        // return redirect('/customer');
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

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        Customer::find($request->id)->update([
            "nama" => $request->nama,
            "email" => $request->email,
            "alamat" => $request->alamat,

        ]);

        return redirect('/customer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
    }
}
