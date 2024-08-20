<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sitestat extends Model
{
    use HasFactory;
    //field that can be filled on the model
    protected $fillable = ['token','ip','user_agent','path_visited'];

}
