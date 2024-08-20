<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PdfDocu extends Model
{
    use HasFactory;

    protected $fillable = ['nbr_download'];
}
