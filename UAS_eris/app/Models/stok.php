<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stok extends Model
{
    use HasFactory;

    protected $fillable = ['kode_s', 'nm_brg', 'jns_brg', 'merk', 'stok', 'brgm_id', 'brgk_id'];

    // Relasi dengan Brgm
    public function brgm(): BelongsTo
    {
        return $this->belongsTo(Brgm::class);
    }

    // Relasi dengan Brgk
    public function brgk(): BelongsTo
    {
        return $this->belongsTo(Brgk::class);
    }
}

