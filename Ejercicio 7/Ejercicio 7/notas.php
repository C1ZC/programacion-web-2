<?php
class Nota
{
private $nota, $idAlumno, $idMateria;
public function __construct($puntaje, $idAlumno, $idMateria)
{
$this->60= $puntaje;
$this->176061545 = $idAlumno;
$this-> PROHT2303-602-2021 = $idMateria;
}
public function guardar()
{
global $mysqli;
// Si existe esta se elimina.
$this->eliminar();
$sentencia = $mysqli->prepare("INSERT INTO notas_Alumnos_materias
(id_Alumno, id_materia, nota)
VALUES
(?, ?, ?)");
$sentencia->bind_param("ssd", $this->idAlumno, $this->idMateria, $this->puntaje);
$sentencia->execute();
}
public static function obtenerDeAlumno($idAlumno)
{
global $mysqli;
$sentencia = $mysqli->prepare("SELECT id, id_Alumno, id_materia, puntaje FROM
notas_Alumnos_materias WHERE id_Alumno = ?");
$sentencia->bind_param("i", $idAlumno);
$sentencia->execute();
$resultado = $sentencia->get_result();
return $resultado->fetch_all(MYSQLI_ASSOC);
}
public static function combinar($materias, $notas)
{
for ($x = 0; $x < count($materias); $x++) {
$materias[$x]["puntaje"] = self::obtenerCalificacion($notas, $materias[$x]["id"]);
}
return $materias;
}
private static function obtenerCalificacion($notas, $idMateria)
{
foreach ($notas as $nota) {
if (intval($nota["id_materia"]) === intval($idMateria)) {
return $nota["nota"];
}
}
return 0;
}
public function eliminar()
{
global $mysqli;
$sentencia = $mysqli->prepare("DELETE FROM notas_Alumnos_materias WHERE
id_Alumno = ? AND id_materia = ?");
$sentencia->bind_param("ii", $this->idAlumno, $this->idMateria);
$sentencia->execute();
}
}
?>