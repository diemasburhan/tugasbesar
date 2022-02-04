@extends('layouts.nav')

<?php $no=1?>
@section('content')
  <h3>Data Makanan</h3>
  <a href="{{route('makanan.create')}}" class="btn btn-success">Tambah Data</a>
  <br>
  @if (session('success'))
  <div class="alert alert-success">
      {{session('success')}}
  </div> 
  @endif
  <br>
  
  <table class="table table-striped">
      <thead>
        <tr>
          <th>NO</th>
          <th>Gambar</th>
          <th>Kode Menu</th>
          <th>Nama Menu</th>
          <th>Harga Menu</th>
          <th>Aksi</th>
        </tr>
      </thead>
      
      <tbody>
        @foreach ($makanans as $item)
            <tr>
              <td>{{$no++}}</td>
              <td><img src="{{ asset('gambar_menu/' . $item->gambar) }}" style="width: 100px" class="img-thumbnail" alt=""></td>
              <td><strong>{{ $item->kode_menu }}</strong></td>
              <td>{{ $item->nama_menu }}</td>
              <td>Rp. {{ number_format($item->harga) }}</td>

              <td>
                <a href="{{route('makanan.edit',$item->id)}}" class="btn btn-primary btn-sm btn-block mb-1">Edit</a>
                <form action="{{route('makanan.destroy',$item->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm btn-block mb-1" type="submit">Delete</button>
                </form>
              </td>
              
            </tr>           
        @endforeach
      </tbody>
  </table>
@stop