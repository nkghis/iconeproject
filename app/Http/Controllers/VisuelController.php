<?php

namespace App\Http\Controllers;

use App\Campagne;
use App\Commune;
use App\GmapLocation;
use App\Image;
use App\maps;
use App\Mymap;
use App\Visuel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VisuelController extends Controller
{
    public function index()
    {
        $commune = Commune::all();
        $campagne = Campagne::all();
        return view('visuel.index', compact('commune','campagne'));
    }
    public function store(Request $request)
    {
        //dd($request->input('concurrent'));

      /*  if ($request->input('concurrent')==true)
        {
            dd('true');
        }*/

        //dd('false');

        $this->validate($request, [
            'adresse' => 'required',
            'commune' => 'required|not_in:0',
            'campagne' => 'required|not_in:0',
            'image' => 'image|required'

        ]);

        if($request->hasFile('image'))
        {

            /*Get image file name original*/
            $filename = $request->file('image')->getClientOriginalName();

          /*
            * Store Image in Storage path - dont forget to map storage path with public path with command below:
                php artisan storage:link
            * public/mesimages store image in storage/app/public/mesimage

           */
            $request->file('image')->storeAs('public/mesimages',$filename);


            $map = new GmapLocation();
            $url ='storage/mesimages/'.$filename;
            //$url ='storage/app/public/mesimages/'.$filename;
            //dd($url);
            $imglocation = $map->get_image_location($url);
            if ($imglocation != false)
            {
                $image = new Image();
                $image->nameimage = $filename;
                $image->save();
                if ($request->input('concurrent')==false && $request->input('confrere')==false )
                {
                    $concurent = 0;
                    $confrere =0;
                    $marqueur = 'red';
                }
                else
                {
                    if ($request->input('concurrent')==true)
                    {
                        $concurent = $request->input('concurrent');
                        $confrere =0;
                        $marqueur = 'yellow';
                    }
                    else
                    {
                        $confrere = $request->input('confrere');
                        $concurent =0;
                        $marqueur = 'blue';

                    }


                }

                /*if ($request->input('concurrent')==true)
                {
                    $concurent = $request->input('concurrent');
                    $marqueur = 'yellow';
                }
                else
                {
                    $concurent = 0;
                    $marqueur = 'red';
                }

                if ($request->input('confrere')==true)
                {
                    $confrere = $request->input('confrere');
                    $marqueur = 'blue';
                }
                else
                {
                    $confrere = 0;
                    $marqueur = 'red';
                }*/

                $visuel = new Visuel();
                $visuel->adresse = $request->adresse;
                $visuel->latitude = $imglocation['latitude'];
                $visuel->longitude = $imglocation['longitude'];
                $visuel->image_id = $image->id;
                $visuel->commune_id = $request->commune;
                $visuel->campagne_id = $request->campagne;
                $visuel->estconcurent = $concurent;
                $visuel->estconfrere = $confrere;
                $visuel->marqueur = $marqueur;

                $visuel->save();

                session()->flash('message', 'Le visuel ayant pour adresse'.' '.$visuel->adresse.' '.'a été enregistré avec succès.');
                return redirect()->action('VisuelController@index');
               /* $imglat = $imglocation['latitude'];
                $imglng = $imglocation['longitude'];

                return $imglng;*/
            }
            else
            {
                /*var_dump(Storage::delete('storage/mesimages/'.$filename));
                Storage::delete('storage/mesimages/'.$filename);*/
                session()->flash('erreur', 'DESOLE !!! La photo du visuel nommée ne contient pas des données de localisation.');

                /*session()->flash('erreur', 'DESOLE !!! La photo du visuel nommée : '.' '.$filename.' '. 'ne contient pas des données de localisation.');
                Storage::delete('storage/mesimages/'.$filename);*/

                return redirect()->action('VisuelController@index');
            }




            /*$map = new maps();
            $url ='storage/mesimages/'.$filename;
            $imglocation = $map->get_image_location($url);
            if (!empty($imglocation))
            {
                $image = new Image();
                $image->nameimage = $filename;
                $image->save();
                $imglat = $imglocation['latitude'];
                $imglng = $imglocation['longitude'];

                return $imglng;
            }
            else
            {
                return 'false';
            }*/


            //$imglat = 'test';
            //$test = $imglat;

            /*session()->flash('message', 'Le visuel a été enregistré avec succès');
            return redirect()->action('VisuelController@index');*/


        }
        else
        {
            session()->flash('erreur', 'non fichier image');
        }

    }
}
