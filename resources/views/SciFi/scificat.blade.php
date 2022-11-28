<?php
$connect = mysqli_connect('localhost', 'root', '', 'giantbook');
if (mysqli_connect_errno()) {
    throw new exception('MySQL failed to connect') . mysqli_connect_error();
}
$all_book = $connect->query('SELECT `title`, `author`, `book_image`
FROM `book_category` bc JOIN `books` b
ON bc.book_id = b.book_id
WHERE `cat_id` LIKE "CAT003"');
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
                    <img src="../lumpu.jpg" class="card-img-top" alt="Lumpu">
                    <div class="card-body">
                        <h5 class="card-title">Lumpu</h5>
                        <p class="card-text">by <br>Tere Liye<br><br>
                            <a href="/lumpubook">Detail</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="../negeriujung.jpg" class="card-img-top" alt="Negeri di Ujung Tanduk">
                    <div class="card-body">
                        <h5 class="card-title">Negeri di Ujung Tanduk</h5>
                        <p class="card-text">by <br>Tere Liye<br><br>
                            <a href="/negeribook">Detail</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="../anakpemberani.jpg" class="card-img-top" alt="Si Anak Pemberani">
                    <div class="card-body">
                        <h5 class="card-title">Si Anak Pemberani</h5>
                        <p class="card-text">by <br>Tere Liye<br><br>
                            <a href="/anakpemberanibook">Detail</a>
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
