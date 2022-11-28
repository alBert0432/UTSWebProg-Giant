@extends('layouts.main')

@section('container')

    <body>
        <h3>Book Detail</h3>
        <div class="card mb-3 align-items-center">
            <img src="../kkndesapenari.jpg" class="card-img-top" alt="KKN Di Desa Penari">
            <div class="card-body">
                <h5 class="card-title">KKN Di Desa Penari</h5>
                <p class="card-text">Author : Simpleman</p>
                <p class="card-text">Publisher : m&c!</p>
                <p class="card-text">Year : 2019</p>
                <p class="card-text">Synopsis : <br>
                    Saat motor melaju kencang menembus hutan, Widya mendengar tabuhan gamelan. Suaranya mendayu-dayu dan
                    terasa semakin dekat. Tiba-tiba Widya melihat sesosok manusia tengah menelungkup seakan memasang pose
                    menari. Ia berlenggak-lenggok mengikuti irama musik gamelan yang ditabuh cepat.
                    Siapa yang menari di malam gulita seperti ini?
                    Tiga puluh menit berlalu, dan atap rumah terlihat samar-samar dengan cahaya yang meski tamaram bisa
                    dilihat jelas oleh mata.
                    "Mbak... kita sudah sampai di desa."
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
