<?php 

require "../config/conexion.php";

Class Productos
{
	public function __construct()
	{

	}

	public function insertar($nombre,$peso,$descripcion)
	{
		$sql="INSERT into productos (nombre,peso,descripcion) values ('$nombre','$peso','$descripcion') ";
		return ejecutarConsulta($sql);
	}

	public function editar($idProductos,$nombre,$peso,$descripcion)
	{
		$sql="UPDATE productos set nombre='$nombre',peso='$peso',descripcion='$descripcion' where idProductos='$idProductos' ";
		return ejecutarConsulta($sql);
	}
	public function mostrar($idProductos)
	{
		$sql="SELECT * from productos where idProductos='$idProductos' ";
		return ejecutarConsultaSimpleFila($sql);

	}

	public function listar()
	{
		$sql="SELECT * from productos";
		return ejecutarConsulta($sql);
	}


}





 ?>