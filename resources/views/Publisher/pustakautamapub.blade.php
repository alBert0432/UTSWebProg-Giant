<?php
$connect = mysqli_connect('localhost', 'root', '', 'giantbook');
if (mysqli_connect_errno()) {
    throw new exception('MySQL failed to connect') . mysqli_connect_error();
}
$all_book = $connect->query('SELECT DISTINCT `title`, `author`, `book_image`, `pub_name`, `address`, `phone`, `email`
FROM `publishers` p JOIN `books` b
ON p.pub_id = b.pub_id_book
WHERE `pub_id_book` LIKE "PUB002"');
?>

@extends('layouts.main')

@section('container')

    <body>
        <h4>Gramedia Pustaka Utama<br>
            Address : Gedung Kompas Gramedia Blok 1 lt.5
            Jl. Palmerah Barat No.29-37
            Jakarta 10270
            Indonesia<br>
            Phone : (021) 53650110/11<br>
            Email : redaksi@gramediapustakautama.id<br>
        </h4>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <?php
                while($row = mysqli_fetch_assoc($all_book)){
            ?>
            <div class="col">
                <div class="card">
                    <img src="../<?php echo $row['book_image']; ?>" class="card-img-top" alt="<?php echo $row['title']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['title']; ?></h5>
                        <p class="card-text">by <br><?php echo $row['author']; ?><br><br>
                            <a href="/limacmbook">Detail</a>
                        </p>
                    </div>
                </div>
            </div>
            {{-- <div class="col">
                <div class="card">
                    <img src="../bumi.jpg" class="card-img-top" alt="Novel Bumi">
                    <div class="card-body">
                        <h5 class="card-title">Bumi</h5>
                        <p class="card-text">by <br>Tere Liye<br><br>
                            <a href="/bumibook">Detail</a>
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
                    <img src="../grit.jpg" class="card-img-top" alt="Grit">
                    <div class="card-body">
                        <h5 class="card-title">Grit: Kekuatan Passion dan Kegigihan</h5>
                        <p class="card-text">by <br>Angela Duckworth<br><br>
                            <a href="/gritbook">Detail</a>
                        </p>
                    </div>
                </div>
            </div> --}}
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
