<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Evaluación Técnica</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body style="padding-top: 5rem;">

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="?p=inicio">Inicio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                <a class="nav-link" href="?p=menu">Menú</a>
            </li>


            <?php foreach ($this->menusHeader as $menu):?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo($menu["nombreMenu"]);?></a>
                <div class="dropdown-menu" aria-labelledby="dropdown02">
                    <?php foreach ($menu["subMenus"] as $subMenu):?>
                        <a class="dropdown-item" href="?p=menu&a=ver&id=<?php echo $subMenu["id_menu"]?>"><?php echo $subMenu["nombre"]?></a>
                    <?php endforeach;?>
                </div>
            </li>
            <?php endforeach;?>
        </ul>
    </div>
</nav>

<main role="main" class="container">
    <div style="padding: 3rem 1rem; text-align: center;">
        <?php if (isset($this->mensaje)): ?>
        <?php if ($this->exito): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php else: ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php endif; ?>
                <strong><?php echo base64_decode($this->mensaje); ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
<?php endif; ?>