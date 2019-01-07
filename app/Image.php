<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'nameimage'
    ];

    public function visuels()
    {
        return $this->hasMany('App\Visuel');
    }
}
