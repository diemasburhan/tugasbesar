@extends('layouts.nav')

<?php $no=1?>
@section('content')
  <h3>Data Makanan</h3>
  <a href="{{route('makanan.create')}}" class="btn btn-success">Tambah Data</a>
  <table class="table table-striped">
      <thead>
        <tr>
          <th>NO</th>
          <th>Nama Makanan</th>
          <th>Harga Makanan</th>
        </tr>
      </thead>
      
      <tbody>
        @foreach ($makanans as $makanan)
            <tr>
              <td>{{$no++}}</td>
              <td>{{$makanan->nama_makanan}}</td>
              <td>{{$student->harga_makanan}}</td>
              <td>
                <a href="{{route('makanan.edit',$makanan->id)}}" class="btn btn-primary">Edit</a>
              </td>
              <td>
                <form action="{{route('makanan.destroy',$makanan->id)}}" method="post">
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