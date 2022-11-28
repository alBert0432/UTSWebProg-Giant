@extends('layouts.main')

@section('container')

    <body>
        <h3>Book Detail</h3>
        <div class="card mb-3 align-items-center">
            <img src="../psychology.jpg" class="card-img-top" alt="Psychology of Money">
            <div class="card-body">
                <h5 class="card-title">Psychology of Money</h5>
                <p class="card-text">Author : Morgan Housel</p>
                <p class="card-text">Publisher : Penerbit Baca</p>
                <p class="card-text">Year : 2021</p>
                <p class="card-text">Synopsis : <br>
                    Kesuksesan dalam mengelola uang tidak selalu tentang apa yang Anda ketahui. Ini tentang bagaimana Anda
                    berperilaku. Dan perilaku sulit untuk diajarkan, bahkan kepada orang yang sangat pintar sekalipun.
                    Seorang genius yang kehilangan kendali atas emosinya bisa mengalami bencana keuangan. Sebaliknya, orang
                    biasa tanpa pendidikan finansial bisa kaya jika mereka punya sejumlah keahlian terkait perilaku yang tak
                    berhubungan dengan ukuran kecerdasan formal.
                    Uang―investasi, keuangan pribadi, dan keputusan bisnis―biasanya diajarkan sebagai bidang berbasis
                    matematika, dengan data dan rumus memberi tahu kita apa yang harus dilakukan. Namun di dunia nyata,
                    orang tidak membuat keputusan finansial di spreadsheet. Mereka membuatnya di meja makan, atau di ruang
                    rapat, di mana sejarah pribadi, pandangan unik Anda tentang dunia, ego, kebanggaan, pemasaran, dan
                    berbagai insentif bercampur.
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
