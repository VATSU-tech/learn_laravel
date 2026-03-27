<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class etudiant extends Model
{
    //
    protected $table = "t_etudians";
    protected $fillable = ["name","age","phone"];
}
