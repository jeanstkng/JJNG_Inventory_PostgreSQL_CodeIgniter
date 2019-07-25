$.post(baseurl+"cegresos/getProductos", //se obtienen datos del controlador
	function(data){
		var obj = JSON.parse(data);
		var estilo = "background: transparent;border:0px;outline: none;text-align:center;width: 100%";
		$.each(obj, function(i, item){ //recorre los productos consultados y construye la tabla
			$('#tblProductos tbody').append(
				'<tr class="filaProductos">'+
					'<td><div id="'+item.id+'" style="'+estilo+'" name="'+item.nombreprod+'" class="nombreprod">'+item.nombreprod+'</div></td>'+
					'<td>'+
					'<div class="categ" id="'+item.idcat+'">'+item.nombrecat+'</div>'+                
					'</td>'+
					'<td><input type="number" value="'+item.cantidad+'" style="'+estilo+'" class="cant"></td>'+
					'<td><div style="'+estilo+'" id="'+item.precio+'"class="precio">'+item.precio+'</div></td>'+
					'<td>'+          
                    '<div class="prov" id="'+item.idprov+'">'+item.nombre+'</div>'+
                	'</td>'+
				'</tr>'
				);
		});

$.post("http://localhost/proyectoCI/cegresos/getProveedor", //se obtienen datos del controlador
  {
    "sitreg" : 1
  },
  function (data) {
    var c = JSON.parse(data);
    $.each(c,function(i,item){
      $('#cboProveedorM').append('<option name="'+item.nombre+'" value="'+item.idprov+'">'+item.nombre+'</option>');
    }); 
  }); //Obtener proveedores en lista para la tabla.

$.post("http://localhost/proyectoCI/cegresos/getCategoria",
{
"sitregcat" : 1
},
function (data) {
var c = JSON.parse(data);
$.each(c,function(i,item){
	$('#cboCategoriaM').append('<option name="'+item.nombrecat+'" value="'+item.idcat+'">'+item.nombrecat+'</option>');
});
});
  

$('input[type=number]').focus(function(){
	$(this).select();
}); //Seleccionar todo el input(valores) al hacer clic

var j = 0;
$('input[type=number]').each(function(){
		if ($(this).val()>obj[j].cantidad) {
			console.log('Valor no valido');
			$(this).focus();
			$(this).select();
		}
		j++;
	});

$('#btnGuardarProd').click(function(){
	var i = 0;
	$('#tblProductos .filaProductos').each(function(){
		var id = $('.nombreprod:eq('+i+')').attr('id');
		var nombreprod = $('.nombreprod:eq('+i+')').attr('name');;
		var categ = $('.categ:eq('+i+')').attr('id');
		var cant = $('.cant:eq('+i+')').val();
		var canteg = obj[i].cantidad - $('.cant:eq('+i+')').val();
		var precio = $('.precio:eq('+i+')').attr('id');
		var prov = $('.prov:eq('+i+')').attr('id');

		if(cant > obj[i].cantidad){
			alert('Valor no valido para: '+obj[i].nombreprod);
			$(this).focus();
			$(this).select();
		}
		else{
		$.post(baseurl+"cegresos/actualizarProducto", //se envian los datos al controlador
			{
				id: id,
				nombreprod:nombreprod,
				categ:categ,
				cant:cant,
				precio:precio,
				prov:prov,
				canteg:canteg
			});
		}
		i++;

	});
	alert('Se guardo satisfactoriamente');
	})//Funcion para guardar producto basado en lo que se modifico en la tabla

});