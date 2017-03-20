var UImensajeToastr = function(){
  return {
      //main function to initiate the module
      init: function (mensaje,titulo,tipo,direccion,tiempo,barra) {

          toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": barra,
                "positionClass": direccion,
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "5000",
                "hideDuration": "5000",
                "timeOut": tiempo,
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
              }

          toastr[tipo](mensaje, titulo);

      }
    };

}();

var plugins_sistema = function(){
    var a = function(){
        $('.tabla').DataTable({
            "language": {
            "infoEmpty": "NO EXISTEN RESULTADOS",
            "info": "TOTAL: _MAX_ REGISTROS - PAGINA _PAGE_ DE _PAGES_",
            "infoFiltered": "",
            "lengthMenu": "MOSTRAR _MENU_ REGISTROS",
            "search": "",
            searchPlaceholder: "Busca lo que quieras...",
            "zeroRecords": "NO SE ENCONTRARON REGISTROS",
            "paginate": {
                "first":      "PRIMERO",
                "last":       "ULTIMO",
                "next":       ">>",
                "previous":   "<<"
                }
            },
            "order": [[ 0, 'desc' ]],
            retrieve: true,
            responsive: true,
            'iDisplayLength': 25
        })
    },
    b = function(){
        $( ".form-control" ).change(function() {
            $(this).val($(this).val().toUpperCase());
        })
    },
    c = function(){
        $(".popovers").popover();
        $(".tooltips").tooltips();
    },
    d = function(){
        // $.datepicker.setDefaults($.datepicker.regional['es-ES']);
        $().datepicker && $('.date-picker').datepicker({
            format: "yyyy-mm-dd",
            orientation: "left",
            language: 'es',
            autoclose: true
        }),

        $('.clockface_1').clockface({
            format: "hh:mm:ss",
            trigger: "manual"
        })
    },
    e = function(perfil,mensaje){
        switch (perfil)
           {
            case 'perfildocente':
                UImensajeToastr.init(mensaje,'IMPORTANTE','success','toast-bottom-left',8000,true);
            break;
            case 'docenteAAPP':
                UImensajeToastr.init(mensaje,'IMPORTANTE','success','toast-bottom-left',8000,true);
            break;
            case 'docenteConducta':
                UImensajeToastr.init(mensaje,'IMPORTANTE','success','toast-bottom-left',8000,true);
            break;
        }
    },
    z = function(){
        $('.mantemiento').click(function(){
            UImensajeToastr.init("EN MANTENIMIENTO, DISCULPE LAS MOLESTIAS...",'SOPORTE','warning','toast-top-center',4000,false);
        })

        $('.error').click(function() {
            UImensajeToastr.init("ACTIVE LA VERSION PREMIUM PARA ESTA OPCI&Oacute;N",'','error','toast-top-center',8000,false);
        })
    },
    nombreUsuario = function(){
        $.ajax({
          url: "nucleo/modulo/UserNombre.php",
          type: "post",
        }).done(function(data){
          $('label#nombre-usuario').text(data);
        });
    }
    return{
        init: function(){
            a(), b(), c(), d(), z()
        },
        uiAlertaSistema: function(perfil,mensaje){
            e(perfil,mensaje)
        },
        uinombreUsuario: function(){
            nombreUsuario();
        }
    }
}();

$(document).ready(function() {
    plugins_sistema.init();
    plugins_sistema.uinombreUsuario();
}); //End document


