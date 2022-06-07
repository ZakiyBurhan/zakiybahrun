@extends('layout.main')

@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

<h1 class="text-center">Data Kelas</h1>
<a href="/tambahguru" class="btn btn-success">tambah</a>
<table class="table table-striped mt-1">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nama Kelas</th>
        <th scope="col">Wali Kelas</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>XI TATA BOGA 3</td>
        <td>Canda Nur Zikry</td>
        <td>
           <a href="#"><i class="bi bi-pencil-square" s></i></a> | <a href="#"><i class="bi bi-trash3-fill" style="color: red
            "></i></a>
        </td>
      </tr>
    </tbody>
  </table>
@endsection