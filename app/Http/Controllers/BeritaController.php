<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;
use PhpParser\Node\Expr\Cast\String_;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('Berita', ['berita' => Berita::all()]);
    }
    public function adminAll(){
        // dd();
        // dd(Berita::all());
        return view('Admin/Berita', ['berita' => Berita::all()]);
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
    public function store(StoreBeritaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(String $berita)
    {
        $Post = Berita::all()->firstWhere('Slug', $berita);
        return view('BacaBerita', ['berita'=>$Post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBeritaRequest $request, Berita $berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        //
    }
}
