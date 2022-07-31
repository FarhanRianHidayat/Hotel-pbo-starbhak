@extends('layout.belakang')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title m-0 font-weight-bold text-primary">Tambah Data Fasilitas Kamar</h4>
        </div>
        <div class="card-body">
            <form class="forms-sample" action="/user/{{ $data->id }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $data->name }}">
                    @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-control @error('role') is-invalid @enderror"
                        aria-label="Default select example" id="role" name="role">
                        <option value="1">Admin</option>
                        <option value="2">Resepsionis</option>
                    </select>
                    @error('role')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ $data->username }}">
                    @error('username')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="email" class="form-label">Nama</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $data->email }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ $data->password }}">
                    @error('password')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a href="/user" class="btn btn-light">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
