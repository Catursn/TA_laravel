<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanaman2 extends Model
{
    protected $table = "tanaman2";

    protected $fillable = ['nutrisi','sensor1','sensor2','sensor3','suhu','cahaya'];
}
