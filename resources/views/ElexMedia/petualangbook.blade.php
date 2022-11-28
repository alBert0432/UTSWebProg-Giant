@extends('layouts.main')

@section('container')

    <body>
        <h3>Book Detail</h3>
        <div class="card mb-3 align-items-center">
            <img src="../petualang.jpg" class="card-img-top" alt="Petualang Super Kids">
            <div class="card-body">
                <h5 class="card-title">Petualang Super Kids</h5>
                <p class="card-text">Author : Tim Elex Media Komputindo</p>
                <p class="card-text">Publisher : Elex Media Komputindo</p>
                <p class="card-text">Year : 2016</p>
                <p class="card-text">Synopsis : <br>
                    Tidak semua anak suka makan sayur dan buah. Selalu ada alasan yang mereka lontarkan ketika orangtua
                    meminta mereka makan sayur dan buah. Demikian juga dengan Farel. Ia seringkali tidak mau makan buah dan
                    sayur.
                    Pada suatu hari, Farel diganggu oleh tiga temannya yang sangat nakal. Sanggupkah Farel menghadapi ke
                    tiga temannya yang nakal itu?
                    K-Link mengajak anak-anak untuk mengikuti bagaimana cara Farel menghadapi ke tiga anak yang nakal itu?
                    Simak kisahnya dan jadilah anak yang berani seperti Farel!
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
