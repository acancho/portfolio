<?php
    session_start();
    if(!isset($_SESSION["usuario"])){
        echo '<script>window.location.href = "login.php"</script>';	
    }
?>