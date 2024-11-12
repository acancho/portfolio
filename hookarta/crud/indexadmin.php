<?php
include '../includes/conexion.php';
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 300)) {
    session_unset();
    session_destroy();
    header('Location: login.php');
    exit;
}
$_SESSION['LAST_ACTIVITY'] = time();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        function openTab(evt, tabName) {
            var i, tabcontent, tablink;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].classList.add("hidden");
            }
            tablink = document.getElementsByClassName("tablink");
            for (i = 0; i < tablink.length; i++) {
                tablink[i].classList.remove("bg-blue-700");
                tablink[i].classList.add("bg-blue-500");
            }
            document.getElementById(tabName).classList.remove("hidden");
            evt.currentTarget.classList.add("bg-blue-700");
        }

        function confirmDeletion(url) {
            document.getElementById('deleteUrl').href = url;
            document.getElementById('confirmDeleteModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('confirmDeleteModal').classList.add('hidden');
        }
    </script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-8">
        <a href="logout.php" class="text-blue-500">Cerrar sesión</a>
        <a href="index.php" class="float-right bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Volver a la página principal</a>

        <h2 class="text-3xl font-bold mb-4">CRUD de Productos</h2>
        <div class="flex flex-col md:flex-row md:space-x-4 mb-4">
            <button class="tablink bg-blue-500 text-white py-2 px-4 rounded" onclick="openTab(event, 'Bebidas')">Bebidas</button>
            <button class="tablink bg-blue-500 text-white py-2 px-4 rounded" onclick="openTab(event, 'Comidas')">Comidas</button>
            <button class="tablink bg-blue-500 text-white py-2 px-4 rounded" onclick="openTab(event, 'Cachimbas')">Cachimbas</button>
            <button class="tablink bg-blue-500 text-white py-2 px-4 rounded" onclick="openTab(event, 'Tabacos')">Tabacos</button>
        </div>

        <div id="Bebidas" class="tabcontent">
            <?php include 'adminbebidas.php'; ?>
        </div>
        <div id="Comidas" class="tabcontent hidden">
            <?php include 'admincomidas.php'; ?>
        </div>
        <div id="Cachimbas" class="tabcontent hidden">
            <?php include 'admincachimbas.php'; ?>
        </div>
        <div id="Tabacos" class="tabcontent hidden">
            <?php include 'admintabacos.php'; ?>
        </div>
    </div>

    <!-- Modal de confirmación -->
    <div id="confirmDeleteModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white p-8 rounded shadow-md text-center">
            <h2 class="text-xl mb-4">¿Estás seguro de que deseas eliminar este registro?</h2>
            <button onclick="closeModal()" class="bg-gray-500 hover:bg-gray-700 text-white py-2 px-4 rounded mr-2">Cancelar</button>
            <a id="deleteUrl" href="#" class="bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded">Eliminar</a>
        </div>
    </div>
</body>
</html>
