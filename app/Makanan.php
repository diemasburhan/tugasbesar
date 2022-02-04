<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    protected $table = 'menu';
    public $timestamps = false;
    protected $fillable = ['nama_menu','harga','kode_menu','gambar'];

}
