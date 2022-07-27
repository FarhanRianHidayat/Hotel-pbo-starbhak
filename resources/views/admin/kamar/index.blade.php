@extends('layout.belakang')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-header">
            <h4 class="card-title m-0 font-weight-bold text-primary">Data Kamar</h4>
        </div>
        <div class="card-body">
            <p class="card-description">
                <a href="/kamar/create" class="btn btn-primary btn-sm float-right rounded-3">Tambah Data</a>
            </p>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>No Kamar</th>
                            <th>Harga</th>
                            <th>Kapasitas</th>
                            <th>Lantai</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kamar as $kamars)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $kamars->no_kamar }}</td>
                            <td>{{ $kamars->harga }}</td>
                            <td>{{ $kamars->kapasitas }}</td>
                            <td>{{ $kamars->lantai }}</td>
                            <td>
                                <a href="/kamar/{{ $kamars->id }}/edit" class="btn btn-warning btn-sm text-white">Edit</a>
                                <a href="/kamar/{{ $kamars->id }}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
