<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    protected $fillable = ['nama_makan','harga_makanan','total_pembelian'];

}
