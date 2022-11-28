@extends('layouts.main')

@section('container')

    <body>
        <h4>Name : <?php echo $row[0]->pub_name; ?><br>
            Address : <?php echo $row[0]->address; ?><br>
            Phone : <?php echo $row[0]->phone; ?><br>
            Email : <?php echo $row[0]->email; ?>
            <br>
        </h4>
        <div>
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <?php
                    foreach($row as $key=>$val){
                ?>
                <div class="col">
                    <div class="card">
                        <img src="../<?php echo $val->book_image; ?>" class="card-img-top" alt="<?php echo $val->title; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $val->title; ?></h5>
                            <p class="card-text">by <br><?php echo $val->author; ?><br><br>
                                <a href="/bookdetail/{{ $val->book_id }}">Detail</a>
                            </p>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
    </body>
@endsection


<style>
    h4 {
        background-color: cornflowerblue;
        padding: 4px;
        color: white;
    }

    .card img {
        width: 305px;
        height: 500px;
    }

    .card-body {
        height: 190px;
    }

    .card-text a {
        margin-top: 45px;
        background-color: rgb(81, 148, 255);
        padding: 10px;
        border-radius: 10px;
        text-decoration: none;
        color: white;
    }

    .row {
        margin-bottom: 15px;
    }
</style>
