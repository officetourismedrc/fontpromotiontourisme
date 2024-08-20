<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\faquestion;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Faqanswer extends Model
{
    use HasFactory;

    /**
     * Get the question associated with the Faqanswer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function question(): HasOne
    {
        return $this->hasOne(faquestion::class, 'faquestion_id', 'id');
    }
}
