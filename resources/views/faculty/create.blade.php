@extends('layouts.app')

@section('content')
<h3>Tambah Fakultas</h3>

<form method="post" action="{{route('faculty.store')}}">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form=control" name="name">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success" value="Simpan">
    </div>
  </form>
  @stop