@extends('layouts.main')

@section('container')

    <body>
        <h3>Book Detail</h3>
        <div class="card mb-3 align-items-center">
            <img src="../negeriujung.jpg" class="card-img-top" alt="Lumpu">
            <div class="card-body">
                <h5 class="card-title">Negeri di Ujung Tanduk</h5>
                <p class="card-text">Author : Tere Liye</p>
                <p class="card-text">Publisher : Gramedia Pustaka Utama</p>
                <p class="card-text">Year : 2018</p>
                <p class="card-text">Synopsis : <br>
                    Kisah Negeri Di Ujung Tanduk ini merupakan lanjutan dari perjalanan Thomas dan teman-temannya dalam
                    memperjuangkan kebenaran. Dengan setting waktu setahun setelah peristiwa Om Liem, Thomas kembali
                    menjalankan kehidupannya di negeri yang berada pada tanduk demokrasi.
                    Cerita bermula pada suatu klub petarung yang kali ini diadakan di Makau. Para anggota klub melakukan
                    duel seru yang dihadiri seluruh anggota dari belahan negara manapun termasuk Thomas. Dalam duelnya
                    Thomas mampu menang atas Lee, yang juga seorang pengusaha besar sekaligus relasi baiknya.
                    Kini Thomas yang telah menjadi seorang konsultan politik, sudah memiliki cukup banyak pengalaman
                    memegang klien yang ingin menjabat, misalnya dari walikota menjadi gubernur. Saat ini dirinya membantu
                    JD sebagai klien untuk bisa menjadi kandidat partai untuk calon presiden mendatang.
                    Namun rupanya sebuah kasus dituduhkan pada kliennya, dengan tujuan mencoreng nama baik JD sebagai
                    kandidat. Usut punya usut, rupanya itu adalah perbuatan kubu lawan JD yang tidak segan-segan melemparkan
                    kasus korupsi besar-besaran pada JD, saat dirinya menjabat sebagai gubernur tahun lalu.
                    Di Negeri di Ujung Tanduk kehidupan semakin rusak. Bukan karena orang jahat semakin banyak, tapi semakin
                    banyak orang yang memilih tidak peduli lagi. Di Negeri di Ujung Tanduk para penipu menjadi pemimpin,
                    para pengkhianat menjadi pujaan.
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
