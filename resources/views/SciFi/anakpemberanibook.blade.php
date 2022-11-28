@extends('layouts.main')

@section('container')

    <body>
        <h3>Book Detail</h3>
        <div class="card mb-3 align-items-center">
            <img src="../anakpemberani.jpg" class="card-img-top" alt="Si Anak Pemberani">
            <div class="card-body">
                <h5 class="card-title">Si Anak Pemberani</h5>
                <p class="card-text">Author : Tere Liye</p>
                <p class="card-text">Publisher : Replubika Penerbit</p>
                <p class="card-text">Year : 2018</p>
                <p class="card-text">Synopsis : <br>
                    " Aku Eliana, si anak pemberani, anak sulung Bapak dan Mamak yang akan menjadi pembela kebnaran dan
                    keadilan. Berdiri paling gagah, paling depan."
                    Buku ini tentang Eliana, anak pemberani yang membela tanah, sungai, hutan, dan lemah kampungnya. Saat
                    kerakusan dunia datang, Eliana bersama teman karibnya bahu-membahu melakukan perlawanan.
                    Dari puluhan buku Tere Liye, serial buku ini adalah mahkotanya.
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
