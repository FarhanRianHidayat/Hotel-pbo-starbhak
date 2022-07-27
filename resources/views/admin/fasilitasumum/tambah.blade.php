@extends('layout.belakang')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title m-0 font-weight-bold text-primary">Tambah Data Fasilitas Umum</h4>
        </div>
        <div class="card-body">
            <form class="forms-sample" action="/fasilitasumum" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="1">Fasilitas</label>
                    <input type="text" class="form-control" id="1" placeholder="Name" name="nama">
                </div>
                <div class="form-group">
                    <label for="2">Keterangan</label>
                    <textarea class="form-control" id="2" rows="4" name="keterangan"></textarea>
                </div>
                <div class="form-group">
                    <label for="3" class="form-label">Foto</label>
                    <input class="form-control" type="file" id="3" name="image">
                  </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a href="/fasilitasumum" class="btn btn-light">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
