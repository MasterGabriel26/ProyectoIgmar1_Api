<?php

namespace App\Models\rrhh;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class persona extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'personas';
    protected $dates = ['deleted_at'];
}
