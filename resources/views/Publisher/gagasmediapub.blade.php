<?php
$connect = mysqli_connect('localhost', 'root', '', 'giantbook');
if (mysqli_connect_errno()) {
    throw new exception('MySQL failed to connect') . mysqli_connect_error();
}
$all_book = $connect->query('SELECT DISTINCT `title`, `author`, `book_image`, `pub_name`, `address`, `phone`, `email`
FROM `publishers` p JOIN `books` b
ON p.pub_id = b.pub_id_book
WHERE `pub_id_book` LIKE "PUB003"');
?>

@extends('layouts.main')

@section('container')

    <body>
        <h4>Gagas Media<br>
            Address : Jl. H. Montong No. 57 Ciganjur
            Jagakarsa 12360
            Indonesia<br>
            Phone : 021-7888-3030<br>
            Email : redaksi@gagasmedia.net<br>
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
                            <a href="/pestabook">Detail</a>
                        </p>
                    </div>
                </div>
            </div>
            {{-- <div class="col">
                <div class="card">
                    <img src="../jikakita.jpg" class="card-img-top" alt="Jika Kita Tak Pernah Jadi Apa-Apa">
                    <div class="card-body">
                        <h5 class="card-title">Jika Kita Tak Pernah Jadi Apa-Apa</h5>
                        <p class="card-text">by <br>Alvi Syahrin<br><br>
                            <a href="/jikakitabook">Detail</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="../baiksaja.jpg" class="card-img-top" alt="Jika Kita Tak Pernah Baik-Baik Saja">
                    <div class="card-body">
                        <h5 class="card-title">Jika Kita Tak Pernah Baik-Baik Saja</h5>
                        <p class="card-text">by <br>Alvi Syahrin<br><br>
                            <a href="/baiksajabook">Detail</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="../asing.jpg" class="card-img-top" alt="Asing">
                    <div class="card-body">
                        <h5 class="card-title">Asing</h5>
                        <p class="card-text">by <br>Fadli Inzaghi<br><br>
                            <a href="/asingbook">Detail</a>
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
