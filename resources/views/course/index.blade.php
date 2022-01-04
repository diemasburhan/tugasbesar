@extends('layouts.app')

@section('content')
  <table class="table">
      <thead>
        <tr>
          <th>NO</th>
          <th>Nama</th>
        </tr>
      </thead>
      
      <tbody>
        @foreach ($courses as $course)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$course->course_name}}</td>
            </tr>           
        @endforeach
      </tbody>
  </table>
@stop