@extends('layouts.main')

@section('container')

    <body>
        <h3>Book Detail</h3>
        <div class="card mb-3 align-items-center">
            <img src="../grit.jpg" class="card-img-top" alt="Grit">
            <div class="card-body">
                <h5 class="card-title">Grit</h5>
                <p class="card-text">Author : Angela Duckworth</p>
                <p class="card-text">Publisher : Gramedia Pustaka Utama</p>
                <p class="card-text">Year : 2018</p>
                <p class="card-text">Synopsis : <br>
                    Angela Duckworth -- seorang psikolog perintis-- menunjukkan bhawa rahasia untuk pencapaian yang luar
                    biasa buknlah bakat, tetapu perpaduan istimewa antara hasrat(passion) dan kegigihan (perseverance) yang
                    idisebut " ketabahan" (grit). Berdasarakan penelitian, wawancara dengan orang-orang yang berprestasi
                    tinggi serta pengalamannya sendiri, DuUckworth menunjukkan bahwa kecenderungan suatu pencapaian terapaku
                    pada bakat alami, padahal adahal yang lebih penting, yakni usaha yang dilakukan dan reaksi kita terhadap
                    hambatan. Pada buku ini dijelaskan juga bahwa ketabahn bisa dipelajari sekaligus menawarkan rumusan baru
                    kesuksesan individu maupun kesuksesan kolektif.
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
