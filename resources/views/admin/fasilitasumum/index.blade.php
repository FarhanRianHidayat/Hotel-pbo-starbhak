@extends('layout.belakang')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card shadow">
        <div class="card-header">
            <h4 class="card-title m-0 font-weight-bold text-primary">Data Fasilitas Umum</h4>
        </div>
        <div class="card-body">
            <p class="card-description">
                <a href="/fasilitasumum/create" class="btn btn-primary btn-sm float-right rounded-3">Tambah Data</a>
            </p>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Fasilitas</th>
                            <th>Keterangan</th>
                            <th>Foto</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->keterangan }}</td>
                            <td><img src="{{ asset('fasilitas/'. $row->image) }}" alt="" class="img-fluid rounded-0"></td>
                            <td>
                                <a href="/fasilitasumum/{{ $row->id }}/edit" class="btn btn-warning btn-sm text-white">Edit</a>
                                <a href="/fasilitasumum/{{ $row->id }}" class="btn btn-danger btn-sm">Delete</a>
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
