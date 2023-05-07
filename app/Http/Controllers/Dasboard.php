<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class Dasboard extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(Berita::all());
        return view('Admin/Berita', ['berita' => Berita::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd([$request]);
        // dd($request);
        $Data = $request->validate([
            'Judul' => 'required',
            'Slug' => 'required|unique:beritas',
            'isi' => 'required',
            'Gambar' => 'image'
        ]);
        if($request->file('Gambar')){
            $Data['Gambar'] = $request->file('Gambar')->store('Gambar');
        
        }else{
            $Data['Gambar'] = 'Gambar/no-image.jpg';
        }
        // dd($Data);
        $Data['excerpt'] = Str::limit(strip_tags($request->isi), 100);
        Berita::create($Data);
        return redirect('/Admin/Berita')->with('success', 'Barita sudah ditambahkan');
        // $Data->Judul = $request->Judul;

        // dd($request->Judul);
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        //
        $Berita = DB::table('beritas')->where('id', $id)->first();
        // dd($Berita);
        return view('Admin.edit', ['Berita' => $Berita]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {

        $rule = [
            'Judul' => 'required',
            'isi' => 'required'
        ];
        $Berita = DB::table('beritas')->where('id', $id)->first();
        if($request->Slug != $Berita->Slug){
            $rule['Slug'] = 'required|unique:beritas';
        }
        $Data = $request->validate($rule);
        // dd([$id,$request->Judul]);
        Berita::where('id',$id)->update($Data);
        return redirect('/Admin/Berita')->with('success', 'Barita berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {

        // dd($berita);
        Berita::destroy($id);
        return redirect('/Admin/Berita')->with('success', 'Barita sudah dihapus');
    }
}
