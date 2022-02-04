@extends('layouts.nav')

<?php $no=1?>
@section('content')
  <h3>Data Modal</h3>
  <a href="{{route('modal.create')}}" class="btn btn-success">Tambah Data</a>
  <br>
  @if (session('success'))
  <div class="alert alert-success">
      {{session('success')}}
  </div> 
  @endif
  
  <table class="table table-striped">
      <thead>
        <tr>
          <th>NO</th>
          <th>Bahan-Bahan</th>
          <th>Harga Bahan</th>
          <th>Aksi</th>
        </tr>
      </thead>
      
      <tbody>
        @foreach ($modals as $modal)
            <tr>
              <td>{{$no++}}</td>
              <td>{{$modal->bahan}}</td>
              <td>Rp. {{ number_format($modal->harga_bahan) }}</td>
              {{-- <td>{{count($faculty->students)}}</td> --}}
              <td>
                <a href="{{route('modal.edit',$modal->id)}}" class="btn btn-primary btn-sm btn-block mb-1">Edit</a>
                <form action="{{route('modal.destroy',$modal->id)}}" method="post">
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