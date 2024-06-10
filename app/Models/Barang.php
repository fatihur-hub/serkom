<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barang extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'harga_jual',
        'harga_beli',
        'satuan',
        'kategori',
    ];

    protected $searchableFields = ['*'];

    public function penjualans()
    {
        return $this->hasMany(Penjualan::class);
    }
}
