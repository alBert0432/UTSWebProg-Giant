@extends('layouts.main')

@section('container')

    <body>
        <h3>Book Detail</h3>
        <div class="card mb-3 align-items-center">
            <img src="../LewatTengahMalam.jpeg" class="card-img-top" alt="Lewat Tengah Malam - Ganjil">
            <div class="card-body">
                <h5 class="card-title">Lewat Tengah Malam - Ganjil</h5>
                <p class="card-text">Author : Sweta Kartika</p>
                <p class="card-text">Publisher : m&c!</p>
                <p class="card-text">Year : 2021</p>
                <p class="card-text">Synopsis : <br>
                    Mereka bilang, harta bukanlah segalanya.
                    Mereka juga bilang, tahta tak bisa membeli bahagia.
                    Semua itu hanyalah dusta dari mulut-mulut nestapa.
                    Harta dan tahta adalah segalanya. Nyawa pun layak ditumbalkan untuk mendapatkannya. Hingga akhirnya
                    gerbang iblis pun terbuka...
                    Misteri bocah pembisik, danau maut penuh butiran emas, singgasana berdarah, pesugihan... Lewat tengah
                    malam itu, bujuk rayu kegelapan mulai menuntun kaki-kaki anak manusia menempuh suramnya jalan pintas
                    neraka.
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
