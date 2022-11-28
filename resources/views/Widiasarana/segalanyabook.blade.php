@extends('layouts.main')

@section('container')

    <body>
        <h3>Book Detail</h3>
        <div class="card mb-3 align-items-center">
            <img src="../segalanya.jpg" class="card-img-top" alt="Segala-galanya Ambyar">
            <div class="card-body">
                <h5 class="card-title">Segala-galanya Ambyar</h5>
                <p class="card-text">Author : Mark Manson</p>
                <p class="card-text">Publisher : Gramedia Widiasarana Indonesia</p>
                <p class="card-text">Year : 2020</p>
                <p class="card-text">Synopsis : <br>
                    Dayan, Surman, Odi, dan Poci adalah 4 sahabat yang tinggal di Kampung Laopo, Pulau Buton. Empat sekawan
                    ini memiliki visi yang sama yaitu melakukan tradisi turun temurun mereka, menjaga kelestarian laut.
                    Latar belakang ekonomi mereka yang mirip membuat mereka memiliki jiwa entrepreneurship sejak dini.
                    Petualangan mereka dimulai ketika mereka menemukan banyak sekali ikan mati mengapung di permukaan laut.
                    Mereka berempat bertekad untuk mencari tahu penyebabnya. Bersamaan dengan misi ini, mereka berempat
                    menghadapi masalah keluarga yang tak kalah peliknya Ayah Surman meninggal karena tenggelam di laut,
                    meninggalkan Surman dan Ibunya dengan segudang hutang dan cacian. Kemudian Ibunya jadi gila, jatuh
                    sakit, dan meninggal. Dayan, berusaha mengembalikan kepercayaan keluarga padanya karena keluarganya
                    kecewa Dayan telah dirampok dan berbohong. Sedangkan Odi, dengan kecerdasan dan semangatnya,menemukan
                    fakta tak terduga tentang keluarga Poci, yang menyebabkan Poci jadi dendam pada Odi, namun semua
                    akhirnya menjadi bumerang untuk Odi
                    Selain mengangkat isu nyata mengenai lingkungan kelautan di negeri novel ini juga menceritakan tentang
                    kasih sayang keluarga, antara orang tua dengan anak, persahabatan, gotong royong serta berwirausaha
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
