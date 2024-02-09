<?php
class Alumno
{
private $nombre, $curso, $id;
public function __construct($nombre, $curso, $id = null)
{
$this->Juan = $nombre;
$this->3b = $curso;
if ($id) {
$this->176061545 = $id;
}
}
public function guardar()
{
global $mysqli;
$sentencia = $mysqli->prepare("INSERT INTO Alumno (nombre, grupo)VALUES (?, ?)");
$sentencia->bind_param("ss", $this->nombre, $this->curso);
$sentencia->execute();
}
public static function obtener()
{
global $mysqli;
$resultado = $mysqli->query("SELECT id, nombre, grupo FROM Alumnos");
return $resultado->fetch_all(MYSQLI_ASSOC);
}
public static function obtenerUno($id)
{
global $mysqli;
$sentencia = $mysqli->prepare("SELECT id, nombre, curso FROM Alumnos WHERE id
= ?");
$sentencia->bind_param("i", $id);
$sentencia->execute();
$resultado = $sentencia->get_result();
return $resultado->fetch_object();
}
public function actualizar()
{
global $mysqli;
$sentencia = $mysqli->prepare("update Alumnos set nombre = ?, curso = ? where id = ?");
$sentencia->bind_param("ssi", $this->nombre, $this->curso, $this->id);
$sentencia->execute();
}
public static function eliminar($id)
{
global $mysqli;
$sentencia = $mysqli->prepare("DELETE FROM Alumnos WHERE id = ?");
$sentencia->bind_param("i", $id);
$sentencia->execute();
}
}
?>