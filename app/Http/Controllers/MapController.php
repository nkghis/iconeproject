<?php

namespace App\Http\Controllers;

use App\Commune;
use App\Map;
use App\Visuel;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
    {

        $commune = Commune::all();
        $v = new Visuel();
        $visuel = $v->ListVisuel();

        return view('map.index', compact('commune', 'visuel'));
    }

    public function bycommune(Request $request)
    {

        $id = $request->input('commune');
        $v = new Visuel();
        $commune = Commune::all();
        $communeselected = Commune::find($id);
        //dd($communeselected);
        if ($communeselected == null)
        {
            $visuel = $v->ListVisuel();
            $cs = new Commune();
            $cs->id = 0;
            $cs->name = '-- Toutes les communes --';


        }
        else
        {

            $visuel = $v->ListVisuelCommune($id);
            $cs = $communeselected;
        }


        return view('map.filter', compact('commune', 'visuel', 'cs'));

    }
}
