<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a href="<?php url(); ?>" class="navbar-brand">
        <img src="<?php echo BURL . 'assets/images/logo.png'; ?>" width="100" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collpase" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a href="<?php url(); ?>" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="<?php url('product'); ?>" class="nav-link">Produtos</a>
            </li>
            <li class="nav-item">
                <a href="<?php url('product/add'); ?>" class="nav-link">Add produtos</a>
            </li>
        </ul>
    </div>
</nav>