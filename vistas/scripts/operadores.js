var tabla;

function init()
{
	mostrarform(false);
	listar();

}

function limpiar()
{
	$("#nombre").attr("");
	$("#cuit").attr("");
	$("#direccion").attr("");
	$("#ciudad").attr("");
	$("#tel").attr("");
	$("#observacion").attr("");
}

function mostrarform(flag)
{
	limpiar();
	if (flag) 
		{
			$("#listadoregistros").hide();
			$("#formularioregistros").show();
			$("#btnGuardar").prop("disabled",false);
			$("#btnAgregar").hide();
		} else 
		{
			$("#listadoregistros").show();
			$("#formularioregistros").hide();
			$("#btnagregar").show();
		}
}

function cancelarform()
{
	limpiar();
	mostrarform(false);
}

function listar()
{
	tabla=$('#tbllistado').dataTable({

		"aProcessing":true,
		"aServerSide":true,
		dom:'Bfrtip',
		buttons:[ 
					'copyHtml5',
					'excelHtml5',
					'csvHtml5',
					'pdf'
					],
		"ajax":
				{
					url:'../ajax/operadores.php?op=listar',
					type: "get",
					dataType: "json",
					error: function(e){
						console.log(e.responseText);
					}
				},
		"bDestroy": true,
		"iDisplayLength": 5,
		"order": [[0,"desc"]]		

					
	}).dataTable();
}

init();







