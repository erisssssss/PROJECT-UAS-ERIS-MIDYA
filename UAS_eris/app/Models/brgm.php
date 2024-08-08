<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brgm extends Model
{
    use HasFactory;

    // Relasi dengan Stok
    public function stoks(): HasMany
    {
        return $this->hasMany(Stok::class);
    }
}
