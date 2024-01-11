<?php
class ConexionBD
{
    private string $host = 'localhost';
    private string $usuario = 'root';
    private string $contrasena = '';
    private string $nombre_bd = 'tu_basededatos';

    public function obtenerConexion(): mysqli
    {
        $rutaBaseDatos = __DIR__ . '/resources/bbdd_cuestaenero';
        $conexion = new mysqli($this->host, $this->usuario, $this->contrasena, $this->nombre_bd);

        match (true) {
            $conexion->connect_error !== null => die('Error de conexión: ' . $conexion->connect_error),
            default => null,
        };

        return $conexion;
    }
}
