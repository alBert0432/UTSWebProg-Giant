@extends('layouts.main')

@section('container')

    <body>
        <h3>Book Detail</h3>
        <div class="card mb-3 align-items-center">
            <img src="../TheDevilAllTheTime.jpg" class="card-img-top" alt="The Devil All The Time">
            <div class="card-body">
                <h5 class="card-title">The Devil All The Time</h5>
                <p class="card-text">Author : Donald Ray Pollock</p>
                <p class="card-text">Publisher : Elex Media Komputindo</p>
                <p class="card-text">Year : 2022</p>
                <p class="card-text">Synopsis : <br>
                    Willard Russel, mantan tentara saksi kekejaman perang, sudah menumpahkan banyak darah tapi tak sanggup
                    menyelamatkan istrinya dari kematian.

                    Carl dan Sandy Henderson, pasangan pembunuh berantai yang setiap musim panas mengincar para korbannya di
                    jalanan. Roy dan Theodore, pengkhotbah keliling yang melarikan diri dan dijadikan buronan.

                    Di dunia mereka yang menggila, sesosok pemuda terjebak di tengahnya, dipaksa untuk mengerti bahwa
                    kebaikan dan kejahatan sesungguhnya memiliki batas yang fana.
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
