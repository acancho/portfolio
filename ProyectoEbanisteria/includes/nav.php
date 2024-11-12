<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img src="img/favicon.png" alt="favicon" class="favicon">Ebanisteria Ramirez</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>" aria-current="page" href="index.php">Inicio</a>
                <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'trabajos.php' ? 'active' : ''; ?>" href="trabajos.php">Trabajos</a>
                <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'resenas.php' ? 'active' : ''; ?>" href="resenas.php">Reseñas</a>
                <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'contacto.php' ? 'active' : ''; ?>" href="contacto.php">Contacto</a>
                <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'login.php' ? 'active' : ''; ?>" href="login.php">Login</a>
            </div>
        </div>
    </div>
</nav>
