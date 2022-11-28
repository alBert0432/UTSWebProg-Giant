@extends('layouts.main')

@section('container')

    <body>
        <h3>Book Detail</h3>
        <div class="card mb-3 align-items-center">
            <img src="../janshen.jpg" class="card-img-top" alt="Janshen">
            <div class="card-body">
                <h5 class="card-title">Janshen (Repackage)</h5>
                <p class="card-text">Author : Risa Saraswati</p>
                <p class="card-text">Publisher : Bukune</p>
                <p class="card-text">Year : 2021</p>
                <p class="card-text">Synopsis : <br>
                    Selama ini kita memanggilnya “Janshen”, padahal itu adalah nama belakang keluarganya. Sejak lahir, anak
                    ini dianggap sebagai pembawa kebahagiaan karena siapa pun yang ada di sekitarnya selalu merasa bahagia.
                    Tak ada yang mau tahu bagaimana kisah hidupnya. Semua sahabat hantuku tak tertarik mencari tahu karena
                    masalah terberat seorang Janshen hanyalah gigi ompong yang membuat anak itu menjadi bulan-bulanan.
                    Kupikir hidupnya selalu menyenangkan, kupikir harinya selalu dipenuhi tawa. Ternyata aku salah, anak
                    sekecil dan selucu dia harus menghadapi banyak masalah hingga akhir hidup. Selamat datang di kehidupan
                    si hantu ompong favoritku. Selamat menyelami sisi gelap masa lalunya.
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
