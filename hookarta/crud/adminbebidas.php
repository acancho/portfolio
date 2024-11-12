<?php
function listar_bebidas($mysqli) {
    $query = "SELECT * FROM bebidas";
    $stmt = $mysqli->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    ?>
    <div class="overflow-x-auto mb-8">
        <h3 class="text-2xl font-bold mb-4">Lista de Bebidas</h3>
        <table class="table-auto w-full bg-white shadow-md rounded mb-4">
            <thead>
                <tr>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Nombre</th>
                    <th class="px-4 py-2">Descripción</th>
                    <th class="px-4 py-2">Precio</th>
                    <th class="px-4 py-2">Cantidad</th>
                    <th class="px-4 py-2">Imagen</th>
                    <th class="px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td class="border px-4 py-2"><?php echo htmlspecialchars($row['id_bebidas']); ?></td>
                        <td class="border px-4 py-2"><?php echo htmlspecialchars($row['nombre_bebidas']); ?></td>
                        <td class="border px-4 py-2"><?php echo htmlspecialchars($row['descripcion_bebidas']); ?></td>
                        <td class="border px-4 py-2"><?php echo htmlspecialchars($row['precio_bebidas']); ?></td>
                        <td class="border px-4 py-2"><?php echo htmlspecialchars($row['cantidad_bebidas']); ?></td>
                        <td class="border px-4 py-2">
                            <img src="../img/<?php echo htmlspecialchars($row['foto_bebidas']); ?>" alt="<?php echo htmlspecialchars($row['nombre_bebidas']); ?>" class="w-16 h-16 object-cover">
                        </td>
                        <td class="border px-4 py-2">
                            <a href="editar.php?action=editar&type=bebidas&id=<?php echo $row['id_bebidas']; ?>" class="text-blue-500">Editar</a>
                            <button onclick="confirmDeletion('indexadmin.php?action=eliminar&type=bebidas&id=<?php echo $row['id_bebidas']; ?>')" class="text-red-500">Eliminar</button>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <a href="indexadmin.php?action=crear&type=bebidas" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Añadir Bebida</a>
    </div>
    <?php if (isset($_GET['action']) && $_GET['action'] == 'crear' && $_GET['type'] == 'bebidas'): ?>
        <div class="mt-8">
            <h2 class="text-2xl font-bold mb-4">Añadir Bebida</h2>
            <form action="editar.php?action=crear&type=bebidas" method="POST" enctype="multipart/form-data" class="w-full max-w-lg">
                <div class="mb-4">
                    <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-4">
                    <label for="descripcion" class="block text-gray-700 text-sm font-bold mb-2">Descripción:</label>
                    <textarea id="descripcion" name="descripcion" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required></textarea>
                </div>
                <div class="mb-4">
                    <label for="precio" class="block text-gray-700 text-sm font-bold mb-2">Precio:</label>
                    <input type="text" id="precio" name="precio" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-4">
                    <label for="cantidad" class="block text-gray-700 text-sm font-bold mb-2">Cantidad:</label>
                    <input type="text" id="cantidad" name="cantidad" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-4">
                    <label for="foto" class="block text-gray-700 text-sm font-bold mb-2">Foto:</label>
                    <input type="file" id="foto" name="foto" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Guardar</button>
                <a href="indexadmin.php?type=bebidas" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Cancelar</a>
            </form>
        </div>
    <?php endif; ?>
    <?php
}

listar_bebidas($mysqli);
?>
