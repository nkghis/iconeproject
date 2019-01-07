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

    public function bycommune($id)
    {
        $id = $_GET['id'];
        dd($id);
        /*$id = $_GET['id'];
        dd($id);
        $commune = Commune::all();
        $v = new Visuel();
        $visuel = $v->ListVisuelCommune($id);
        return view('map.index', compact('commune', 'visuel'));*/
        return 'test';
    }
}
