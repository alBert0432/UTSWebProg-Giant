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
