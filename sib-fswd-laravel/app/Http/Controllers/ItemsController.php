<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = "Ghozy Nouval";

        $users = [
           [
            "id" => "1",
            "nama" => "Ghozy Nouval",
            "email" => "Ghozy@gmail.com",
            "role" => "Admin",
            "status" => "active",
            "date" => "1/2/2023",
           ],
           [
            "id" => "2",
            "nama" => "Maulana Alief",
            "email" => "maulanaalif@gmail.com",
            "role" => "Staff",
            "status" => "active",
            "date" => "1/2/2022",
           ],
           [
            "id" => "3",
            "nama" => "Ilham Maulana Alief",
            "email" => "ilhamaliief@gmail.com",
            "role" => "Admin",
            "status" => "active",
            "date" => "1/2/2022",
           ],
           [
            "id" => "4",
            "nama" => "Ilham Maulana",
            "email" => "ilhammaulana@gmail.com",
            "role" => "Staff",
            "status" => "active",
            "date" => "1/2/2022",
           ],
        ];



        return view('dashboard.pages.user')->with(compact('user', 'users'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
