<?php
    session_start();
    if(!isset($_SESSION["usuario"])){
        echo '<script>window.location.href = "index.php"</script>';	
    }
?>