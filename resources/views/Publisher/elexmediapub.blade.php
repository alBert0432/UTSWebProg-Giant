<?php
$connect = mysqli_connect('localhost', 'root', '', 'giantbook');
if (mysqli_connect_errno()) {
    throw new exception('MySQL failed to connect') . mysqli_connect_error();
}
$all_book = $connect->query('SELECT DISTINCT `title`, `author`, `book_image`, `pub_name`, `address`, `phone`, `email`
FROM `publishers` p JOIN `books` b
ON p.pub_id = b.pub_id_book
WHERE `pub_id_book` LIKE "PUB004"');
?>

@extends('layouts.main')

@section('container')

    <body>
        <h4>Elex Media Komputindo<br>
            Address : Gedung Kompas-Gramedia,
            Jl. Palmerah Barat No. 29 - 32, Gelora, Tanah Abang<br>
            Phone : (021) 5365 0110 / 11<br>
            Email : customercare@gramedia.com<br>
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
                    <img src="../TheDevilAllTheTime.jpg" class="card-img-top" alt="The Devil All The Time">
                    <div class="card-body">
                        <h5 class="card-title">The Devil All The Time</h5>
                        <p class="card-text">by <br>Donald Ray Pollock<br><br>
                            <a href="/thedevilbook">Detail</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="../Stephen Hawking.jpg" class="card-img-top" alt="Why? People - Stephen Hawking">
                    <div class="card-body">
                        <h5 class="card-title">Why? People - Stephen Hawking</h5>
                        <p class="card-text">by <br>Elex Media K<br><br>
                            <a href="/stephenhawkingbook">Detail</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="../petualang.jpg" class="card-img-top" alt="Petualang Super Kids">
                    <div class="card-body">
                        <h5 class="card-title">Petualang Super Kids</h5>
                        <p class="card-text">by <br>Tim Elex Media Komputindo<br><br>
                            <a href="/petualangbook">Detail</a>
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
