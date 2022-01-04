@extends('layouts.app')

@section('content')
<h3>Edit mahasiswa</h3>

<form method="post" action="{{route('faculty.update',$faculty->id)}}">
  @csrf
  @method('put')
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form=control" name="name" value="{{$faculty->name}}">
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-success" value="Simpan">
    </div>
  </form>
  @stop