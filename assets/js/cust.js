function loadG(){
    $.ajax({
    type  : 'post',
    url   : 'proc/cargar_galeria.php',
    success: function (res) {
      $("#gallery").fadeOut('slow');
        $("#gallery").html(res).fadeIn('slow');
      var num = $("#cuantos").val();
		for(var x=0; x<=num; x++){
			baguetteBox.run('.gallery'+x, { animation: 'slideIn'});	
		}
    }
  });
}

function cargar_pag(id, act){
    $.ajax({
    type  : 'post',
    url   : 'proc/cargar_pag.php',
    data  : {
              'data': id
            },
    success: function (res) {
      $("#pag").fadeOut('slow').html(res).fadeIn('slow');
        $("#pagi"+act).addClass("actual disabled").attr("disabled");
    }
  });
}

  function cargarGaleria(id, act) {
    $.ajax({
    type  : 'post',
    url   : 'proc/cargar_proyectos.php',
    data  : {
              'data': id,
             'act': act
            },
    success: function (res) {
        cargar_pag(id, act);
      $("#gallery").fadeOut('slow').html(res).fadeIn('slow');
      var num = $("#cuantos").val();
		for(var x=0; x<=num; x++){
			baguetteBox.run('.gallery'+x, { animation: 'slideIn'});	
		}
        
        $(".categoria").removeClass("actcat");
        if(id  == "*"){
            $("#todos").addClass("actcat");
        }else{
            var id_cl = "#"+id;
            $(id_cl).addClass("actcat");
        }
    }
  });
}



function del(id_ima, img){
    $("#id_img").val(id_ima);
    $("#img_rut").val(img);
    $("#img_prev").attr("src", "../"+img);
     $("#delete").modal("show");
}
function mod(id_ima, img){
    $("#id_img2").val(id_ima);
    $("#img_rut2").val(img);
     $("#modificar").modal("show");
}

function list(id, cont){
    $("#id_cat").val(id);
    $("#cat").val(cont);
    $("#del").attr("href", "procedimientos/categories.php?opt=2&id_cat="+id);
     $("#lista").modal("show");
}

function cuser(){
    $("#user").modal("hide");
    $("#causu").modal("show");
}

function cpass(){
    $("#user").modal("hide");
    $("#caps").modal("show");
}

function ruser(){
    $("#user").modal("hide");
    $("#nuseri").modal("show");
}
