@extends('layouts.app')

<?php $no=1?>
@section('content')
  <h3>Data Mahasiswa</h3>
  <a href="{{route('student.create')}}" class="btn btn-success">Tambah Data</a>
  <table class="table table-striped">
      <thead>
        <tr>
          <th>NO</th>
          <th>Nrp</th>
          <th>Nama</th>
          <th>Jenis Kelamin</th>
          <th>Tanggal Lahir</th>
          <th>Tempat Lahir</th>
          <th>Prodi</th>
          <th></th>
        </tr>
      </thead>
      
      <tbody>
        @foreach ($students as $student)
            <tr>
              <td>{{$no++}}</td>
              <td>{{$student->code}}</td>
              <td>{{$student->name}}</td>
              <td>{{$student->gender == "P" ? "Pria" : "Wanita"}}</td>
              <td>{{$student->birth_date}}</td>
              <td>{{$student->birth_place}}</td>
              <td>{{$student->faculty->name}}</td>
              <td>
                <a href="{{route('student.edit',$student->id)}}" class="btn btn-primary">Edit</a>
              </td>
              <td>
                <form action="{{route('student.destroy',$student->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
              </td>
            </tr>           
        @endforeach
      </tbody>
  </table>
@stop