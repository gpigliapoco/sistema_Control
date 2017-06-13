<?php 

require_once "../modelos/operadores.php";

$operadores = new Operadores();

$idOperadores=isset($_POST["idOperadores"])?limpiarCadena($_POST["idOperadores"]):"";
$nombre=isset($_POST["nombre"])?limpiarCadena($_POST["nombre"]):"";
$cuit=isset($_POST["cuit"])?limpiarCadena($_POST["cuit"]):"";
$direccion=isset($_POST["direccion"])?limpiarCadena($_POST["direccion"]):"";
$ciudad=isset($_POST["ciudad"])?limpiarCadena($_POST["ciudad"]):"";
$provincia=isset($_POST["provincia"])?limpiarCadena($_POST["provincia"]):"";
$tel=isset($_POST["tel"])?limpiarCadena($_POST["tel"]):"";
$observacion=isset($_POST["observacion"])?limpiarCadena($_POST["observacion"]):"";

switch ($_GET["op"]) {
	case 'guardaryeditar':
		if (empty($idOperadores)) {
			$respuesta=$operadores->insertar($nombre,$direccion,$cuit,$ciudad,$provincia,$tel,$observacion);
			echo $respuesta ? "Operador registrado con exito":"NO se pudo registrar Operador";
		}
		else{
			$respuesta=$operadores->editar($idOperadores,$nombre,$direccion,$cuit,$ciudad,$provincia,$tel,$observacion);
			echo $respuesta ? "Operador actualizado con exito":"no se pudo Actualizar";
		}
		break;
	case 'eliminar':
			$respuesta=$operadores->eliminar($idOperadores);
			echo $respuesta ? "Operador eliminado con exito ":"no se puedo eliminar" ;
		break;

	case 'mostrar':
		    $respuesta=$operadores->mostrar($idOperadores);
		    echo json_encode($respuesta);
		break;

	case 'listar':
			$respuesta=$operadores->listar();

			$data[]=Array();

			while ($registro=$respuesta->fetch_object()) {
				$data[]=array(
					"o"=>'<button class="btn btn-warning" onclick="mostrar('.$registro->idOperadores.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="eliminar('.$registro->idOperadores.')"><i class="fa fa-trash"></i></button>',
 					"1"=>$registro->nombre,
 					"2"=>$registro->cuit,
 					"3"=>$registro->direccion,
 					"4"=>$registro->ciudad,
 					"5"=>$registro->provincia

					);	
			}
			$results= array(
				"sEcho"=>1,
				"iTotalRecords"=>count($data),
				"iTotalDisplayRecords"=>count($data),
				"aaData"=>$data
				);
			echo json_encode($results);
			break;	

	
}



 ?>