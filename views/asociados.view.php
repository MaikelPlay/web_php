<?php include __DIR__ . '/partials/inicio-doc.part.php'; ?>

<?php include __DIR__ . '/partials/nav.part.php'; ?>

<!-- Principal Content Start -->
<div id="galeria">
    <div class="container">
        <div class="col-xs-12 col-sm-8 col-sm-push-2">
            <h1>ASOCIADOS</h1>
            <hr>
            <?php include __DIR__ . '/partials/show-error.part.php' ?>
           
            <form class="form-horizontal" action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="col-xs-12">
                        <label class="label-control">Nombre</label>
                        <input class="form-control" type="text" name="nombre" value="<?= $nombre ?? '' ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <label class="label-control">Logo</label>
                        <input class= "form-control-file" type="file" name="logo">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <label class="label-control">Descripcion</label>
                        <textarea class="form-control" name="descripcion"><?= $descripcion ?? ''?></textarea>
                        <button class="pull-right btn btn-lg sr-button">ENVIAR</button>
                    </div>
                </div>
            </form>
            <hr class="divider">
            <div class="imagenes_galeria">

            </div>
        </div>
    </div>
</div>


<?php include __DIR__ . '/partials/fin-doc.part.php'; ?>


