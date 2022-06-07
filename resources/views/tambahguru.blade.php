

@extends('layout.main') 
 
@section('content') 
<div class="container"> 
    <h1 class="text-center mb-4">Tambah Data Guru</h1> 
    <div class="row justify-content-center"> 
        <div class="col-8"> 
            <div class="card"> 
                <div class="card-body" style="width:90%"> 
                  <form method="POST" action="{{ route('insertdata') }}"> 
                        @csrf 
                        <div class="mb-3"> 
                            <label for="exampleInputEmail1" class="form-label">Nama Guru</label> 
                            <input type="text" name="namaguru" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
                            @error('namaguru') 
                            <div class="text-danger"> 
                                {{ $message }} 
                            </div> 
                            @enderror 
                        </div> 
 
                    <div class="mb-3"> 
                        <label for="exampleInputEmail1" class="form-label">NIK Guru</label> 
                        <input type="number" name="nik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
                    </div> 
  
                    <div class="mb-3"> 
                        <label for="exampleInputEmail1" class="form-label">Username</label> 
                        <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
                        @error('username') 
                        <div class="text-danger"> 
                            {{ $message }} 
                        </div> 
                        @enderror 
                    </div> 
                    <div class="mb-3"> 
                        <label for="exampleInputEmail1" class="form-label">Password</label> 
                        <input type="text" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
                        @error('password') 
                        <div class="text-danger"> 
                            {{ $message }} 
                        </div> 
                        @enderror 
                    </div> 
                     
                        <button type="submit" class="btn btn-primary">Submit</button> 
                </form>   
                </div>
                 
            </div> 
        </div> 
    </div> 
 
</div> 
@endsection


