<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class testingController extends Controller
{
    //
    public function index(){
        $berita = Berita::all();
        return view('Testing' , ['berita' => $berita]);
    }

}
