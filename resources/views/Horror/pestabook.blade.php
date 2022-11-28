@extends('layouts.main')

@section('container')

    <body>
        <h3>Book Detail</h3>
        <div class="card mb-3 align-items-center">
            <img src="../pestabunuhdiri.jpg" class="card-img-top" alt="Pesta Bunuh Diri">
            <div class="card-body">
                <h5 class="card-title">Pesta Bunuh Diri</h5>
                <p class="card-text">Author : Daniel Ahmad</p>
                <p class="card-text">Publisher : Gagasmedia</p>
                <p class="card-text">Year : 2022</p>
                <p class="card-text">Synopsis : <br>
                    Terlalu banyak masalah dan misteri pada desa ini. Para penduduknya harus mengalami berbagai musibah,
                    wabah, terbatasnya bahan pangan dan pengetahuan, bahkan gangguan binatang. Namun, itu bukanlah masalah
                    besar bagi mereka, ada sesuatu yang jahat dan lebih sering mengganggu mereka. Kumpulan Sisik Hitam
                    selalu datang tiap malam, mengundang penduduk ke sebuah pesta, namun pesta singkat karena selalu
                    berakhir sebelum sempat dimulai.
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
