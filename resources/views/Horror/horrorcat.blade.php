<?php
$connect = mysqli_connect('localhost', 'root', '', 'giantbook');
if (mysqli_connect_errno()) {
    throw new exception('MySQL failed to connect') . mysqli_connect_error();
}
$all_book = $connect->query('SELECT `title`, `author`, `book_image`
FROM `book_category` bc JOIN `books` b
ON bc.book_id = b.book_id
WHERE `cat_id` LIKE "CAT002"');
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
                    <img src="../LewatTengahMalam.jpeg" class="card-img-top" alt="Lewat Tengah Malam - Ganjil">
                    <div class="card-body">
                        <h5 class="card-title">Lewat Tengah Malam - Ganjil</h5>
                        <p class="card-text">by <br>Sweta Kartika<br><br>
                            <a href="/lewatbook">Detail</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="../kkndesapenari.jpg" class="card-img-top" alt="KKN Di Desa Penari">
                    <div class="card-body">
                        <h5 class="card-title">KKN Di Desa Penari</h5>
                        <p class="card-text">by <br>Simpleman<br><br>
                            <a href="/desapenaribook">Detail</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="../teman.jpg" class="card-img-top" alt="Teman">
                    <div class="card-body">
                        <h5 class="card-title">Teman</h5>
                        <p class="card-text">by <br>Jounatan & Guntur Alam<br><br>
                            <a href="/temanbook">Detail</a>
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
