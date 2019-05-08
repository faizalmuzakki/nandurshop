<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commodity extends Model
{
    protected $fillable = [
        'variety_id', 'name', 'planted_at', 'image_url'
    ];

    public function variety(){
        return $this->belongsTo('App/Models/Variety');
    }
}
