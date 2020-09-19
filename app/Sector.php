<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $fillable = ['name', 'description', 'body', 'posiiton', 'condition', 'image', 'slug'];
}
