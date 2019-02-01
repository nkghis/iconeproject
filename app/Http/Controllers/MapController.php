<?php

namespace App\Http\Controllers;

use App\Campagne;
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
        $visuel = $v->VisuelCommuneCampagneAll();

        //ajouter
        $campagne = Campagne::all();


        return view('map.index', compact('commune', 'visuel','campagne'));
    }

    public function bycommune(Request $request)
    {
        $id = $request->input('commune');
        $idcampagne = $request->input('campagne');
        $commune = Commune::all();
        $campagne = Campagne::all();
        $v = new Visuel();

        if ($id == 0 && $idcampagne == 0)
        {

            return redirect()->action('MapController@index');

        }
        else
        {
            if ($id != 0 && $idcampagne != 0)
            {
                $visuel = $v->VisuelBYcampagneBYcommune($id,$idcampagne);
                $cs = Commune::find($id);
                $cm = Campagne::find($idcampagne);

                //return 'by commune & by campagne';

            }
            else
            {
                if ($id == 0 && $idcampagne !=0)
                {
                    $visuel = $v->VisuelCommuneAllCampagne($idcampagne);
                    $cs = new Commune();
                    $cs->id = 0;
                    $cs->name = 'All communes';
                    $cm = Campagne::find($idcampagne);
                    //return 'toutes les communes par campagne';
                }
                else
                {
                    $visuel = $v->VisuelCampagneAllCommune($id);
                    $cm = new Campagne();
                    $cm->id = 0;
                    $cm->nomcampagne = 'All campagnes';
                    $cs = Commune::find($id);

                    //return 'toutes les campagne par commune';
                }


            }


            return view('map.filter', compact('commune', 'visuel', 'cs', 'cm', 'campagne'));


        }
        /*$id = $request->input('commune');
        $idcampagne = $request->input('campagne');
        dd($idcampagne, $id);
        $v = new Visuel();
        $commune = Commune::all();
        $campagne = Campagne::all();
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


        return view('map.filter', compact('commune', 'visuel', 'cs'));*/

    }
}
