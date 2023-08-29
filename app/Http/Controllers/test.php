<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class test extends Controller
{
    //
    public function test(){
        $users = DB::table('beritas')->get();
        print($users);
    }
}
