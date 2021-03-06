$(document).ready(function(){
  $('.btnEditarG').hide();
  limpia_formulario();
  obtener_registros();
  // =================== EVENTOS DE SELECCION DE CHECKBOX ===================
  $('html').on('click','#Referencia',function(){
    if($(this).val()!= 0){
      $(this).val(0);
    }
    else{
      $(this).val(1);
    }
  });
  $('html').on('click','#EquipoAuxiliar',function(){
    if($(this).val()!= 0){
      $(this).val(0);
    }
    else{
      $(this).val(1);
    }
  });
  $('html').on('click','#Trabajo',function(){
    if($(this).val()!= 0){
      $(this).val(0);
    }
    else{
      $(this).val(1);
    }
  });
  // =======================================================================
  // ============= EVENTO DE EL BOTON GUARDAR (MANDAR POST)=================
	$('html').on('click', '.btnGuardar', function(){
     //============= EN ESTE METODO SE CREA UN OBJETO CON TODOS LOS DATOS DEL FORMULARIO =======================================  
      var obj = new Object();
      obj.Descripcion = $.trim($('#Descripcion').val());
      obj.Referencia = $.trim($('#Referencia').val());
      obj.Trabajo = $.trim($('#Trabajo').val());
      obj.EquipoAuxiliar = $.trim($('#EquipoAuxiliar').val());
      obj.UltimaCalibracion = $.trim($('#UltimaCalibracion').val());
      obj.ProximaCalibracion = $.trim($('#ProximaCalibracion').val());
      obj.Status = $.trim($('#Status').val());
      obj.accion = $(this).attr("id").split('_')[1];
      obj.idPatron = $(this).attr("id").split('_')[2];
      // ============= SE VALIDA SI CIERTOS CAMPOS ESTAN LLENOS =======================
      if(obj.Descripcion != '' && obj.Descripcion != ''){
        guardar_patron(obj);
      }
      else{
        alerta_error("Oops...","Faltan llenar algunos campos");
      }
    });
  // =======================================================================
  // =========== EVENTO DE EDITAR EN LA TABLA ==============================
  $('html').on('click', '.btnEditar', function(){
      //SE SIMULA EL CLICK DEL TAB 
      $("#tab-0").get(0).click();
      //==================== SE MUESTRAN Y OCULTAN CIERTOS BOTONES =============================
      $('.btnEditarG').show();
      $('.btnGuardar').hide();
      //=======================================================================================
      // ================ SE ASIGNA ID A EDITAR ===============================================
      var id = $(this).attr('id').split('_')[1];
      $('.btnEditarG').attr('id',$(this).attr('id'));
      obtener_patron(id);
  });
  //========================================================================
  //============== EVENTO DEL BOTON DE EDITAR Y GUARDAR =====================
   $('html').on('click', '.btnEditarG', function(){
    //============= EN ESTE METODO SE CREA UN OBJETO CON TODOS LOS DATOS DEL FORMULARIO =======================================  
    var obj = new Object();
    obj.Descripcion = $.trim($('#Descripcion').val());
    obj.Referencia = $.trim($('#Referencia').val());
    obj.Trabajo = $.trim($('#Trabajo').val());
    obj.EquipoAuxiliar = $.trim($('#EquipoAuxiliar').val());
    obj.UltimaCalibracion = $.trim($('#UltimaCalibracion').val());
    obj.ProximaCalibracion = $.trim($('#ProximaCalibracion').val());
    obj.Status = $.trim($('#Status').val());
    obj.accion = $(this).attr("id").split('_')[0];
    obj.idPatron = $(this).attr("id").split('_')[1];
    if(obj.Descripcion != '' && obj.Descripcion != ''){
      guardar_patron(obj);
    }
    else{
      alerta_error("Oops...","Faltan llenar algunos campos");
    }
   });
   //=======================================================================
});
// =================== METODO PARA EDITAR Y GUARDAR LAS EMPRESAS ============================
function guardar_patron(obj){
    // -------------------CAMBIAR FORMATO DE FECHA
    fecha=obj.UltimaCalibracion;
    fecha=fecha.split('/');
    obj.UltimaCalibracion=fecha[2]+'-'+fecha[0]+'-'+fecha[1];
    //-----------------------------------
    fecha1=obj.ProximaCalibracion;
    fecha1=fecha1.split('/');
    obj.ProximaCalibracion=fecha1[2]+'-'+fecha1[0]+'-'+fecha1[1];
    //---------------------------------------
   var opc = "guardar_patron";
   alert(obj.Status);
   alert(obj.UltimaCalibracion);
   alert(obj.ProximaCalibracion);
     alert(obj.EquipoAuxiliar);
   alert(obj.accion);
  $.post("dist/fw/equiposyPatrones.php",{'opc':opc, 'obj':JSON.stringify(obj)},function(data){
      if(data){
          alerta("¡Guardado!", "El patrón de guardo correctamente, ¿Desea seguir en 'Equipos y Patrones'", "success");
          obtener_registros();
      }else{
          alerta_error("¡Error!","Error al guardar los datos");
      }
  },'json');
}
// ========================= METODO PÁRA OBTENER UN REGISTRO PARA EDITAR ======================
function obtener_patron(id){
  var opc = "obtener_patron";
  $('.line-scale-pulse-out').show();
  $.post("dist/fw/equiposyPatrones.php",{'opc':opc, 'id':id},function(data){
      if(data){
        limpia_formulario()
        $('#Descripcion').val(data.Descripcion);
        $('#Status').val(data.Status);
        $('#UltimaCalibracion').val(data.UltimaCalibracion);
        $('#ProximaCalibracion').val(data.ProximaCalibracion);
        if(data.Referencia==1){
          $('#Referencia').val(1);
          $("#Referencia").attr('checked',true);
        }
        if(data.Trabajo==1){
          $('#Trabajo').val(1);
          $("#Trabajo").attr('checked',true);
        }
        if(data.EquipoAuxiliar==1){
          $('#EquipoAuxiliar').val(1);
          $("#EquipoAuxiliar").attr('checked',true);
        }
       
      }
      else
      {
        alerta_error("Error", "Error al recibir los datos");
      }
      $('.line-scale-pulse-out').hide();
  },'json');
}
// ============================================================================================
function obtener_registros(){
    var opc = "obtener_registros";
    $('.line-scale-pulse-out').show();
    regenerar_tabla();
    $.post("dist/fw/equiposyPatrones.php",{opc:opc},function(data){
        if(data){
            var html = '';
            for (var i = 0; i < data.length; i++){
                html += '<tr class="edita_error" id="error_' + $.trim(data[i].idPatron) + '">';
                html += '<td>' + $.trim(data[i].Descripcion) + '</td>';
                html += '<td>' + $.trim(data[i].Status) + '</td>';
                html += '<td>' + data[i].UltimaCalibracion + '</td>';
                html += '<td>' + data[i].ProximaCalibracion + '</td>';
                html += '<td class="btnEditar" id="edit_'+data[i].idPatron+'"><span class="font-icon-wrapper lnr-pencil" ></span></td>';
                html += '</tr>';                        
            }
            $('#table_registros tbody').html(html);
            $('#table_registros').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true
            });
        }
        $('.line-scale-pulse-out').hide();
    },'json');
}
    
