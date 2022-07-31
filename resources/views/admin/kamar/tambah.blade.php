@extends('layout.belakang')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title m-0 font-weight-bold text-primary">Tambah Data Kamar</h4>
        </div>
        <div class="card-body">
            <form class="forms-sample" action="/kamar" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="1">Nomor Kamar</label>
                    <input type="number" class="form-control" id="1" placeholder="Name" name="no_kamar">
                </div>
                <div class="form-group">
                    <label for="2">Harga</label>
                    <input type="text" class="form-control" id="2" placeholder="Harga" name="harga">
                </div>
                <div class="form-group">
                    <label for="3">Kapasitas</label>
                    <input type="text" class="form-control" id="3" placeholder="Kapasitas" name="kapasitas">
                </div>
                <div class="form-group">
                    <label for="4">Tipe Kamar</label>
                    <select class="form-control" id="4" name="tipe">
                        <option value="1">Superior</option>
                        <option value="2">Deluxe</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="5" class="form-label">Foto</label>
                    <input class="form-control" type="file" id="5" name="image">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a href="/kamar" class="btn btn-light">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
