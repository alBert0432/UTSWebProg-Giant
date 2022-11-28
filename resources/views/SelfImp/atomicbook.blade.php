@extends('layouts.main')

@section('container')

    <body>
        <h3>Book Detail</h3>
        <div class="card mb-3 align-items-center">
            <img src="../atomic.jpg" class="card-img-top" alt="Atomic Habits">
            <div class="card-body">
                <h5 class="card-title">Atomic Habits</h5>
                <p class="card-text">Author : James Clear</p>
                <p class="card-text">Publisher : Random Us</p>
                <p class="card-text">Year : 2020</p>
                <p class="card-text">Synopsis : <br>
                    Buku Atomic Habits adalah buku tentang bagaimana mengubah kebiasaan-kebiasaan kita menjadi lebih baik
                    dan tentunya menjadi perubahan yang permanen. James Clear mengajarkan kita untuk mencapai tujuan jangka
                    panjang kita melalui kebiasaan-kebiasaan kecil yang kita lakukan setiap harinya.
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
