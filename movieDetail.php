<?php
$id_movie = $_GET['id_movie'];
$data = movieDetails($id_movie);
?>
<!-- Card untuk Detail Film -->
<a href="./?menu=movieList" class="btn btn-danger">List movie</a>
<div class="card">
    <div class="row g-0">
        <!-- Gambar Poster Film -->
        <div class="col-md-4">
            <img src="https://image.tmdb.org/t/p/w400/<?= $data['poster_path'] ?>" class="img-fluid rounded-start"
                alt="Poster Film">
        </div>
        <!-- Detail Film -->
        <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title"><?= $data['original_title'] ?></h3>
                <p class="card-text"><small class="text-muted">Tahun Rilis: <?= $data['release_date'] ?>
                    </small></p>
                <p class="card-text"><?= $data['overview'] ?></p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Genre:</strong> Action, Adventure</li>
                    <li class="list-group-item"><strong>Durasi:</strong> <?= $data['runtime'] ?> menit</li>
                    <li class="list-group-item"><strong>Popularitas :</strong> <?= $data['popularity'] ?></li>
                    <li class="list-group-item"><strong>Status:</strong> <?= $data['status'] ?></li>
                </ul>
                <a href="#" class="btn btn-primary mt-3">Tonton Trailer</a>
            </div>
        </div>
    </div>
</div>