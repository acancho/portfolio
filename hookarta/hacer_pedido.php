<?php include 'includes/head.php'; ?>
<body>
  <!-- NAV -->
  <?php include 'includes/nav.php'; ?>
  <!-- NAV -->

  <div class="container mt-4" data-bs-theme="dark">
    <div class="jumbotron text-center">
      <h1 class="display-4">¡Bienvenido!</h1>
      <p class="lead">Estamos emocionados de tenerte aquí para disfrutar de una experiencia única.</p>
      <hr class="my-4">
      <p>Prepárate para explorar nuestra variedad de sabores y relajarte con amigos desde la comodidad de tu hogar.</p>
      <p>¿Listo para comenzar tu pedido? ¡Genial! Echa un vistazo a nuestra carta virtual y elige tus sabores favoritos. No dudes en preguntar si necesitas ayuda o recomendaciones.</p>
      <p class="mb-0">¡Que comience la diversión y el buen ambiente! Estamos aquí para que tu experiencia sea inolvidable.</p>
    </div>

    <div class="mt-5">
      <h2>¿Qué te apetece beber?</h2>
      <?php
      include 'includes/conexion.php';

      if ($mysqli) {
          $result = $mysqli->query("SELECT * FROM bebidas");
          if ($result) {
              echo "<table class='table table-hover'>";
              echo "<thead class='thead-dark'><tr><th>Refrescos</th><th>Precio</th><th>Cantidad</th><th>Añadir al carrito</th></tr></thead><tbody>";
              while ($row = $result->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>" . $row['nombre_bebidas'] . "</td>";
                  echo "<td>" . $row['precio_bebidas'] . "€</td>";
                  echo "<td><input type='number' class='form-control' value='1' id='cantidad_bebida_" . $row['id_bebidas'] . "' min='1' max='" . $row['cantidad_bebidas'] . "'></td>";
                  echo "<td><button class='btn btn-primary' onclick='agregarAlCarrito(" . $row['id_bebidas'] . ", \"bebida\")'>Añadir al carrito</button></td>";
                  echo "</tr>";
              }
              echo "</tbody></table>";
          } else {
              echo "<div class='alert alert-danger'>Error al obtener bebidas: " . $mysqli->error . "</div>";
          }
      } else {
          echo "<div class='alert alert-danger'>Error al conectar a la base de datos.</div>";
      }
      ?>
    </div>

    <div class="mt-5">
      <h2>¿Qué te apetece comer?</h2>
      <?php
      if ($mysqli) {
          $result = $mysqli->query("SELECT * FROM comida");
          if ($result) {
              echo "<table class='table table-hover'>";
              echo "<thead class='thead-dark'><tr><th>Comida</th><th>Precio</th><th>Cantidad</th><th>Añadir al carrito</th></tr></thead><tbody>";
              while ($row = $result->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>" . $row['nombre_comida'] . "</td>";
                  echo "<td>" . $row['precio_comida'] . "€</td>";
                  echo "<td><input type='number' class='form-control' value='1' id='cantidad_comida_" . $row['id_comida'] . "' min='1' max='" . $row['cantidad_comida'] . "'></td>";
                  echo "<td><button class='btn btn-primary' onclick='agregarAlCarrito(" . $row['id_comida'] . ", \"comida\")'>Añadir al carrito</button></td>";
                  echo "</tr>";
              }
              echo "</tbody></table>";
          } else {
              echo "<div class='alert alert-danger'>Error al obtener comida: " . $mysqli->error . "</div>";
          }
      } else {
          echo "<div class='alert alert-danger'>Error al conectar a la base de datos.</div>";
      }
      ?>
    </div>

    <div class="mt-5">
      <h2>¿Qué te apetece para la cachimba?</h2>
      <?php
      if ($mysqli) {
          $result = $mysqli->query("SELECT * FROM cachimbas");
          if ($result) {
              echo "<table class='table table-hover'>";
              echo "<thead class='thead-dark'><tr><th>Cachimbas</th><th>Imagen</th><th>Añadir al carrito</th></tr></thead><tbody>";
              while ($row = $result->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>" . $row['nombre_cachimbas'] . "</td>";
                  echo "<td><img src='img/" . $row['foto_cachimbas'] . "' alt='" . $row['nombre_cachimbas'] . "' style='width: 50px; height: auto; cursor: pointer;' onclick='verImagenGrande(\"img/" . $row['foto_cachimbas'] . "\")'></td>";
                  echo "<td><button class='btn btn-primary' onclick='seleccionarCachimba(" . $row['id_cachimbas'] . ")'>Seleccionar Cachimba</button></td>";
                  echo "</tr>";
              }
              echo "</tbody></table>";
          } else {
              echo "<div class='alert alert-danger'>Error al obtener cachimbas: " . $mysqli->error . "</div>";
          }
      } else {
          echo "<div class='alert alert-danger'>Error al conectar a la base de datos.</div>";
      }
      ?>
    </div>

    <div class="mt-5" id="div-tabacos" style="display: none;">
      <h2>Elige los sabores de tabaco (Máximo 10)</h2>
      <?php
      if ($mysqli) {
          $result = $mysqli->query("SELECT * FROM tabacos");
          if ($result) {
              echo "<table class='table table-hover'>";
              echo "<thead class='thead-dark'><tr><th>Tabacos</th><th>Precio</th><th>Seleccionar</th></tr></thead><tbody>";
              while ($row = $result->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>" . $row['nombre_tabacos'] . "</td>";
                  echo "<td>" . $row['precio_tabacos'] . "€</td>";
                  echo "<td><input type='checkbox' class='form-check-input' id='tabaco_" . $row['id_tabacos'] . "'></td>";
                  echo "</tr>";
              }
              echo "</tbody></table>";
              echo "<button class='btn btn-primary' onclick='agregarCachimbaAlCarrito()'>Añadir Cachimba al carrito</button>";
              echo "<button class='btn btn-secondary' onclick='cancelarSeleccionCachimba()'>Cancelar</button>";
          } else {
              echo "<div class='alert alert-danger'>Error al obtener tabacos: " . $mysqli->error . "</div>";
          }
      } else {
          echo "<div class='alert alert-danger'>Error al conectar a la base de datos.</div>";
      }
      ?>
    </div>

    <!-- Carrito -->
    <div class="row mt-5">
      <div class="col-md-4">
        <h2>Total del Pedido</h2>
        <div id="totalPedido">
          <!-- El total se cargará aquí dinámicamente -->
        </div>
        <button class="btn btn-primary mt-3" onclick="descargarPDF()">Descargar Resumen en PDF</button>
      </div>
      <div class="col-md-8">
        <h2>Tu Carrito</h2>
        <div id="carrito">
          <!-- Los items del carrito se cargarán aquí dinámicamente -->
        </div>
        <button class="btn btn-danger mt-3" onclick="vaciarCarrito()">Vaciar Carrito</button>
      </div>
    </div>
  </div>

  <!-- Modal para ver la imagen en grande -->
  <div class="modal fade" id="imagenModal" tabindex="-1" aria-labelledby="imagenModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="imagenModalLabel">Imagen de Cachimba</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
          <img id="imagenGrande" src="" alt="Imagen de Cachimba" style="width: 100%; height: auto;">
        </div>
      </div>
    </div>
  </div>

  <!-- Modal para carrito vacío -->
  <div class="modal fade" id="carritoVacioModal" tabindex="-1" aria-labelledby="carritoVacioModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="carritoVacioModalLabel" style="color: black;">Carrito Vacío</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="color: black;">
          El carrito está vacío. Por favor, añade productos al carrito antes de proceder.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include 'includes/footer.php'; ?>
  <!-- Footer -->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
  <script>
    let selectedCachimbaId = null;
    const IVA = 0.21; // 21% de IVA

    function agregarAlCarrito(idProducto, tipo) {
        var cantidad = $('#cantidad_' + tipo + '_' + idProducto).val();
        $.ajax({
            url: 'agregar_carrito.php',
            type: 'POST',
            data: { id: idProducto, cantidad: cantidad, tipo: tipo },
            success: function(response) {
                if (response.status === 'success') {
                    actualizarVistaCarrito(response.data);
                } else {
                    alert(response.message);
                }
            },
            error: function(xhr, status, error) {
                console.error(error);
                alert('Ocurrió un error al agregar el producto al carrito.');
            }
        });
    }

    function eliminarDelCarrito(idProducto, tipo) {
        $.ajax({
            url: 'eliminar_del_carrito.php',
            type: 'POST',
            data: { id: idProducto, tipo: tipo },
            success: function(response) {
                if (response.status === 'success') {
                    actualizarVistaCarrito(response.data);
                } else {
                    alert(response.message);
                }
            },
            error: function(xhr, status, error) {
                console.error(error);
                alert('Ocurrió un error al eliminar el producto del carrito.');
            }
        });
    }

    function cambiarCantidad(idProducto, nuevaCantidad, tipo) {
        $.ajax({
            url: 'actualizar_carrito.php',
            type: 'POST',
            data: { id: idProducto, cantidad: nuevaCantidad, tipo: tipo },
            success: function(response) {
                if (response.status === 'success') {
                    actualizarVistaCarrito(response.data);
                } else {
                    alert(response.message);
                }
            },
            error: function(xhr, status, error) {
                console.error(error);
                alert('Ocurrió un error al actualizar la cantidad del producto.');
            }
        });
    }

    function vaciarCarrito() {
        $.ajax({
            url: 'vaciar_carrito.php',
            type: 'POST',
            success: function(response) {
                if (response.status === 'success') {
                    actualizarVistaCarrito(response.data);
                } else {
                    alert(response.message);
                }
            },
            error: function(xhr, status, error) {
                console.error(error);
                alert('Ocurrió un error al vaciar el carrito.');
            }
        });
    }

    function seleccionarCachimba(idCachimba) {
        selectedCachimbaId = idCachimba;
        $('#div-tabacos').show();
    }

    function agregarCachimbaAlCarrito() {
        let tabacosSeleccionados = [];
        let maxPrecioTabaco = 0;
        $('#div-tabacos input[type=checkbox]:checked').each(function() {
            let tabacoId = $(this).attr('id').split('_')[1];
            tabacosSeleccionados.push(tabacoId);
            let precioTabaco = parseFloat($(this).closest('tr').find('td:nth-child(2)').text().replace('€', ''));
            if (precioTabaco > maxPrecioTabaco) {
                maxPrecioTabaco = precioTabaco;
            }
        });

        if (tabacosSeleccionados.length > 0 && tabacosSeleccionados.length <= 10) {
            $.ajax({
                url: 'agregar_carrito.php',
                type: 'POST',
                data: { id: selectedCachimbaId, tipo: 'cachimba', tabacos: tabacosSeleccionados, precio: maxPrecioTabaco },
                success: function(response) {
                    if (response.status === 'success') {
                        actualizarVistaCarrito(response.data);
                        $('#div-tabacos').hide();
                        $('input[type=checkbox]').prop('checked', false);
                    } else {
                        alert(response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                    alert('Ocurrió un error al agregar la cachimba al carrito.');
                }
            });
        } else {
            alert('Por favor selecciona entre 1 y 10 sabores de tabaco.');
        }
    }

    function cancelarSeleccionCachimba() {
        $('#div-tabacos').hide();
        $('input[type=checkbox]').prop('checked', false);
        selectedCachimbaId = null;
    }

    function limitarSeleccion() {
        if ($('#div-tabacos input[type=checkbox]:checked').length > 10) {
            alert('Solo puedes seleccionar hasta 10 sabores de tabaco.');
            $(this).prop('checked', false);
        }
    }

    function actualizarVistaCarrito(carrito) {
        $('#carrito').empty();
        let total = 0;

        $.each(carrito, function(index, detalles) {
            let tabacosInfo = '';
            if (detalles.tipo === 'cachimba') {
                tabacosInfo = '<p><strong>Sabores de tabaco:</strong> ' + detalles.tabacos.map(t => t.nombre).join(', ') + '</p>';
            }
            let precio = parseFloat(detalles.precio);
            let itemTotal = precio * detalles.cantidad;
            total += itemTotal;

            $('#carrito').append('<div class="card mb-3"><div class="card-body"><h5 class="card-title">Producto: ' + detalles.nombre + '</h5>' + tabacosInfo + '<p class="card-text">Precio: ' + precio.toFixed(2) + '€</p><p class="card-text">Total por ' + detalles.cantidad + ': ' + itemTotal.toFixed(2) + '€</p><p class="card-text">Cantidad: <input type="number" class="form-control d-inline-block" value="' + detalles.cantidad + '" style="width: 80px;" onchange="cambiarCantidad(' + detalles.id + ', this.value, \'' + detalles.tipo + '\')"></p><button class="btn btn-danger" onclick="eliminarDelCarrito(' + detalles.id + ', \'' + detalles.tipo + '\')">Eliminar</button></div></div>');
        });

        let iva = total * IVA;
        let totalConIva = total + iva;

        $('#totalPedido').html('<p>Subtotal: ' + total.toFixed(2) + '€</p><p>IVA (21%): ' + iva.toFixed(2) + '€</p><p><strong>Total: ' + totalConIva.toFixed(2) + '€</strong></p>');
    }

    function descargarPDF() {
        $.ajax({
            url: 'generar_pdf.php',
            type: 'GET',
            success: function(response) {
                if (response.status === 'success') {
                    // Crear un enlace temporal y hacer clic en él para forzar la descarga
                    var link = document.createElement('a');
                    link.href = response.file;
                    link.download = response.file.split('/').pop();
                    document.body.appendChild(link);
                    link.click();
                    document.body.removeChild(link);
                } else {
                    var myModal = new bootstrap.Modal(document.getElementById('carritoVacioModal'), {
                        keyboard: false
                    });
                    myModal.show();
                }
            },
            error: function(xhr, status, error) {
                console.error(error);
                alert('Ocurrió un error al generar el PDF.');
            }
        });
    }
  </script>
</body>
</html>
