<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penjualan extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'tgl_faktur',
        'no_faktur',
        'nama_konsumen',
        'barang_id',
        'jumlah',
        'harga_satuan',
        'harga_total',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'tgl_faktur' => 'date',
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
