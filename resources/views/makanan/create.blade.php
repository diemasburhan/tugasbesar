@extends('layouts.nav')

@section('content')
<h3>Tambah Menu</h3>

<form method="post" action="{{route('makanan.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Kode Menu</label>
        <input type="text" class="form-control" value="{{ $kode_otomatis }}" name="kode_menu" readonly>
    </div>
    <div class="form-group">
        <label for="name">Nama Menu</label>
        <input type="text" class="form-control" name="nama_menu">
    </div>
    <div class="form-group">
        <label for="name">Harga</label>
        <input type="text" class="form-control" name="harga_menu">
    </div>
    <div class="form-group">
        <label for="name">Gambar (Pilih Jika ingin ubah gambar )</label>
        <input type="file" class="form-control" name="gambar" accept="image/*">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success" value="Simpan">
    </div>
  </form>
  
  @stop