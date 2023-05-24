<?php

namespace App\Models\rrhh;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\rrhh\persona;
use App\Models\rrhh\Modelo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Auto extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'autos'; 
    protected $dates = ['deleted_at'];
    
}   
