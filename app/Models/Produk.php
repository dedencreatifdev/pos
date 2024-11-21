<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produk extends Model
{
    /** @use HasFactory<\Database\Factories\ProdukFactory> */
    use HasFactory;
    protected $table = 'sma_products';
    protected $guarded = [];

    /**
     * Get the user that owns the Produk
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getSatuan(): BelongsTo
    {
        return $this->belongsTo(Satuan::class, 'unit', 'id');
    }
    public function getKategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'category_id', 'id');
    }
    public function getMerk(): BelongsTo
    {
        return $this->belongsTo(Merk::class, 'brand', 'id');
    }
}