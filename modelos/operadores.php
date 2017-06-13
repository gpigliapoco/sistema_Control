<?php 

require "../config/conexion.php";

Class Operadores
{

	public function __construct()
	{

	}

	public function insertar($nombre,$direccion,$cuit,$ciudad,$provincia,$tel,$observacion)
	{
		$sql="INSERT into operadores (nombre,direccion,cuit,ciudad,provincia,tel,observacion) values ('$nombre','$direccion','$cuit','$ciudad','$provincia','$tel','$observacion') ";
		return ejecutarConsulta($sql);
	}

	public function editar($idOperadores,$nombre,$direccion,$cuit,$ciudad,$provincia,$tel,$observacion)
	{
		$sql = "UPDATE operadores set nombre='$nombre',direccion='$direccion',cuit='$cuit',ciudad='$ciudad',provincia='$provincia',tel='$tel',observacion='$observacion' where idOperadores='$idOperadores' ";
		return ejecutarConsulta($sql);
	}

	public function eliminar($idOperadores)
	{
		$sql="DELETE from operadores where idOperadores='$idOperadores' ";
		return ejecutarConsulta($sql);
	}

	public function mostrar($idOperadores)
	{
		$sql="SELECT * from operadores where idOperadores='$idOperadores' ";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function listar()
	{
		$sql= "SELECT * from operadores";
		return ejecutarConsulta($sql);
	}


}


 ?>