<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    protected $table="animals";
    protected $guarded=['id','created_at','updated_at'];

    public function reportes(){

        return $this->belongsToMany('App\Models\Reporte') ;   
        }
}
