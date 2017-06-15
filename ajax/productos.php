<?php 

require_once "../modelos/productos.php";

$productos =new Productos();

$idProductos=isset($_POST["idProductos"])?limpiarCadena($_POST["idProductos"]):"";
$nombre=isset($_POST["nombre"])?limpiarCadena($_POST["nombre"]):"";
$peso=isset($_POST["peso"])?limpiarCadena($_POST["peso"]):"";
$descripcion=isset($_POST["descripcion"])?limpiarCadena($_POST["descripcion"]):"";

switch ($_GET["op"]) {
	case 'guardaryeditar':
		if (empty($idProductos)) {
			$respuesta=$productos->insertar($nombre,$peso,$descripcion);
			echo $respuesta ? "porducto registrado":"no se pudo ingresar";
		}else{
			$respuesta=$productos->editar($idProductos,$nombre,$peso,$descripcion);
			echo $respuesta ? "producto editado": "no se pudo editar";
		}
		break;
	case 'mostrar':
			$respuesta=$productos->mostrar($idProductos);
			echo json_encode($respuesta);
		break;
	case 'listar':
			$respuesta=$productos->listar();

			$data[]=Array();

			while ($registro=$respuesta->fetch_object()) {
				$data[]=array(
						"0"=>'<button class="btn btn-warning" onclick="mostrar('.$registro->idProductos.')"><i class="fa fa-pencil"></i></button>',
 						"1"=>$registro->nombre,
 						"2"=>$registro->peso,
 						"3"=>$registro->descripcion,
 					
					);			
			}
			$results=array(
					"sEcho"=>1, //Información para el datatables
 					"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 					"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 					"aaData"=>$data);
			echo json_encode($results);
				break;		
	
	
}

 ?>