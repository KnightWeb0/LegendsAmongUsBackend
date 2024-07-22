<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;


    // protected $fillable = [
// 'employer_id',
// 'title',
// 'salary',
// ];

//guarded fields
//if we are saying guarded to an empty array we dont need to guard anything []
protected $guarded = [];


   //an album belogns to a band
    public function bands(){
        //this is going to return a relationship type
        // a job listing belongs to an employer
        //an employer can have many jobs this relation type is called has many
        return $this->belongsTo(Bands::class);



        //----- in tinker
        // $job = App\Models\Job::first();
        // $job->employer;
        // $job->employer->name;

        //this is doing lazy loading which means its not being performed untill the last minuet
        //when you request it
    //     what this relationship type allows us to do is
    //    sql query: SELECT Employer where id = 2 or whatever the id is
    //that belongs to that job for that specific employer

    }


//    many songs can belong to one album
    public function songs()
    {
        return $this->hasMany(Songs::class);
    }




}
