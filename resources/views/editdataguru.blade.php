@extends('layout.main')

@section('content')
<div class="container">
        <h1 class= text-center mb-4>Tambah Guru</h1>
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body" style= width:90%>
                        <form method ="POST" action="/updatedata/{{$data->id}}"> 
                           @csrf 
                           @method('put')
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Guru</label>
                            <input type="text" name="namaguru" value="{{$data->namaguru}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('namaguru')
                            <div class= text-danger>
                                {{ $message }}
                            </div>
                            @enderror
                          </div>

                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nik</label>
                            <input type="number" name="nik" value="{{$data->nik}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('nik')
                            <div class= text-danger>
                                {{ $message }}
                            </div>
                            @enderror
                          </div>
                         

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Mata Pelajaran</label>
                                <input type="text" name="matapelajaran" value="{{$data->matapelajaran}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                @error('matapelajaran')
                                    <div class= text-danger>
                                        {{ $message }}
                                    </div>
                                @enderror
                          </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                <input type="text" name="username" value="{{$data->username}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                @error('username')
                                    <div class= text-danger>
                                        {{ $message }}
                                    </div>
                                @enderror
                          </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Password</label>
                                <input type="text" name="password" value="{{$data->password}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                @error('password')
                                    <div class= text-danger>
                                        {{ $message }}
                                    </div>
                                @enderror
                          </div>
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection