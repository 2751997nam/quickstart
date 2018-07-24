<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    protected $fillable = 
    [
        'id',
        'name',
        'created_at',
        'updated_at',
    ];
}
