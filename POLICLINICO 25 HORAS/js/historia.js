var historial_script = function(){
	var ha = function(){
		var postData = $('.new-form').serialize();
	    $.ajax({
	        type:'POST',
	        url:'nucleo/modulo/historialNew.php',
	        data: postData,
	        success: function(response)
	        {
	        	console.log(response);
	            if(response != 0){
	                UImensajeToastr.init('HISTORIAL CLINICO AGREGADO CORRECTAMENTE','','success','toast-top-center',8000,false);
	            	cantidad_historial.init();
	            } else {
	                UImensajeToastr.init('NO SE PUDO INSERTAR EL HISTORIAL CLINICO.','','error','toast-top-center',8000,false);
	            }
	        }
	    })
	     event.preventDefault();
	},
	hb = function(){
		var postData = $('.update-form').serialize();
	    $.ajax({
	        type:'POST',
	        url:'nucleo/modulo/historialUpdate.php',
	        data: postData,
	        success: function(response)
	        {
	        	console.log(response);
	            if(response != 0){
	                UImensajeToastr.init('HISTORIAL CLINICO ACTUALIZADO CORRECTAMENTE','','success','toast-top-center',8000,false);
	            	$('#actualizarHistorial').modal('hide');
	            	verTablaHistorial.init();
	            } else {
	                UImensajeToastr.init('NO SE PUDO ACTUALIZAR EL HISTORIAL CLINICO.','','error','toast-top-center',8000,false);
	           		$('#actualizarHistorial').modal('show');
	            }
	        }
	    })
	     event.preventDefault();
	},
	hc = function(id){
		var parametro = {id:id}
		$.ajax({
	        type:'POST',
	        url:'nucleo/modulo/historialDelete.php',
	        data: parametro,
	        success: function(response)
	        {
	            if(response != 0){
	                UImensajeToastr.init('HISTORIAL CLINICO ELIMINADO CORRECTAMENTE','','success','toast-top-center',8000,false);
	            	cantidad_historial.init();
	            	verTablaHistorial.init();
	            } else {
	                UImensajeToastr.init('NO SE PUDO ELIMINAR EL HISTORIAL CLINICO.','','error','toast-top-center',8000,false);
	            }
	        }
	    })
	    event.preventDefault();
	},
	hd = function(id){
		$('#actualizarHistorial').modal('show');
		var parametro = {id:id}
		$.ajax({
	      	type: 'POST',
	      	url: "nucleo/modulo/modalHistorial.php",
	      	data: parametro,
	    }).done(function(data){
	      	$('div#modalActualizarHistorial').empty();
	      	$('div#modalActualizarHistorial').append(data);
	    })
	},
	he = function(){
		$('div#tablaHistorial').empty();
        $('div#tablaHistorial').append();
        $.ajax({
          type: 'POST',
          url: "nucleo/modulo/historialTabla.php",
        }).done(function(data){
          $('div#tablaHistorial').empty();
          $('div#tablaHistorial').append(data);
        });
	},
	hj = function(){
        $.ajax({
          url: "nucleo/modulo/User.php",
          type: "post",
        }).done(function(data){
          $('span#cantidad').text(data);
        })
  	}
	return{
		new: function(){
			ha()
		},
		update: function(){
			hb()
		},
		delete: function(id){
			hc(id)
		},
		verModalHistorial: function(id){
			hd(id)
		},
		verTablaHistorial: function(){
			he()
		},
		verCantidadHistorial: function(){
			hj()
		}
	}
}();

$(document).ready(function(){
	historial_script.verTablaHistorial();
	historial_script.verCantidadHistorial();
})