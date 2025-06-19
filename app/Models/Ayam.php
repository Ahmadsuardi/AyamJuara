<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ayam extends Model
{
    use HasFactory;

    protected $table = 'ayam';

    protected $fillable = [
        'user_id',
        'nama',
        'description',
        'harga',
        'gambar',
        'stok',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function detailPesanan()
    {
        return $this->hasMany(DetailPesanan::class);
    }

    public function penjual()
{
    return $this->belongsTo(User::class, 'user_id');
}

}
