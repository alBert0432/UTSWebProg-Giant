@extends('layouts.main')

@section('container')

    <body>
        <h3>Contact</h3>

        <h3 class="isi-contact">
            Store Address :
        </h3>

        <p>
            Jalan Pembangunan Baru Raya,<br>
            Kompleks Pertokoan Emerald Blok III/12<br>
            Bintaro, Tangerang Selatan <br>
            Indonesia
        </p>

        <h3 class="isi-contact">
            Open Daily :
        </h3>

        <p>
            08.00 - 20.00
        </p>

        <h3 class="isi-contact">
            Contact :
        </h3>

        <p>
            Phone : 021-08899776655<br>
            <br>
            Email : happybookstore@happy.com
        </p>
    </body>
@endsection

<style>
    h3 {
        background-color: cornflowerblue;
        padding: 5px;
        color: white;
    }

    .isi-contact {
        background-color: white;
        color: black;
    }

    p {
        font-size: 20px;
    }
</style>
