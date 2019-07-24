console.log('cargo');
$.post("http://localhost/proyectoCI/cingresos/getProveedor",
  {
    "sitreg" : 1
  },
  function (data) {
    var c = JSON.parse(data);
    $.each(c,function(i,item){
      $('#cboProveedor').append('<option value="'+item.id+'">'+item.nombre+'</option>');
    }); 
  });
