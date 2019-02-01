<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de control de inventario</title>


    <link rel="stylesheet" href=" <?php echo base_url(); ?>/assets/css/__config.css">
    <link rel="stylesheet" href=" <?php echo base_url(); ?>/assets/css/dashboard.css">


</head>
<body>
<header>
    <div class="c-title">
        <span>Sistema de control de consumibles</span>
    </div>
    <div class="c-info-user">
        <span> <?php echo $this->session->userdata("id")?> </span>
        <span> <?php echo $this->session->userdata("nombre")?> </span>
        <span> <?php echo $this->session->userdata("rol")?> </span>
        <span>HOLA</span>
        <a href=" <?php echo base_url(); ?>auth/logout">Cerrar sesión</a>
    </div>
</header>
    



















