<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Novel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function textbook(): HasMany
    {
        return $this->hasMany(TextBlock::class);
    }
}
