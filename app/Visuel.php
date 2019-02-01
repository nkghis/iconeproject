<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visuel extends Model
{
    protected $fillable = [
        'adresse',
        'latitude',
        'longitude',
        'estconfrere',
        'estconcurent',
        'marqueur'
    ];

    public function commune()
    {
        return $this->belongsTo('App\Commune');
    }

    public function image()
    {
        return $this->belongsTo('App\Image');
    }

    //new add
    public function campagne()
    {
        return $this->belongsTo('App\Campagne');
    }

    public function ListVisuel()
    {
        $visuel = Visuel::join('communes', 'communes.id', '=', 'visuels.commune_id')
            ->join('images', 'images.id', '=', 'visuels.image_id')
            ->select('visuels.*', 'communes.name', 'images.nameimage')
            ->get();

        return $visuel;
    }

    public function ListVisuelCommune($id)
    {
        $visuel = Visuel::join('communes', 'communes.id', '=', 'visuels.commune_id')
            ->join('images', 'images.id', '=', 'visuels.image_id')
            ->where('communes.id',$id)
            ->select('visuels.*', 'communes.name', 'images.nameimage')
            ->get();

        return $visuel;

    }

//new function
    public function VisuelCommuneCampagneAll()
    {
        $visuel = Visuel::join('communes', 'communes.id', '=', 'visuels.commune_id')
            ->join('images', 'images.id', '=', 'visuels.image_id')
            ->join('campagnes', 'campagnes.id', '=', 'visuels.campagne_id')
            ->select('visuels.*', 'communes.name', 'images.nameimage', 'campagnes.nomcampagne')
            ->get();

        return $visuel;
    }

    public function VisuelCommuneAllCampagne($id)
    {
        $visuel = Visuel::join('communes', 'communes.id', '=', 'visuels.commune_id')
            ->join('images', 'images.id', '=', 'visuels.image_id')
            ->join('campagnes', 'campagnes.id', '=', 'visuels.campagne_id')
            ->where('campagnes.id',$id)
            ->select('visuels.*', 'communes.name', 'images.nameimage', 'campagnes.nomcampagne')
            ->get();

        return $visuel;
    }

    public function VisuelCampagneAllCommune($id)
    {
        $visuel = Visuel::join('communes', 'communes.id', '=', 'visuels.commune_id')
            ->join('images', 'images.id', '=', 'visuels.image_id')
            ->join('campagnes', 'campagnes.id', '=', 'visuels.campagne_id')
            ->where('communes.id',$id)
            ->select('visuels.*', 'communes.name', 'images.nameimage', 'campagnes.nomcampagne')
            ->get();

        return $visuel;
    }

    public function VisuelBYcampagneBYcommune($idcommune, $idcampagne)
    {
        $visuel = Visuel::join('communes', 'communes.id', '=', 'visuels.commune_id')
            ->join('images', 'images.id', '=', 'visuels.image_id')
            ->join('campagnes', 'campagnes.id', '=', 'visuels.campagne_id')
            ->where('communes.id',$idcommune)
            ->where('campagnes.id',$idcampagne)
            ->select('visuels.*', 'communes.name', 'images.nameimage', 'campagnes.nomcampagne')
            ->get();

        return $visuel;
    }

}
