<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visuel extends Model
{
    protected $fillable = [
        'adresse',
        'latitude',
        'longitude'
    ];

    public function commune()
    {
        return $this->belongsTo('App\Commune');
    }

    public function image()
    {
        return $this->belongsTo('App\Image');
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

}
