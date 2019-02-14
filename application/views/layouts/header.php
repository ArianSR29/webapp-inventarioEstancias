<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de control de inventario</title>


    <link rel="stylesheet" href=" <?php echo base_url(); ?>/assets/css/__config.css">
    <link rel="stylesheet" href=" <?php echo base_url(); ?>/assets/css/dashboard.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/main.js"></script>    
</head>
<body>
<header>
    <div class="c-title">
        <span>Sistema de control de consumibles</span>
    </div>
    <div class="c-info-user">
        <span> <?php echo $this->session->userdata("nombre")?> <?php echo $this->session->userdata("apellidos")?> </span>
        <a href=" <?php echo base_url(); ?>auth/logout">Cerrar sesión</a>
    </div>
</header>