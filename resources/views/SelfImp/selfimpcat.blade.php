<?php
$connect = mysqli_connect('localhost', 'root', '', 'giantbook');
if (mysqli_connect_errno()) {
    throw new exception('MySQL failed to connect') . mysqli_connect_error();
}
$all_book = $connect->query('SELECT `title`, `author`, `book_image`
FROM `book_category` bc JOIN `books` b
ON bc.book_id = b.book_id
WHERE `cat_id` LIKE "CAT004"');
?>

@extends('layouts.main')

@section('container')

    <body>
        <h3>Mystery</h3>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <?php
                while($row = mysqli_fetch_assoc($all_book)){
            ?>
            <div class="col">
                <div class="card">
                    <img src="../<?php echo $row['book_image']; ?>" class="card-img-top" alt="Para Pelindung">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['title']; ?></h5>
                        <p class="card-text">by <br><?php echo $row['author']; ?><br><br>
                            <a href="/pelindungbook">Detail</a>
                        </p>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
            {{-- <div class="col">
                <div class="card">
                    <img src="../Seni-Untuk-Bersikap-Bodo-Amat_1.png" class="card-img-top" alt="Sebuah_Seni_Untuk_Bersikap">
                    <div class="card-body">
                        <h5 class="card-title">Sebuah Seni Untuk Bersikap Bodo Amat</h5>
                        <p class="card-text">by <br>Mark Manson<br><br>
                            <a href="/amatbook">Detail</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="../psychology.jpg" class="card-img-top" alt="Psychology of Money">
                    <div class="card-body">
                        <h5 class="card-title">Psychology Of Money</h5>
                        <p class="card-text">by <br>Morgan Housel<br><br>
                            <a href="/psychologybook">Detail</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="../atomic.jpg" class="card-img-top" alt="Atomic Habits">
                    <div class="card-body">
                        <h5 class="card-title">Atomic Habits</h5>
                        <p class="card-text">by <br>James Clear<br><br>
                            <a href="/atomicbook">Detail</a>
                        </p>
                    </div>
                </div>
            </div> --}}
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
