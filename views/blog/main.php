<div class="grey lighten-2">
<div class="container py-3">
    <h2 class="text-left font-weight-bold">Ultimas Noticias</h1>
        <div class="card-columns">
            <?php foreach ($post as $value) : ?>
                <div class="card">
                <a href="<?= base_url ?>blog/noticia&id=<?= $value['id'] ?>"><img src="<?= base_url ?>uploads/image/<?= $value['image'] ?>" alt="" class="card-img-top"></a>
                    <div class="card-body">
                    <a href="<?= base_url ?>blog/noticia&id=<?= $value['id'] ?>"><a href="<?= base_url ?>blog/noticia&id=<?= $value['id'] ?>"><h5 class="card-title text-dark font-weight-bold"><?= (strlen($value['titulo']) < 70) ? $value['titulo'] : substr($value['titulo'], 0, 70) . "..."; ?></h5></a>
                    <a href="<?= base_url ?>blog/noticia&id=<?= $value['id'] ?>"><p class="card-text "><?= $value['brief'] ?></p></a>
                    <a href="<?= base_url ?>blog/noticia&id=<?= $value['id'] ?>"><p class="card-text"><i class="far fa-calendar-alt"></i> <small class="text-muted"><?= substr($value['created_at'], 0, 10) ?></small></p></a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
</div>
</div>
