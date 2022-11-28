@extends('layouts.main')

@section('container')

    <body>
        <h3>Book Detail</h3>
        <div class="card mb-3 align-items-center">
            <img src="../<?php echo $row->book_image; ?>" class="card-img-top" alt="<?php echo $row->title; ?>">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row->title; ?></h5>
                <p class="card-text">Author : <?php echo $row->author; ?></p>
                <p class="card-text">Year : <?php echo $row->year; ?></p>
                <p class="card-text">Synopsis : <br>
                    B<?php echo $row->synopsis; ?>
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
