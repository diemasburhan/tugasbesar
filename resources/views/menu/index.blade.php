@extends('layouts.nav')

<?php $no=1?>
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Product example · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/product/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{asset("css/product.css")}}" rel="stylesheet">
  </head>
  <body>

<main>
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal"><strong>Daftar Menu<strong></h1>
      </div>
  </div>

  @foreach ($menu as $index => $item)
  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    @if (fmod($index,2) == 0)
    <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">{{ $item->nama_menu }}</h2>
        <p class="lead">Rp. {{ number_format($item->harga) }}</p>
      </div>
      <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;background-image: url('{{ asset('gambar_menu/'. $item->gambar) }}')"></div>
    </div>
    @else
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5">{{ $item->nama_menu }}</h2>
        <p class="lead">Rp. {{ number_format($item->harga) }}</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;background-image: url('{{ asset('gambar_menu/'. $item->gambar) }}')"></div>
    </div> 
    @endif
  </div>
  @endforeach



</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>

@stop