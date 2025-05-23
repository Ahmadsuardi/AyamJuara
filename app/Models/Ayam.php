<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ayam extends Model
{
    
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
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
}
