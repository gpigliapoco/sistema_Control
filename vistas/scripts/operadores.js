var tabla;

function init()
{
	mostrarform(false);
	listar();
	
	$("#formulario").on("submit",function(e){
		guardaryeditar(e);
	})

}

function limpiar()
{
	$("#nombre").val("");
	$("#cuit").val("");
	$("#direccion").val("");
	$("#ciudad").val("");
	$("#tel").val("");
	$("#observacion").val("");
	$("#idOperadores").val("");

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
	tabla=$('#tbllistado').dataTable(
	{
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: 'Bfrtip',//Definimos los elementos del control de tabla
	    buttons: [		          
		            'copyHtml5',
		            'excelHtml5',
		            'csvHtml5',
		            'pdf'
		        ],
		"ajax":
				{
					url: '../ajax/operadores.php?op=listar',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"bDestroy": true,
		"iDisplayLength": 8,//Paginación
	    "order": [[ 0, "desc" ]]//Ordenar (columna,orden)
	}).DataTable();
}

function guardaryeditar(e)
{
	e.preventDefault();
	$("#btnGuardar").prop("disabled",true);
	var formData=new FormData($("#formulario")[0]);

	$.ajax({
		url: "../ajax/operadores.php?op=guardaryeditar",
		type: "post",
		data: formData,
		contentType:false,
		processData:false,

		success: function(datos)
		{
			bootbox.alert(datos);
			mostrarform(false);
			tabla.ajax.reload();
		}

	});

	limpiar();
}
function mostrar(idOperadores)
{
	$.post("../ajax/operadores.php?op=mostrar",{idOperadores : idOperadores},function(data,status)
	{
		data = JSON.parse(data);
		mostrarform(true);

		$("#nombre").val(data.nombre);
		$("#cuit").val(data.cuit);
		$("#direccion").val(data.direccion);
		$("#ciudad").val(data.ciudad);
		$("#provincia").val(data.provincia);
		$("#provincia").selectpicker('refresh');
		$("#tel").val(data.tel);
		$("#observacion").val(data.observacion);
		$("idOperadores").val(data.idOperadores);

	})
}

init();







