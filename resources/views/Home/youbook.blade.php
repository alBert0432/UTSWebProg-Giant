@extends('layouts.main')

@section('container')

    <body>
        <h3>Book Detail</h3>
        <div class="card mb-3 align-items-center">
            <img src="../youdoyou.jpg" class="card-img-top" alt="You_Do_You">
            <div class="card-body">
                <h5 class="card-title">You Do You</h5>
                <p class="card-text">Author : Fellexandro Ruby</p>
                <p class="card-text">Publisher : Gramedia Pustaka Utama</p>
                <p class="card-text">Year : 2020</p>
                <p class="card-text">Synopsis : <br>
                    I feel you. Gue juga pernah mengalami keresahan yang sama. Faktanya, satu dekade pertama dalam
                    perjalanan karier gue dihabiskan untuk bereksperimen dengan sembilan macam role yang berbeda, sampai
                    akhirnya gue menemukan ikigai.

                    Sales, petugas lelang, operator alat berat, travel blogger, food photographer, penyanyi, social media
                    manager, product manager di sebuah tech startup, sampai pengusaha pernah gue jalani. Menariknya, semua
                    kegalauan dan pencarian itu mulai terjawab dengan sendirinya ketika gue bisa menjawab pertanyaan: “Who
                    are you?” Ketika gue mengenal diri sendiri, maka pada titik itulah gue menemukan jawaban bahwa “your
                    life (career, business, relationship, and finance) should be an extension of who you are”.
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
