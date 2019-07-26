/*------------------------------------------*/
/*   DATATABLE 									  */
/*------------------------------------------*/
$('.datatable').DataTable({
	iDisplayLength: 50,
	//buttons: ['excelHtml5','pdfHtml5'],
	//buttons: ['excelHtml5'],
	//dom: "<f> t <'row' <'col-lg-4 col-lg-offset-8'p> >",
	//dom: "<f> t",
	//dom: myDom, //quitamos el select de cantidad
	//sPaginationType: "full_numbers",
	//ordering: 'nombre',
	//"order":[[1,"asc"]],
	oLanguage: {
		sInfoEmpty: "No hay registros",
		sSearch: "Buscar:",
		sLengthMenu: "Mostrando _MENU_ compras",
		//sInfo: "Mostrando _START_ hasta _END_ de _TOTAL_ entradas",
		sInfo: "_TOTAL_ registros",
		sZeroRecords:  "No se encontraron registros",
		oPaginate: {"sFirst":"Inicio","sPrevious":"Ant.","sNext":"Sig.","sLast":"Fin"}
	}
});


/*------------------------------------------*/
/*   ADMIN 	   									  */
/*------------------------------------------*/

function read_image(file,imgId){
    var img = $("#"+imgId);
    if (file.files && file.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            img.css({"background-image":"url("+e.target.result+")"}).show();
            img.find("span").remove();
        };
        reader.readAsDataURL(file.files[0]);
    }
}