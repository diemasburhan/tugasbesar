@extends('layouts.nav')

@section('content')
<h3>Edit Modal</h3>

<form method="post" action="{{route('modal.update',$modal->id)}}">
  @csrf
  @method('put')
    <div class="form-group">
        <label for="name">Bahan-Bahan</label>
        <input type="text" class="form-control" name="bahan" value="{{$modal->bahan}}">
    </div>
    <div class="form-group">
      <label for="name">Harga Bahan</label>
      <input type="text" class="form-control" name="harga_bahan" value="{{$modal->harga_bahan}}">
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-success" value="Simpan">
    </div>
  </form>
  @stop