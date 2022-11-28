@extends('layouts.main')

@section('container')

    <body>
        <h3>Book Detail</h3>
        <div class="card mb-3 align-items-center">
            <img src="../Seni-Untuk-Bersikap-Bodo-Amat_1.png" class="card-img-top" alt="Sebuah_Seni_Untuk_Bersikap">
            <div class="card-body">
                <h5 class="card-title">Sebuah Seni Untuk Bersikap Bodo Amat</h5>
                <p class="card-text">Author : Mark Manson</p>
                <p class="card-text">Publisher : Gramedia Widiasarana Indonesia</p>
                <p class="card-text">Year : 2005</p>
                <p class="card-text">Synopsis : <br>
                    Selama beberapa tahun belakangan, Mark Manson—melalui blognya yang sangat populer—telah membantu
                    mengoreksi harapan-harapan delusional kita, baik mengenai diri kita sendiri maupun dunia. Ia kini
                    menuangkan buah pikirnya yang keren itu di dalam buku hebat ini.
                    “Dalam hidup ini, kita hanya punya kepedulian dalam jumlah yang terbatas. Makanya, Anda harus bijaksana
                    dalam menentukan kepedulian Anda.” Manson menciptakan momen perbincangan yang serius dan mendalam,
                    dibungkus dengan cerita-cerita yang menghibur dan “kekinian”, serta humor yang cadas. Buku ini merupakan
                    tamparan di wajah yang menyegarkan untuk kita semua, supaya kita bisa mulai menjalani kehidupan yang
                    lebih memuaskan, dan apa adanya.
                    "
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
