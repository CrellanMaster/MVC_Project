<?php include(VIEWS . "inc/header.php"); ?>


<div class="container">
    <div class="row">
        <div class="col-8 mx-auto">
            <?php if (isset($sucess)) : ?>
                <div class="alert alert-danger text-center"><?= $sucess; ?></div>
            <?php endif; ?>
            <?php if (isset($error)) : ?>
                <div class="alert alert-danger text-center"><?= $error; ?></div>
            <?php endif; ?>
        </div>
    </div>
</div>


<?php include(VIEWS . "inc/footer.php"); ?>
