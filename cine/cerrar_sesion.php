<?php

   // Este método para destruir sesiones viene en la documentación de PHP:
        // https://www.php.net/manual/es/function.session-destroy.php
 
        if(isset($_POST['logout'])) {
            session_start();
            $_SESSION = array();
            if(ini_get("session.use_cookies")){
                $params = session_get_cookie_params();
                setcookie(session_name(), '', time() - 42000,
                    $params["path"], $params["domain"],
                    $params["secure"], $params["httponly"]
                );
            }
            session_destroy();
            echo '<script>window.location.href = "index.php";</script>';
        }
    ?>

<?php
  session_start();

  if (isset($_SESSION["usuario"])) {
    // La sesión está iniciada, mostrar menu2.php
    include "includes/menu2.php";
  } else {
    // La sesión no está iniciada, mostrar menu.php
    include "includes/menu.php";
  }
  ?>
    
    <!DOCTYPE html>
    <html>
    <head>
    <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FilmFun | Sesion Cerrada</title>
  <link rel="shortcut icon" href="img/favicon.png" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
        <style>
            body {
                background-color: black;
            }
            .center {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 50vh;
                flex-direction: column; 
            }
            .logout-button, .back-button {
                border-radius: 12px;
                background-color: red;
                color: white;
                border: none;
                padding: 20px 40px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 20px;
                margin-top: 10px; 
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <div class="center">
            <form method="post">
                <button type="submit" name="logout" class="logout-button">Cerrar sesión</button>
            </form>
            <a href="index.php"><button class="back-button">Volver</button></a> 
        </div>

        <?php
    include "includes/footer.php";
    ?>
    </body>
    </html>