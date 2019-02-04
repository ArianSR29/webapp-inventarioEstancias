$(document).ready(function () {
	$('#consumibles-table').DataTable({
		"language": {
			"lengthMenu": "Mostrar _MENU_ registros por página",
			"zeroRecords": "No se encontraron resultados en la búsqueda",
			"searchPlaceholder": "Buscar registro",
			"info": "Monstrando registros de _START_ al _END_ de un total de _TOTAL_ registros",
			"infoEmpty": "No existen registros",
			"infoFiltered": "(Filtrado de un total de _MAX_ registros)",
			"search": "Buscar",
			"paginate": {
				"first": "Primero",
				"last": "Último",
				"next": "Siguiente",
				"previous": "Anterior"
			},
		}
    });
});
