@extends('layouts.main')

@section('container')

    <body>
        <h3>Book Detail</h3>
        <div class="card mb-3 align-items-center">
            <img src="../lumpu.jpg" class="card-img-top" alt="Lumpu">
            <div class="card-body">
                <h5 class="card-title">Lumpu</h5>
                <p class="card-text">Author : Tere Liye</p>
                <p class="card-text">Publisher : Gramedia Pustaka Utama</p>
                <p class="card-text">Year : 2021</p>
                <p class="card-text">Synopsis : <br>
                    Yes! Akhirnya, Raib, Seli, dan Ali kembali bertualang. Kalian sudah kangen dengan trio ini? Misi mereka
                    adalah menyelamatkan Miss Selena, guru matematika mereka. Tapi, apakah semua berjalan mudah? Siapa yang
                    bersedia membantu mereka?
                    Kali ini, si genius Ali memutuskan meminta bantuan dari sosok yang tidak terduga, karena musuh dari
                    musuh adalah teman. Apakah Raib bisa melupakan masa lalu itu dengan memaafkan Miss Selena? Bagaimana
                    dengan Tazk?
                    Apakah Raib bisa bertemu lagi dengan ayahnya, atau itu masih menjadi misteri? Bagaimana dengan jejak
                    ekspedisi Klan Aldebaran 40.000 tahun lalu? Benda apa saja yang ditinggalkan oleh perjalanan besar
                    tersebut? Pertarungan panjang telah menunggu mereka. Dan lawan mereka adalah Lumpu, petarung yang
                    memiliki teknik unik, yaitu melumpuhkan kekuatan lawan.
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
