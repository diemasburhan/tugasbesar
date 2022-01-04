@extends('layouts.app')

@section('content')
<h3>Tambah mahasiswa</h3>

<form method="post" action="{{route('student.store')}}">
    @csrf
    <div class="form-group">
      <label for="code">NRP</label>
      <input type="text" class="form=control" name="code">
    </div>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form=control" name="name">
    </div>
    <div class="form-group">
        <label for="gender">Jenis Kelamin</label>
        <input type="radio" class="form=control-inline" name="gender" value="P"> Pria
        <input type="radio" class="form=control-inline" name="gender" value="W"> Wanita
    </div>
    <div class="form-group">
        <label for="name">Tempat Lahir</label>
        <input type="text" class="form=control" name="birth_place">
    </div>
    <div class="form-group">
        <label for="name">Tanggal Lahir</label>
        <input type="date" class="form=control" name="birth_date">
    </div>
    <div class="form-group">
        <label for="faculty">Fakultas</label>
        <select name="faculty_id" class="form-control">
            @foreach ($faculties as $faculty)
                <option value="{{$faculty->id}}">{{$faculty->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success" value="Simpan">
    </div>
  </form>
  @stop