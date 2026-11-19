<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoProduk extends Model
{
    public $timestamps = true; 
    protected $table = "foto_produk"; 
    protected $guarded = ['id'];

    public function fotoProduk() 
    { 
        return $this->hasMany(FotoProduk::class);
        } 
    public function user() 
    { 
        return $this->belongsTo(User::class); 
        }
}
