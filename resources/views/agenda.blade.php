@extends('layout.main')

@section('content')
<h1 class="text-center">Data Guru</h1>
<a href="/tambahguru" class="btn btn-success">tambah</a>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nama Guru</th>
        <th scope="col">Nik</th>
        <th scope="col">Mata Pelajaran</th>
        <th scope="col">Username</th>
        <th scope="col">Password</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Rappahel</td>
        <td>7402322748585</td>
        <td>Matematika</td>
        <td>Rappahel</td>
        <td>tarunabhakti</td>

        {{-- <td>
            <button type="button" class="btn btn-warning">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
        </td> --}}

        <td>
            <a href="#"><i class="bi bi-pencil-square" s></i></a> | <a href="#"><i class="bi bi-trash3-fill" style="color: red
             "></i></a>
         </td>
      </tr>
    </tbody>
  </table>
@endsection