<?php


namespace App\Helper;

use Illuminate\Support\Facades\DB;

class helper
{
    public static function kode_otomatis($start, $table, $field, $length)
    {
        $awalan = $start;
        $query = DB::table($table)->orderBy($field, 'desc');
        $lebar = $length;
        $jumlahrecord = $query->count();
        if ($jumlahrecord == 0) {
            $nomor = 1;
        } else {
            $row = $query->get();
            $nomor = intval(substr($row[0]->$field, strlen($awalan))) + 1;
        }

        if ($lebar > 0)
            $angka = $awalan . str_pad($nomor, $lebar, "0", STR_PAD_LEFT);
        else
            $angka = $awalan . $nomor;

        return $angka;
    }
}
