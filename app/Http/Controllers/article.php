<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\articel_model;
use App\category_model;
class article extends Controller
{
    public function shown(){
        $r=articel_model::with('cate')->get();
        return response()->json($r);
    }
}
