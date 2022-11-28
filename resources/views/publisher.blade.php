<?php
$connect = mysqli_connect('localhost', 'root', '', 'giantbook');
if (mysqli_connect_errno()) {
    throw new exception('MySQL failed to connect') . mysqli_connect_error();
}
$query = $connect->query('SELECT * FROM publishers');
?>

@extends('layouts.main')

@section('container')

    <body>
        <h3>Publishers List</h3>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <?php
                while($row = mysqli_fetch_assoc($query)){
            ?>
            <div class="col">
                <div class="card">
                    <img src="../<?php echo $row['image']; ?>" class="card-img-top" alt="<?php echo $row['pub_name']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['pub_name']; ?></h5>
                        <p class="card-text">Address : <?php echo $row['address']; ?><br><br>
                            <a href="/publishersdetail/{{ $row['pub_id'] }}">Detail</a>
                        </p>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
            {{-- <div class="col">
                <div class="card">
                    <img src="../gramediapustakautama.png" class="card-img-top" alt="Sebuah_Seni_Untuk_Bersikap">
                    <div class="card-body">
                        <h5 class="card-title">Gramedia Pustaka Utama</h5>
                        <p class="card-text">Address : Gedung Kompas Gramedia Blok 1 lt.5
                            Jl. Palmerah Barat No.29-37
                            Jakarta 10270
                            Indonesia<br><br>
                            <a href="/pustakautamapub">Detail</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="../gagasmedia.jpg" class="card-img-top" alt="Psychology of Money">
                    <div class="card-body">
                        <h5 class="card-title">Gagas Media</h5>
                        <p class="card-text">Address : Jl. H. Montong No. 57 Ciganjur
                            Jagakarsa 12360<br><br>
                            <a href="/gagasmediapub">Detail</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="../elexmedia.png" class="card-img-top" alt="Elex Media Komputindo">
                    <div class="card-body">
                        <h5 class="card-title">Elex Media Komputindo</h5>
                        <p class="card-text">Address : Gedung Kompas-Gramedia I Lantai 2
                            Jl Palmerah Barat 29 - 33
                            Jakarta Pusat - 10270<br><br>
                            <a href="/elexmediapub">Detail</a>
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
        height: 220px;
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
