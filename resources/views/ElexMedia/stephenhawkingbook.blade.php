@extends('layouts.main')

@section('container')

    <body>
        <h3>Book Detail</h3>
        <div class="card mb-3 align-items-center">
            <img src="../Stephen Hawking.jpg" class="card-img-top" alt="Why? People - Stephen Hawking">
            <div class="card-body">
                <h5 class="card-title">Why? People - Stephen Hawking</h5>
                <p class="card-text">Author : Elex Media K</p>
                <p class="card-text">Publisher : Elex Media Komputindo</p>
                <p class="card-text">Year : 2014</p>
                <p class="card-text">Synopsis : <br>
                    STEPHEN HAWKING (1942-~) Anggota termuda dari Royal Society pada tahun 1974, pada tahun 1979 dilantik
                    sebagai The Lucasian Professor of Mathematics at The University of Cambridge serta fisikawan universe
                    yang sehebat Einstein, Newton, dan Galileo. Hawking lahir di Oxford, Inggris tahun 1942.
                    Saat usia 21 tahun, dia didiagnosis menderita penyakit Lou Gehrig di mana penyakit ini menghancurkan sel
                    saraf yang ada di dalam tubuhnya yang membuatnya tidak bisa hidup lebih dari 2 tahun lagi. Dia tidak
                    menyerah, bahkan hingga kini dia sudah mengemukakan banyak teori dan teori ilmu ruang angkasa.
                    Bahkan dia mengakui bahwa ada kesalahan dalam teori black hole yang dia kemukakan sendiri 30 tahun yang
                    lalu dan menerima teori baru. Sikap Hawking ini menunjukkan seorang sarjana sejati yang tidak memikirkan
                    gengsi dan wibawa.
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
