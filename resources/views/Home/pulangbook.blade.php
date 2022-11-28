@extends('layouts.main')

@section('container')

    <body>
        <h3>Book Detail</h3>
        <div class="card mb-3 align-items-center">
            <img src="../pulang-pergi_tere_liye.jpeg" class="card-img-top" alt="Pulang_Pergi">
            <div class="card-body">
                <h5 class="card-title">Pulang Pergi</h5>
                <p class="card-text">Author : Tere Liye</p>
                <p class="card-text">Publisher : Sabak Grip Nusantara</p>
                <p class="card-text">Year : 2021</p>
                <p class="card-text">Synopsis : <br>
                    Ada jodoh yang ditemukan lewat tatapan pertama.
                    Ada persahabatan yang diawali lewat sapa hangat.
                    Bagaimana jika takdir bersama ternyata,
                    diawali dengan pertarungan mematikan?
                    Lantas semua cerita berkelindan dengan,
                    pengejaran demi pengejaran mencari jawaban?
                    Pulang-Pergi
                </p>
            </div>
        </div>
    </body>
@endsection

<style>
    h3 {
        background-color: cornflowerblue;
        padding: 4px;
        color: white;
    }

    .card img {
        width: 700px;
        height: 900px;
        justify-content: center;
    }
</style>