function regenerar_tabla(){
    $('#div_registros').html("");
    var html = "";
    html += '<table id="table_registros" class="table table-bordered table-striped dataTable">';
    html += '<thead>';
    html += '<tr>';
    html += '<th>Descripcion</th>';
    html += '<th>Status</th>';
    html += '<th>Ultima Calibracion</th>';
    html += '<th>Proxima Calibracion</th>';
    html += '<th>Editar</th>';
    html += '</tr>';
    html += '</thead>';
    html += '<tbody>';
    html += '</tbody>';
    html += '</table>';
    $('#div_registros').html(html);
}

function limpia_formulario(){
    $("#Descripcion").val("");
	$("#Status").val("");
	$("#Referencia").removeAttr("checked");
	$("#Trabajo").removeAttr("checked");
	$("#EquipoAuxiliar").removeAttr("checked");
	
}
	function alerta(titulo, mensaje, icono){
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
      })
      
      swalWithBootstrapButtons.fire({
        title: titulo,
        text: mensaje,
        icon: icono,
        showCancelButton: true,
        confirmButtonText: 'Aceptar',
        cancelButtonText: 'Salir',
        reverseButtons: true
      }).then((result) => {
        if (result.value) {
          location.reload();
        } else if (
          result.dismiss === Swal.DismissReason.cancel
        ) {
          window.location="http://localhost:8080/dashboard/SAM/index.php";
        }
      })
  }
  
  function alerta_error(titulo, texto){
    Swal.fire({
      icon: 'error',
      title: titulo,
      text: texto
      // footer: '<a href>Why do I have this issue?</a>'
    })
  }
