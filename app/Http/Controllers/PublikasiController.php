<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\File;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!auth()->check() || auth()->user()->role === 'PPID'){
            return view('Admin.Publikasi', [
                'File' => File::where('Category','!=', 'karya-Ilmiah')->get(),
                'Pengumuman'=> null,
                'Agenda' => null
            ]);
        }
        if(!auth()->check() || auth()->user()->role === 'Admin'){
            return view('Admin.Publikasi', [
                'File' => File::where('Category','=', 'karya-Ilmiah')->get(),
                'Pengumuman'=> Pengumuman::all(),
                'Agenda' => Agenda::all()
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Admin.PublikasiUpload');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        if($request->Category == 'karya-Ilmiah'||$request->Category == 'Informasi-Setiap-Saat'||$request->Category == 'Informasi-Berkala'||$request->Category == 'Informasi-Serta-Merta'){
            $Data = $request->validate([
                'Category' => 'required',
                'Name' => 'required',
                'Tahun' => 'required',
                'File' => 'required'
            ]);
            $Data['path'] = $request->file('File')->store('PPID');
            // dd($Data['path']);
            File::create($Data);
            return redirect('/Admin/Publikasi')->with('success', 'Data sudah ditambahkan');
        }elseif($request->Category == 'Pengumuman'){
            $Data = $request->validate([
                'isipengumuman' => 'required',
            ]);
            // dd("lol");
            Pengumuman::create($Data);
            return redirect('/Admin/Publikasi')->with('success', 'Data sudah ditambahkan');
        }
        elseif($request->Category == 'Agenda'){
            $Data = $request->validate([
                'Name' => 'required',
                'Pelaksanaan' => 'required'
            ]);
            Agenda::create($Data);
            return redirect('/Admin/Publikasi')->with('success', 'Data sudah ditambahkan');
        }

        
    }

    /**
     * Display the specified resource.
     */
    public function show(File $file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(File $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, File $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(File $file)
    {
        //
    }
}
