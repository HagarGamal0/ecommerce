<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    protected $guarded=[];

    public $timestamps= true;


}
