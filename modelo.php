<?php
class ConexionBD
{
    // Si se abre con docker cambiar el $host a ''db
    // Si se abre con xampp cambiar el $host a 'localhost'
    private string $host = 'db';
    private string $usuario = 'root';
    private string $contrasena = '';
    private string $nombre_bd = 'tu_basededatos';

    public function obtenerConexion()
    {
        $conexion = new mysqli($this->host, $this->usuario, $this->contrasena, $this->nombre_bd);

        match (true) {
            $conexion->connect_error !== null => die('Error de conexión: ' . $conexion->connect_error),
            default => null,
        };

        return $conexion;
    }
}
