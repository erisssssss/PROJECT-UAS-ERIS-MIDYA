<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Brgk extends Model
{
    use HasFactory;

    // Relasi dengan Stok
    public function stok(): BelongsTo
    {
        return $this->belongsTo(Stok::class);
    }
}
