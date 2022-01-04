@extends('layouts.nav')

@section('content')
<h3>Edit Makanan</h3>

<form method="post" action="{{route('makanan.update',$makanan->id)}}">
  @csrf
  @method('put')
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form=control" name="nama_makanan" value="{{$makanan->nama_makanan}}">
    </div>
    <div class="form-group">
      <label for="name">Harga Makanan</label>
      <input type="text" class="form=control" name="harga_makanan" value="{{$makanan->nama_makanan}}">
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-success" value="Simpan">
    </div>
  </form>
  @stop