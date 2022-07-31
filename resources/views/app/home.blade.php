@extends('layout.depan')

@section('content')

        <div class="container-fluid">
        <div class="container">
            <!-- awal -->
            {{-- <div class="row">
                <div class="col-6">
                    <h1>SKY HOTEL</h1>
                </div>
            </div> --}}

            <div class="row py-2">
                <div class="col-12">
                    <img src="img/hotel.jpg" class="sampul" alt="">
                </div>
            </div>

            <div class="row py-3 justify-content-center text-center mb-5">
                <div class="col-3">
                    <label for="1" class="mb-2">Tanggal Cek In</label>
                    <input type="date" class="form-control" placeholder="" name="" id="1">
                </div>
                <div class="col-3">
                    <label for="2" class="mb-2">Tanggal Cek In</label>
                    <input type="date" class="form-control" placeholder="" name="" id="2">
                </div>
                <div class="col-2 offset-1">
                    <label for="3" class="mb-2">Jumlah Kamar</label>
                    <input type="text" class="form-control" placeholder="" name="" id="3">
                </div>
                <div class="col-1 offset-1">
                    <br class="mb-2">
                    <button type="button" class="btn btn-primary">Pesan</button>
                </div>
            </div>

            <div class="row py-4">
                <div class="col-12">
                    <h2 class="text-center
                    ">Tentang Kami</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="text-center">Lepaskanlah diri anda ke Sky Hotel, dikelilingi keindahan pegunungan yang indah, danau, dan sawah menghijau. Nikmati sore yang hangat dengan berenang di kolam renang dengan pemandangan matahari terbenam yang memukau; Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam asperiores eveniet minus magnam tempore perspiciatis nihil delectus, neque dolorem, commodi ipsa odit corrupti velit, cupiditate atque sit tenetur laboriosam ut?</p>
                </div>
            </div>
        </div>
    </div>

<link rel="stylesheet" href="css/style.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endsection