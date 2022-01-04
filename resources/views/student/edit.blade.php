@extends('layouts.app')

@section('content')
<h3>Edit mahasiswa</h3>

<form method="post" action="{{route('student.update',$student->id)}}">
  @csrf
  @method('put')
    <div class="form-group">
      <label for="code">NRP</label>
      <input type="text" class="form=control" name="code" value="{{$student->code}}">
    </div>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form=control" name="name" value="{{$student->name}}">
    </div>
    <div class="form-group">
        <label for="gender">Jenis Kelamin</label>
        <input type="radio" class="form-control-inline" name="gender" value="P"
          {{$student->gender =='P' ? 'checked' :''}} > Pria
        <input type="radio" class="form-control-inline" name="gender" value="W"
          {{$student->gender =='W' ? 'checked' :''}} > Wanita
    </div>
    <div class="form-group">
        <label for="name">Tempat Lahir</label>
        <input type="text" class="form=control" name="birth_place"
        value="{{$student->birth_place}}">
    </div>
    <div class="form-group">
        <label for="name">Tanggal Lahir</label>
        <input type="date" class="form=control" name="birth_date"
        value="{{date('Y-m-d',strtotime($student->birth_date))}}">
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-success" value="Simpan">
    </div>
  </form>
  @stop