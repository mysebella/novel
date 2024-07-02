<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TextBlock extends Model
{
    use HasFactory;

    public function novel(): BelongsTo
    {
        return $this->belongsTo(Novel::class);
    }
}
