@extends('layouts.nav')

@section('content')
<h3>Edit Makanan</h3>

<form method="post" action="{{route('makanan.update',$makanan->id)}}" enctype="multipart/form-data">
  @csrf
  @method('put')
   <div class="form-group">
        <label for="name">Kode Menu</label>
        <input type="text" class="form-control" value="{{ $makanan->kode_menu }}" name="kode_menu" readonly>
    </div>
    <div class="form-group">
        <label for="name">Nama Menu</label>
        <input type="text" class="form-control" value="{{ $makanan->nama_menu }}" name="nama_menu">
    </div>
    <div class="form-group">
        <label for="name">Harga</label>
        <input type="text" class="form-control" value="{{ $makanan->harga }}" name="harga_menu">
    </div>
    <div class="form-group">
        <label for="name">Gambar</label>
        <input type="file" class="form-control" name="gambar" accept="image/*">
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-success" value="Simpan">
    </div>
  </form>
  @stop