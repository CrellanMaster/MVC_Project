<?php include(VIEWS . "inc/header.php"); ?>
<h1 class="text-center my-5 py-3">Editar produto</h1>
<div class="container">
    <div class="row">
        <div class="col-8 mx-auto">
            <?php if (isset($sucess)) : ?>
                <h3 class="alert alert-success text-center"><?= $sucess; ?></h3>
            <?php endif; ?>
            <?php if (isset($error)) : ?>
                <h3 class="alert alert-danger text-center"><?= $error; ?></h3>
            <?php endif; ?>

            <form class="p-5 borber mb-5" method="POST" action="<?php url('product/update/' . $row[0]['id']); ?>">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" required name="name" value="<?= $row[0]['name']; ?>" class="form-control"
                           id="name">
                </div>
                <div class="form-group">
                    <label for="price">Preço</label>
                    <input type="text" required name="price" value="<?= $row[0]['price']; ?>" class="form-control"
                           id="price">
                </div>
                <div class="form-group">
                    <label for="description">Descrição</label>
                    <input type="text" name="description" value="<?= $row[0]['description']; ?>" class="form-control"
                           id="description">
                </div>
                <div class="form-group">
                    <label for="quant">Quantidade</label>
                    <input type="text" name="quant" value="<?= $row[0]['quant']; ?>" class="form-control" id="quant">
                </div>
                <button style="margin-top: 10px" class="btn btn-primary" type="submit" name="submit">Enviar</button>
            </form>
        </div>
    </div>
</div>


<?php include(VIEWS . "inc/footer.php"); ?>
