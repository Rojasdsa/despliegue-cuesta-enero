<?php
// Lógica para manejar el formulario de comentarios, si es necesario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = htmlspecialchars($_POST['nombre']) ?? '';
    $comentario = htmlspecialchars($_POST['comentario']) ?? '';

    $comentariosModelo?->agregarComentario($nombre, $comentario);

    // Redirige para evitar reenviar el formulario al recargar
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

// Obtener y mostrar comentarios
$comentarios = $comentariosModelo?->obtenerComentarios();
