@extends('layouts.main')

@section('container')

    <body>
        <h3>Book Detail</h3>
        <div class="card mb-3 align-items-center">
            <img src="../baiksaja.jpg" class="card-img-top" alt="Jika Kita Tak Pernah Baik-Baik Saja">
            <div class="card-body">
                <h5 class="card-title">Jika Kita Tak Pernah Baik-Baik Saja</h5>
                <p class="card-text">Author : Alvi Syahrin</p>
                <p class="card-text">Publisher : Gagasmedia</p>
                <p class="card-text">Year : 2020</p>
                <p class="card-text">Synopsis : <br>
                    Jika Kita Tak Pernah Baik-Baik Saja
                    Bagaimana caranya aku bisa mencintai diriku ketika yang kulakukan kepada diriku adalah
                    kesalahan-kesalahan bodoh tanpa hentinya?
                    Jika Kita Tak Pernah Baik-Baik Saja
                    Susah mencintai
                    seseorang yang terus
                    melakukan kesalahan, lantas bagaimana kalau diri ini yang terus melakukan kesalahan? How can I even
                    start loving myself?
                    Jika Kita Tak Pernah Baik-Baik Saja
                    Lalu, bagaimana caranya aku bisa menerima segala kekuranganku?
                    Bagaimana aku bisa menjadi diriku sendiri kalau aku sendiri tidak suka diriku sendiri?
                    Kita pernah mengalami krisis, tak pernah baik-baik saja menerima keadaan dan menyalahkan diri sendiri.
                    Mengarungi hidup adalah tentang seni mencintai—termasuk mencintai diri sendiri dengan segala kekurangan,
                    dan berusaha memperbaikinya. Jika Kita Tak Pernah Baik-Baik Saja, mengajak kita mengenal arti kecewa dan
                    bahagia demi mencintai diri sendiri dan sesuatu yang lebih dari segalanya.
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
