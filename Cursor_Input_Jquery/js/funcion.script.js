$(document).ready(function() {

	$( "input" ).on( "keydown", function( event ) {
  		switch(event.which){
  			case 37: //IZQUIERDA
  				var id = parseInt($(this).data("id"));
		  		var cb = parseInt($(this).attr('tabindex'));
		  		var len = String(cb);
		  		var num = Math.pow(10,len.length - 2);

  			  	$(':input[tabindex=\'' + ( num + id  ) + '\']').focus();
  				$(':input[tabindex=\'' + ( num + id  ) + '\']').select();

  				console.log( "Manejador de tabindex=" + cb + " retrocede a " +  (num + id) +"." ); 

        		return false;
  			break;
  			case 39: //DERECHA
  				var id = parseInt($(this).data("id"));
		  		var cb = parseInt($(this).attr('tabindex'));
		  		var len = String(cb);
		  		var num = Math.pow(10, len.length);

  			  	$(':input[tabindex=\'' + ( num + id ) + '\']').focus();
  				$(':input[tabindex=\'' + ( num + id ) + '\']').select();

  				console.log( "manejador de tabindex=" + cb + " avanza a "+ ( num + id ) + "." ); 
  				
        		return false;
  			break;
  			case 38: // ARRIBA
  				cb = parseInt($(this).attr('tabindex'));

  			  	$(':input[tabindex=\'' + (cb - 1) + '\']').focus();
  				$(':input[tabindex=\'' + (cb - 1) + '\']').select();

  				console.log( "Manejador de tabindex=" + cb + " sube a " + ( cb - 1 ) + "." ); 
  				
        		return false;
  			break;
  			case 40: // ABAJO
  				cb = parseInt($(this).attr('tabindex'));

  			  	$(':input[tabindex=\'' + (cb + 1) + '\']').focus();
  				$(':input[tabindex=\'' + (cb + 1) + '\']').select();

  				console.log( "Manejador de tabindex=" + cb + " baja a " + ( cb + 1 ) + "." ); 

        		return false;
  			break;
		}

	});	

	

})