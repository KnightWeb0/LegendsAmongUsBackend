<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bands extends Model
{
    use HasFactory;

    protected $guarded = [];
    //a band belongs to an Artist
    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }


    //a band can have many albums
    public function albums(){

        //we always specify the model class it links to
        return $this->hasMany(Album::class);

        //--- tinker
        //if we have our employer object and we call jobs
        //this will call 1 or more jobs
        // becuase an employer could of created many jobs that are associated with the employer
        // $employer->job

        //for now think an collection is an array on steriords
        // we can loop over it like any other api, but it also includes an api
        // which helps with looping becuase its wrapped into this collection instance
        // and number of methods
        // we can interact with it like an array [0] or methods like first();
        //collection  Illuminate\Database\Eloquent\Collection

    }
}
