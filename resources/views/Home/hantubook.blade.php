@extends('layouts.main')

@section('container')

    <body>
        <h3>Book Detail</h3>
        <div class="card mb-3 align-items-center">
            <img src="../hantu_di_ruma_p.jpg" class="card-img-top" alt="Hantu_Di_Rumah">
            <div class="card-body">
                <h5 class="card-title">Hantu di Rumah Kos</h5>
                <p class="card-text">Author : DINI W.TAMAM & ERBY S</p>
                <p class="card-text">Publisher : Gramedia Pustaka Utama</p>
                <p class="card-text">Year : 2018</p>
                <p class="card-text">Synopsis : <br>
                    Dari Pekanbaru ke kota Bandung, hanya satu tujuan Renata. Kuliah di sebuah Universitas untuk menuntut
                    ilmu dan menggapai cita. Kakak satu-satunya, Radit, memilih sebuah rumah kos yang letaknya terjangkau
                    dari kampusnya.

                    Bangunan kos terlihat baik-baik saja. Tidak ada kesan menakutkan. Tetapi ternyta itu salah. Renata
                    merasakan keanehan yang tidak disangka. Suasana begitu menakutkan terlebih ketika malam menurunkan
                    gelapnya. Ada sesuatu di sana. Ia terlalu sulit menghindar. Ternyata, kos itu bukan kos seperti pada
                    umumnya.
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
