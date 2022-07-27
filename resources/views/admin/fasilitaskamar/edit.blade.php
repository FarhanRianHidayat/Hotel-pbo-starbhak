@extends('layout.belakang')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title m-0 font-weight-bold text-primary">Tambah Data Fasilitas Kamar</h4>
        </div>
        <div class="card-body">
            <form class="forms-sample" action="/fasilitaskamar/{{ $data->id }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="1">Nomor Kamar</label>
                    <select class="form-control" id="1" name="kamar_id">
                        @foreach ($kamar as $row)
                        @if (old('kamar_id', $data->kamar_id ) == $row->id)
                        <option value="{{ $row->id }}" selected>{{ $row->no_kamar }}</option>
                        @else
                        <option value="{{ $row->id }}">{{ $row->no_kamar }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="2">Fasilitas</label>
                    <textarea class="form-control" id="2" rows="4" name="nama">{{ $data->nama }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a href="/kamar" class="btn btn-light">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
