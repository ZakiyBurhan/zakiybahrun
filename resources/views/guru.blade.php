@extends('layout.main')

@section('content')


<h1>Data Agenda</h1>
<a href="/tambahguru" class="btn btn-success">tambah</a>
<table class="table table-striped mt-4" style="margin-top: 20px">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nama Guru</th>
        <th scope="col">Nik</th>
        <th scope="col">Mata Pelajaran</th>
        <th scope="col">Username</th>
        <th scope="col">Password</th>
      </tr>
    </thead>
    @php
      $no = 1;
    @endphp
    <tbody>
      @foreach($data as $row)
      <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{ $row->namaguru}}</td>
        <td>{{ $row->nik}}</td>
        <td>{{ $row->matapelajaran}}</td>
        <td>{{ $row->username}}</td>
        <td>{{ $row->password}}</td>
        <td d-flex>
          <a href="#"><i class="bi bi-pencil-square" s></i></a> | <a href="#"><i class="bi bi-trash3-fill" style="color: red
            "></i></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection