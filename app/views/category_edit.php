<!doctype html>
<html lang="fr">
<?php include APP_INCLUDES_DIR . "/html_head_tag.php"; ?>
<body>
<?php include APP_INCLUDES_DIR.'/navbar_auth.php'; ?>
<div class="container py-5">

    <div class="col-lg-4 mx-auto">
        <?php include APP_INCLUDES_DIR.'/alerts.php'; ?>
    </div>



    <div class="col-lg-12">

        <div class="card">
            <div class="card-header">editer une categorie <b><?= $category->name ?></b> </div>
            <div class="card-body">
                <form action="" method="post">

                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text" class="form-control" name="name" value="<?= $category->name ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea type="text" class="form-control" name="description"><?= $category->description ?></textarea>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary">
                            Editer
                        </button>
                    </div>

                </form>
            </div>
        </div>

    </div>

</div>

</body>
</html>