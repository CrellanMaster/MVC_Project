<?php include(VIEWS . "inc/header.php"); ?>
<h1 class="text-center my-5 py-3">Ver todos os produtos</h1>
<div class="container">
    <div class="row">
        <div class="col-8 mx-auto"></div>
        <table class="table">
            <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th class="text-center" scope="col">Descrição</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
            <?php foreach ($products as $row): ?>
                <tr>
                    <td><?= $i;
                        $i++ ?></td>
                    <td><?= $row['name']; ?></td>
                    <td><?= $row['price']; ?><b class="float-right">$</b></td>
                    <td class="text-center"><?= $row['description']; ?></td>
                    <td><?= $row['quant']; ?></td>
                    <td>
                        <a href="<?php url('/product/edit/' . $row['id']); ?>" class="btn btn-info">Editar</a>
                    </td>
                    <td>
                        <a href="<?php url('/product/delete/' . $row['id']); ?>" class="btn btn-danger">Deletar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<?php include(VIEWS . "inc/footer.php"); ?>
