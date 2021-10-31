<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Excel extends Model
{
    protected $fillable = ['name', 'email', 'birth_date', 'country', 'city'];
}
