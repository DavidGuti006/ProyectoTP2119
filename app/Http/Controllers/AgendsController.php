<?php

namespace App\Http\Controllers;

use App\Models\Agends;
use Illuminate\Http\Request;

class AgendsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agends=Agends::all();
        return view('agends',compact('agends'));
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
    public function show(Agends $agends)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agends $agends)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agends $agends)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agends $agends)
    {
        //
    }
}
