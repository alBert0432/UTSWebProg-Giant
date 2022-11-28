@extends('layouts.main')

@section('container')

    <body>
        <h3>Book Detail</h3>
        <div class="card mb-3 align-items-center">
            <img src="../teman.jpg" class="card-img-top" alt="Teman">
            <div class="card-body">
                <h5 class="card-title">Teman</h5>
                <p class="card-text">Author : Jounatan & Guntur Alam</p>
                <p class="card-text">Publisher : Elex Media Komputindo</p>
                <p class="card-text">Year : 2020</p>
                <p class="card-text">Synopsis : <br>
                    Konon, tiga puluh tahun lalu, terjadi pembunuhan di sekolah Jounatan. Namun peristiwa itu ditutupi pihak
                    sekolah. Tak banyak yang tahu, termasuk murid-murid di sana. Lalu, tiba-tiba seorang anak kelas sepuluh
                    mengungkap cerita terlarang itu kepada Jou. Katanya, arwah korban yang terbunuh itu akan menuntut balas.
                    Jou tak menggubrisnya. Namun kesurupan massal terjadi di sekolahnya, tak hanya satu, tetapi berulang
                    kali. Teman-teman Jou pun mulai diteror sesuatu yang tak kasatmata. Jou kembali terjebak. Tanpa sadar
                    dia telah membangkitkan sesuatu yang tertidur selama tiga puluh tahun. Sesuatu yang penuh dendam juga
                    haus darah. Sialnya, Jou sudah tak dapat membedakan mana lawan atau kawan. Salah menebak, Jou akan
                    diantar menuju kematian.
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
