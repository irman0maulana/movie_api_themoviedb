<?php
$pageNumber = $_GET['pageNumber'];
if ($pageNumber == "") {
    $pageNumber = 12;
}
$sesiPageNumber = $_GET['sesiPageNumber'];
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
                <div class="card"> <img src="<?php $img = MovieGetdata($value['id'], 'poster_path');
                $img_url = $img ? "https://image.tmdb.org/t/p/w400/" . $img : "https://via.placeholder.com/300x450";
                echo $img_url; ?>" class="card-img-top" alt="Poster Film">
                    <div class="card-body">
                        <h5 class="card-title">[<?= $no++ ?>] <?= MovieGetdata($value['id'], 'original_title') ?></h5>
                        <p class="card-text"><?= truncateText(MovieGetdata($value['id'], data: 'overview')) ?></p>
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