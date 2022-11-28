@extends('layouts.main')

@section('container')

    <body>
        <h3>Book Detail</h3>
        <div class="card mb-3 align-items-center">
            <img src="../asing.jpg" class="card-img-top" alt="Asing">
            <div class="card-body">
                <h5 class="card-title">Asing</h5>
                <p class="card-text">Author : Fadli Inzaghi</p>
                <p class="card-text">Publisher : Gagasmedia</p>
                <p class="card-text">Year : 2021</p>
                <p class="card-text">Synopsis : <br>
                    Menjadi seseorang yang terlupakan mungkin pemah dialami semua orang. Pernahkah kamu merasakannya juga?
                    Bagaimana caramu menghadapinya?
                    Apa yang bisa membuatmu bertahan dengan banyak luka?
                    Ini memang tak mudah. Melupakan seseorang yang hanya menganggap kita sebatas pernah. Namun, mau sampai
                    kapan menunggu? Sedangkan punggungnya sudah semakkin jatuh. Tak ada lagi andai, yang tersisa hanyalah
                    harapan yang semakin landai. Saatnya mengakui bahwa ia sudah tak mau lagi diperjuangkan.
                    Meski sudah merelakan, di benakku masih tersisa banyak pertanyaan. Semudah itukah menghilangkan aku dari
                    rasamu? Padahal purnama berikutnya baru saja hadir sejak kumelepasmu, melangkah seperti tidak pernah ada
                    apa-apa.
                    Menjadi dua orang asing yang tak saling kenal padahal pernah berbagi tawa.
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
