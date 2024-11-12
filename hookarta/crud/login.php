<?php
session_start();
include '../includes/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $stmt = $mysqli->prepare("SELECT id_usuarios, contrasena_usuarios FROM usuarios WHERE usuario_usuarios = ?");
    $stmt->bind_param('s', $usuario);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($contrasena, $user['contrasena_usuarios'])) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['LAST_ACTIVITY'] = time();
        header('Location: indexadmin.php');
        exit;
    } else {
        $error = "Usuario o contraseña incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-8">
        <h2 class="text-3xl font-bold mb-4">Login</h2>
        <?php if (isset($error)): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>
        <form action="login.php" method="POST" class="w-full max-w-lg">
            <div class="mb-4">
                <label for="usuario" class="block text-gray-700 text-sm font-bold mb-2">Usuario:</label>
                <input type="text" id="usuario" name="usuario" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="contrasena" class="block text-gray-700 text-sm font-bold mb-2">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Login</button>
        </form>
    </div>
</body>
</html>
