@extends('layouts.nav')

@section('content')
<h3>Tambah Barang</h3>

<form method="post" action="{{route('makanan.store')}}">
    @csrf
    <div class="form-group">
        <label for="name">Nama Makanan</label>
        <input type="text" class="form=control" name="nama_makanan">
    </div>
    <div class="form-group">
        <label for="name">Harga Makanan</label>
        <input type="text" class="form=control" name="harga_makanan">
    </div>
    <div class="form-group">
        <label for="name">Total Pembelian</label>
        <input type="text" class="form=control" name="total_pembelian">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success" value="Simpan">
    </div>
  </form>
  @stop