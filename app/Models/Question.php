<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table='question';
    protected $primaryKey = 'id';
    protected $fillable=[
        'id','Question', 'type'
    ];
}
