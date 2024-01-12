<?php
include 'modelo.php';

// Crear una instancia del modelo para la conexión a la base de datos
$conexionBD = new ConexionBD();
$conexion = $conexionBD?->obtenerConexion();

// Incluir el sistema de comentarios
include 'comentarios.php';
$comentariosModelo = new ComentariosModelo($conexion); ?>


<!-- Header que incluye desde el DOCTYPE hasta la etiqueta <header> -->
<?php include('includes/header.php'); ?>

<main class="container-fluid">


    <?php include('includes/logic-form.php'); ?>


    <!-- Formulario para ingresar comentarios -->
    <div class="mt-3 container border mb-3 rounded-3 bg-dark">
        <h3 class="text-center text-white">¡Déjame un comentario!</h3>
        <form action="" method="post" class="row g-3 px-5 ">
            <div class="col-12 pt-3">
                <label for="nombre" class="visually-hidden">Nombre:</label>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
            </div>

            <div class="col-12">
                <label for="comentario" class="visually-hidden">Tu mensaje:</label>
                <textarea class="form-control" name="comentario" placeholder="Tu mensaje" required></textarea>
            </div>

            <div class="col-12 pb-3 text-center">
                <button type="submit" class="btn btn-outline-warning btn-custom">Enviar</button>
            </div>
        </form>
    </div>

    <!-- Sección para mostrar comentarios -->
    <div class="pt-2 pb-2 mb-3 container border rounded-3 bg-dark">
        <h3 class="text-center text-white">Tablón de mensajes</h3>
        <?php foreach ($comentarios as $comentario) : ?>
            <div class="card mb-1">
                <div class="card-body d-flex align-items-center justify-content-start">

                    <div class="custom-card-title me-2">
                        <span class="badge text-bg-info">
                            <?= htmlspecialchars($comentario['nombre']) ?>:
                        </span>
                    </div>

                    <p class="card-text custom-card-text d-flex align-items-center">
                        <?= htmlspecialchars($comentario['comentario']) ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</main>

<!-- Footer que incluye desde <footer> hasta </body> y </html> -->
<?php include('includes/footer.php'); ?>

<!-- Cerrar la conexión al final del script -->
<?php $conexion?->close(); ?>