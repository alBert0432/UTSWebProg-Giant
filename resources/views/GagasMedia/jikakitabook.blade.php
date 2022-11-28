@extends('layouts.main')

@section('container')

    <body>
        <h3>Book Detail</h3>
        <div class="card mb-3 align-items-center">
            <img src="../jikakita.jpg" class="card-img-top" alt="Jika Kita Tak Pernah Jadi Apa-Apa">
            <div class="card-body">
                <h5 class="card-title">Jika Kita Tak Pernah Jadi Apa-Apa</h5>
                <p class="card-text">Author : Alvi Syahrin</p>
                <p class="card-text">Publisher : Gagasmedia</p>
                <p class="card-text">Year : 2019</p>
                <p class="card-text">Synopsis : <br>
                    Kau melihat teman-teman dan mereka sudah mendapatkan impian,
                    sementara kau masih termangu menggenggam harapan. Pelan, dalam hati kau berujar, “Kapan mimpiku
                    terwujud?”
                    Jika Kita Tak Pernah Jadi Apa-Apa
                    Selama perjalanan mencapai tujuan, adakalanya kau melihat sekeliling… menakar jauh jangkauan. Atau, kau
                    malah membandingkannya dengan orang lain. Lalu, lupa melanjutkan perjalanan.
                    Jika Kita Tak Pernah Jadi Apa-Apa
                    Benarkah segala usaha dan upayamu selama ini lebur bersama kecewa yang kau bangun sendiri? Sungguhkah
                    sesuatu yang hanya kau lihat dalam dunia maya menjadikanmu merasa bukan apa-apa?
                    Jika Kita Tak Pernah Jadi Apa-Apa akan menemanimu selama perjalanan.
                    Buku ini untukmu yang khawatir tentang masa depan. Tenang saja, kau tidak sedang diburu waktu. Bacalah
                    tiap lembarnya dengan penuh kesadaran bahwa hidup adalah tentang sebaik-baiknya berusaha, jatuh lalu
                    bangun lagi, dan tidak berhenti percaya bahwa segala perjuanganmu tidak akan sia-sia. Bukankah sebaiknya
                    apa-apa yang fana tidak selayaknya membuatmu kecewa?
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
