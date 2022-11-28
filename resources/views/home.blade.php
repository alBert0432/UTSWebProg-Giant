<?php
$connect = mysqli_connect('localhost', 'root', '', 'giantbook');
if (mysqli_connect_errno()) {
    throw new exception('MySQL failed to connect') . mysqli_connect_error();
}
$all_book = $connect->query('SELECT * FROM books');
?>

@extends('layouts.main')

@section('container')

    <body>
        <h3>Book List</h3>
        <div class="row row-cols-1 row-cols-md-4 g-4">

            <?php
                while($row = mysqli_fetch_assoc($all_book)){

            ?>
            <div class="col">
                <div class="card">
                    <img src="../<?php echo $row['book_image']; ?>" class="card-img-top" alt="<?php echo $row['title']; ?> ">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['title']; ?></h5>
                        <p class="card-text">by <br><?php echo $row['author']; ?><br><br>
                            <a href="/bookdetail/{{ $row['book_id'] }}">Detail</a>
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
    h3 {
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
