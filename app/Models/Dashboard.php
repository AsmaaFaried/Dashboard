<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    protected $table='dashboards';
    protected $fillable=['id','email','password','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];
//    public $timestamps=false;
}
