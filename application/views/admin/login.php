<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login : Control de inventario</title>

    <link rel="stylesheet" href=" <?php echo base_url(); ?>assets/css/__config.css">
    <link rel="stylesheet" href=" <?php echo base_url(); ?>assets/css/login.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/libs/mdl/material.css">
    <script src="<?php echo base_url(); ?>assets/libs/mdl/material.js"></script>

</head>
<body>
    <div class="main-container">
        <div class="c-login">
            <form action="<?php echo base_url(); ?>auth/login" method="post">
                <img src=" <?php echo base_url(); ?>/assets/img/login/login-image.svg " alt="login-image">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="tb-user" name="tb_user" required>
                    <label class="mdl-textfield__label" for="tb-user">Usuario</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="password" id="tb-password" name="tb_password" required>
                    <label class="mdl-textfield__label" for="tb-password">Contraseña</label>
                </div>
                <button>Entrar</button>
            </form>
        </div>
    </div>
    <footer>
        <p>Página cargada en <strong>{elapsed_time}</strong> segundos.</p>    
    </footer>
</body>
</html>