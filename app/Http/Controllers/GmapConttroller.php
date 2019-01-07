<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\ResetPasswordController;
use App\maps;
use App\Mymap;
use FarhanWazir\GoogleMaps\GMaps;
use Illuminate\Http\Request;

class GmapConttroller extends Controller
{


    public function index()
    {
        return view('map');



    }

    public function upload ()
    {

    }

    public function enregistrer (Request $request)
    {

        return $request->file('image');
    }

    public function map()
    {

        return view('mymap.index');
    }
}
