@extends('layouts.main')

@section('container')

    <body>
        <h3>Book Detail</h3>
        <div class="card mb-3 align-items-center">
            <img src="../theguardians.jpg" class="card-img-top" alt="Para Pelindung">
            <div class="card-body">
                <h5 class="card-title">Para Pelindung (The Guardians)</h5>
                <p class="card-text">Author : John Grisham</p>
                <p class="card-text">Publisher : Gramedia Pustaka Utama</p>
                <p class="card-text">Year : 2022</p>
                <p class="card-text">Synopsis : <br>
                    Di kota kecil Seabrook, Florida utara, seorang pengacara muda bernama Keith Russo ditembak mati saat
                    bekerja hingga larut malam. Tak ada saksi, motif, atau petunjuk apa pun. Polisi menetapkan pelakunya
                    adalah Quincy Miller, pria kulit hitam yang pernah menjadi klien Russo. Quincy dijebak dan dipenjara
                    seumur hidup. Selama 23 tahun dia mendekam di penjara tanpa ada bantuan pengacara. Lalu dia menulis
                    surat kepada Guardian Ministries, kelompok nirlaba kecil yang didirikan oleh pengacara/pendeta bernama
                    Cullen Post. Misi mereka adalah membela orang-orang yang dijatuhi hukuman padahal tidak bersalah.
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
