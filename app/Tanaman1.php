<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanaman1 extends Model
{
    protected $table = "tanaman1";
    
    protected $fillable = ['nutrisi','sensor1','sensor2','sensor3','suhu','cahaya'];
}
