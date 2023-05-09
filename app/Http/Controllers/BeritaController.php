<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;
use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;
use \Cviebrock\EloquentSluggable\Services\SlugService;


class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function checkavailability(Request $request){
        
    }
    public function checkSlug(Request $request){
        // dd($request->input('Judul'));
        $Slug = SlugService::createSlug(Berita::class, 'Slug', $request->Judul);
        // dd($Slug);
        return response()->json(['Slug' => $Slug]);
    }
    public function Publish(Request $request){
        // dd([$request->id, $request->PublishDate]);
        // Berita::where('id')
        $data['Publish_at'] = $request->PublishDate;
        Berita::where('Slug',$request->id)->update($data);
    }
     public function index()
    {
        //
        // dd(Berita::all()->whereNotNull('Publish_at'));
        return view('Berita', ['berita' => Berita::all()->whereNotNull('Publish_at')]);
    }
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
        dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(String $berita)
    {
        $Post = Berita::all()->firstWhere('Slug', $berita);
        // $Post->view = $Post->view + 1;
        $Data['view'] = $Post->view + 1;
        Berita::where('id',$Post->id)->update($Data);
        // dd($Post->view);
        return view('BacaBerita', ['berita'=>$Post, 'recomend'=> Berita::all()->random(4)]);
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
