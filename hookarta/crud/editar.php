<?php
include '../includes/conexion.php';
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}

$action = $_GET['action'];
$type = $_GET['type'];
$id = isset($_GET['id']) ? $_GET['id'] : null;
$isEditing = $action === 'editar';

$name = $description = $price = $quantity = $photo = '';

if ($isEditing && $id) {
    $tableName = '';
    $idColumn = '';
    $nameColumn = '';
    $descColumn = '';
    $priceColumn = '';
    $quantityColumn = '';
    $photoColumn = null; // Default to null for types without photos

    switch ($type) {
        case 'bebidas':
            $tableName = 'bebidas';
            $idColumn = 'id_bebidas';
            $nameColumn = 'nombre_bebidas';
            $descColumn = 'descripcion_bebidas';
            $priceColumn = 'precio_bebidas';
            $quantityColumn = 'cantidad_bebidas';
            $photoColumn = 'foto_bebidas';
            break;
        case 'comidas':
            $tableName = 'comida';
            $idColumn = 'id_comida';
            $nameColumn = 'nombre_comida';
            $descColumn = 'descripcion_comida';
            $priceColumn = 'precio_comida';
            $quantityColumn = 'cantidad_comida';
            $photoColumn = 'foto_comida';
            break;
        case 'cachimbas':
            $tableName = 'cachimbas';
            $idColumn = 'id_cachimbas';
            $nameColumn = 'nombre_cachimbas';
            $descColumn = 'descripcion_cachimbas';
            $priceColumn = 'precio_cachimbas';
            $quantityColumn = 'cantidad_cachimbas';
            $photoColumn = 'foto_cachimbas';
            break;
        case 'tabacos':
            $tableName = 'tabacos';
            $idColumn = 'id_tabacos';
            $nameColumn = 'nombre_tabacos';
            $descColumn = 'descripcion_tabacos';
            $priceColumn = 'precio_tabacos';
            $quantityColumn = 'cantidad_tabacos';
            break;
    }

    $stmt = $mysqli->prepare("SELECT * FROM $tableName WHERE $idColumn = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $item = $result->fetch_assoc();

    $name = $item[$nameColumn];
    $description = $item[$descColumn];
    $price = $item[$priceColumn];
    $quantity = $item[$quantityColumn];
    if ($photoColumn) {
        $photo = $item[$photoColumn];
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['nombre'];
    $description = $_POST['descripcion'];
    $price = $_POST['precio'];
    $quantity = $_POST['cantidad'];
    $photo = isset($_FILES['foto']['name']) ? $_FILES['foto']['name'] : '';

    if ($photo) {
        $targetDir = "../img/";
        $targetFile = $targetDir . basename($photo);
        move_uploaded_file($_FILES['foto']['tmp_name'], $targetFile);
    } else if ($isEditing && isset($_POST['current_foto'])) {
        $photo = $_POST['current_foto'];
    }

    if ($isEditing) {
        if ($photoColumn) {
            $stmt = $mysqli->prepare("UPDATE $tableName SET $nameColumn = ?, $descColumn = ?, $priceColumn = ?, $quantityColumn = ?, $photoColumn = ? WHERE $idColumn = ?");
            $stmt->bind_param('sssisi', $name, $description, $price, $quantity, $photo, $id);
        } else {
            $stmt = $mysqli->prepare("UPDATE $tableName SET $nameColumn = ?, $descColumn = ?, $priceColumn = ?, $quantityColumn = ? WHERE $idColumn = ?");
            $stmt->bind_param('sssii', $name, $description, $price, $quantity, $id);
        }
    } else {
        if ($photoColumn) {
            $stmt = $mysqli->prepare("INSERT INTO $tableName ($nameColumn, $descColumn, $priceColumn, $quantityColumn, $photoColumn) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param('sssisi', $name, $description, $price, $quantity, $photo);
        } else {
            $stmt = $mysqli->prepare("INSERT INTO $tableName ($nameColumn, $descColumn, $priceColumn, $quantityColumn) VALUES (?, ?, ?, ?)");
            $stmt->bind_param('sssi', $name, $description, $price, $quantity);
        }
    }

    if ($stmt->execute()) {
        header('Location: indexadmin.php?type=' . $type);
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $isEditing ? 'Editar' : 'Añadir'; ?> <?php echo ucfirst($type); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-8">
        <h2 class="text-3xl font-bold mb-4"><?php echo $isEditing ? 'Editar' : 'Añadir'; ?> <?php echo ucfirst($type); ?></h2>
        <form action="editar.php?action=<?php echo $action; ?>&type=<?php echo $type; ?>&id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data" class="w-full max-w-lg">
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="<?php echo htmlspecialchars($name); ?>" required>
            </div>
            <div class="mb-4">
                <label for="descripcion" class="block text-gray-700 text-sm font-bold mb-2">Descripción:</label>
                <textarea id="descripcion" name="descripcion" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required><?php echo htmlspecialchars($description); ?></textarea>
            </div>
            <div class="mb-4">
                <label for="precio" class="block text-gray-700 text-sm font-bold mb-2">Precio:</label>
                <input type="text" id="precio" name="precio" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="<?php echo htmlspecialchars($price); ?>" required>
            </div>
            <div class="mb-4">
                <label for="cantidad" class="block text-gray-700 text-sm font-bold mb-2">Cantidad:</label>
                <input type="text" id="cantidad" name="cantidad" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="<?php echo htmlspecialchars($quantity); ?>" required>
            </div>
            <?php if ($photoColumn && $type !== 'tabacos'): ?>
                <div class="mb-4">
                    <label for="foto" class="block text-gray-700 text-sm font-bold mb-2">Foto:</label>
                    <input type="file" id="foto" name="foto" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <?php if ($isEditing && $photo): ?>
                        <img src="../img/<?php echo htmlspecialchars($photo); ?>" alt="<?php echo htmlspecialchars($name); ?>" class="w-16 h-16 object-cover mt-2">
                        <input type="hidden" name="current_foto" value="<?php echo htmlspecialchars($photo); ?>">
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Guardar</button>
            <a href="indexadmin.php?type=<?php echo $type; ?>" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Cancelar</a>
        </form>
    </div>
</body>
</html>
