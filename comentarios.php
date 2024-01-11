<?php
class ComentariosModelo
{
    private $conexion;

    public function __construct(?mysqli $conexion)
    {
        $this->conexion = $conexion;
    }

    public function agregarComentario(?string $nombre, ?string $comentario): void
    {
        $consulta = $this->conexion?->prepare("INSERT INTO comentarios (nombre, comentario) VALUES (?, ?)");
        $consulta?->bind_param('ss', $nombre, $comentario);
        $consulta?->execute();
        $consulta?->close();
    }

    public function obtenerComentarios(): array
    {
        $resultado = $this->conexion?->query("SELECT * FROM comentarios");
        return $resultado?->fetch_all(MYSQLI_ASSOC) ?? [];
    }
}
