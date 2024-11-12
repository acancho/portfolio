<div class="container-fluid bg-body-tertiary">
    <div class="container" data-bs-theme="dark">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid" data-bs-theme="dark">
                <a class="navbar-brand" href="index.php"><img class="inicio" src="img/favicon1.jpeg" alt="icono" width="100px" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item <?php echo ($_SERVER['PHP_SELF'] == 'comida.php') ? 'active' : ''; ?>">
                            <a class="nav-link <?php echo ($_SERVER['PHP_SELF'] == 'comida.php') ? 'font-weight-bold' : ''; ?>" aria-current="page" href="comida.php">
                                Comida
                            </a>
                        </li>
                        <li class="nav-item <?php echo ($_SERVER['PHP_SELF'] == 'bebida.php') ? 'active' : ''; ?>">
                            <a class="nav-link <?php echo ($_SERVER['PHP_SELF'] == 'bebida.php') ? 'font-weight-bold' : ''; ?>" href="bebida.php">
                                Bebida
                            </a>
                        </li>
                        <li class="nav-item <?php echo ($_SERVER['PHP_SELF'] == 'cachimbas.php') ? 'active' : ''; ?>">
                            <a class="nav-link <?php echo ($_SERVER['PHP_SELF'] == 'cachimbas.php') ? 'font-weight-bold' : ''; ?>" href="cachimbas.php">
                                Cachimbas
                            </a>
                        </li>
                        <li class="nav-item <?php echo ($_SERVER['PHP_SELF'] == 'tabacos.php') ? 'active' : ''; ?>">
                            <a class="nav-link <?php echo ($_SERVER['PHP_SELF'] == 'tabacos.php') ? 'font-weight-bold' : ''; ?>" href="tabacos.php">
                                Tabacos
                            </a>
                        </li>
                        <li class="nav-item <?php echo ($_SERVER['PHP_SELF'] == 'hacer_pedido.php') ? 'active' : ''; ?>">
                            <a class="nav-link <?php echo ($_SERVER['PHP_SELF'] == 'hacer_pedido.php') ? 'font-weight-bold' : ''; ?>" href="hacer_pedido.php">
                                Hacer pedido
                            </a>
                        </li>
                        
                    </ul>
                    <form class="d-flex" action="busqueda.php" method="GET">
                        <input type="hidden" name="categoria" value="tabaco,comida,cachimbas,bebidas">
                        <input class="form-control me-2 white-placeholder" type="search" name="q" placeholder="Buscar" aria-label="Buscar" />
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
</div>
