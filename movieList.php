<?php


$sesiPageNumber = $_GET['sesiPageNumber'];
if ($sesiPageNumber == "") {
    $pageNumber = 12;
} else {
    $pageNumber = $pageNumber + $sesiPageNumber;
}
?>
<h1>LIST MOVIE</h1>
<div class="row row-cols-1 row-cols-md-3 g-4">

    <?php
    $arrMovie = movieList(1);
    $no = 1;
    foreach ($arrMovie['results'] as $value) {
        if ($no <= $pageNumber) {

            ?>
            <div class="col">
                <div class="card"> <img src="#" class="card-img-top" alt="Poster Film">
                    <div class="card-body">
                        <h5 class="card-title">[<?= $no++ ?>] <?= "judul film" ?></h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, non!</p>
                        <a href="?menu=movieDetail&id_movie=<?= $value['id'] ?>" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <?php
        }
    }
    ?>
</div>
<center><a href="./?menu=movieList&sesiPageNumber=<?= 12 + $sesiPageNumber ?>">Lihat lebih...</a></center>
<br><br><br><br>