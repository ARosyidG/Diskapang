<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('Admin.Galery', ['Gambar' => Galery::all()]);
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
        $Data = $request->validate([
            'Caption' => 'required',
            'name' => 'required'
        ]);
        $fileExt = $request->file('name')->getClientOriginalExtension();
        $fileName = $request->Caption . '.' . $fileExt;
        $Data['name'] = $request->file('name')->storeAS('Galeri', $fileName);
        // dd($Data['path']);
        Galery::create($Data);
        return redirect('/Admin/Galeri')->with('success', 'Data sudah ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Galery $galery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galery $galery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galery $galery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galery $galery)
    {
        //
    }
}
