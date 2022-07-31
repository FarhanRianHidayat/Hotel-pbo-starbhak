@extends('layout.belakang')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title m-0 font-weight-bold text-primary">Tambah Data Pemesanan</h4>
        </div>
        <div class="card-body">
            <form class="forms-sample" action="/resepsionis" method="POST">
                @csrf
                <div class="form-group">
                    <label for="1">Nama Tamu</label>
                    <input type="text" class="form-control" id="1" placeholder="Name" name="nama_tamu">
                </div>
                <div class="form-group">
                    <label for="2">Nomor Kamar</label>
                    <select class="form-control" id="2" name="kamar_id">
                        @foreach ($kamar as $row)
                            <option value="{{ $row->id }}">{{ $row->no_kamar }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="3">Tanggal Check In</label>
                    <input type="date" class="form-control" id="3" placeholder="Tanggal Check In" name="check_in">
                </div>
                <div class="form-group">
                    <label for="4">Tanggal Check Out</label>
                    <input type="date" class="form-control" id="4" placeholder="Tanggal Check Out" name="check_out">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a href="/resepsionis" class="btn btn-light">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
