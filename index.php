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
    <div class="row">
        <!-- Contenido principal -->
        <article>
            <h2 class="text-center mt-4">Bienvenido a la Página de Inicio</h2>
            <p class="text-center">Web libre con php y docker</p>
        </article>
    </div>
</main>

<?php include('includes/logic-form.php'); ?>

<h1>Comentarios</h1>

<!-- Formulario para ingresar comentarios -->
<form action="" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="comentario">Comentario:</label>
    <textarea id="comentario" name="comentario" required></textarea>

    <button type="submit">Enviar Comentario</button>
</form>

<!-- Sección para mostrar comentarios -->
<div>
    <h2>Comentarios Recientes:</h2>
    <?php
    foreach ($comentarios as $comentario) {
        echo "<p>{$comentario['nombre']}: {$comentario['comentario']}</p>";
    }
    ?>
</div>

<!-- Incluir más vistas según sea necesario -->
<!-- include 'otra_vista.php'; -->



<!-- Footer que incluye desde <footer> hasta </body> y </html> -->
<?php include('includes/footer.php'); ?>

<!-- Cerrar la conexión al final del script -->
<?php $conexion?->close(); ?>