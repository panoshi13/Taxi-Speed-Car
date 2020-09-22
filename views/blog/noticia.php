<div class="container py-3">
    <div class="row">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-uppercase font-weight-bolder text-center"><?= $noticia->titulo ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= substr($noticia->created_at, 0, 10) ?></h6>
                    <img src="<?= base_url ?>uploads/image/<?= $noticia->image ?>" alt="noticia" class="img-fluid py-2">
                    <p class="text-oscuro text-justify"><?= $noticia->content ?></p>
                    <a href="<?= base_url ?>blog/todas"><button type="button" class="btn btn-info btn-block text-gris font-weight-bold">Regresar</button></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="row">
                <div class="col-lg-12 grey lighten-4 border text-center">
                    <h4 class="pt-2 font-italic">Otras Noticias</h4>
                </div>
            </div>
            <?php foreach ($objs as $key) : ?>
                <div class="row  grey lighten-4 p-3 border">
                    <div class="col-lg-4 align-self-center text-center">
                        <a href="<?= base_url ?>blog/noticia&id=<?= $key['id'] ?>"><img src="<?= base_url ?>uploads/image/<?= $key['image'] ?>" alt="" class="img-fluid"></a>
                    </div>
                    <div class="col-lg-8 align-self-center ">
                        <small class="text-muted">
                            <?= substr($key['created_at'], 0, 10) ?>
                        </small>
                        <a href="<?= base_url ?>blog/noticia&id=<?= $key['id'] ?>">
                            <p class="text-dark font-weight-light"><?= (strlen($key['titulo']) < 46) ? $key['titulo'] : substr($key['titulo'], 0, 46) . "..."; ?></p>
                        </a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

</div>