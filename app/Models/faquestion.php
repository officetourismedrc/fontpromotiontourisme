<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Faqanswer;

class faquestion extends Model
{
    use HasFactory;

    protected $fillable = ['user_name', 'email','question'];

    /**
     * Get all of the answers for the faquestion
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function answers(): HasMany
    {
        return $this->hasMany(Faqanswer::class, 'faquestion_id', 'id');
    }
}
