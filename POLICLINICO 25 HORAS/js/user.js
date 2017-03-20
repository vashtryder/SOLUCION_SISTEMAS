var FormValidation = function () {
    var frmUpdateUser = function(){
        var frmdocente = $('.data-form');
        var error1 = $('.alert-danger', frmdocente);
        var success1 = $('.alert-success', frmdocente);
        frmdocente.validate({
        errorElement: 'span', //default input error message container
        errorClass: 'help-block help-block-error', // default input error message class
        focusInvalid: true, // do not focus the last invalid input
        ignore: "",  // validate all fields including form hidden input
        rules: {
            nombres: {
                required: true
            }
        },

        messages: { // custom messages for radio buttons and checkboxes
            nombres: {
                required: "Requiere Ingresar Nombre Completo."
            }
        },

        invalidHandler: function (event, validator) { //display error alert on form submit
            success1.hide();
            error1.show();
            Metronic.scrollTo(error1, -200);
        },

        errorPlacement: function (error, element) { // render error placement for each input type
            var icon = $(element).parent('.input-icon').children('i');
            icon.removeClass('fa-check').addClass("fa-warning");
            icon.attr("data-original-title", error1.text()).tooltip({'container': 'body'});
        },

        highlight: function (element) { // hightlight error inputs
            $(element)
                .closest('.form-group').removeClass("has-success").addClass('has-error'); // set error class to the control group
        },

        unhighlight: function (element) { // revert the change done by hightlight

        },

        success: function (label, element) {
            var icon = $(element).parent('.input-icon').children('i');
            $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
            icon.removeClass("fa-warning").addClass("fa-check");
        },

        submitHandler: function (form) {
            success1.show();
            error1.hide();
            var postData = $( ".data-form" ).serialize();
             $.ajax({
                 type:'POST',
                 url:'nucleo/modulo/UserUpdate.php',
                 data: postData

             }).done(function(response) {
                if(response == 1){
                    $('#actualizarDatos').modal("hide");
                    UImensajeToastr.init("SE ACTUALIZO CORRECTAMENTE.",'','success','toast-top-center',8000,false);
                    nombre_usuario.init();
                    console.log(response);
                }else{
                    UImensajeToastr.init("ERROR: NO SE PUDO ACTUALIZAR LOS DATOS",'','error','toast-top-center',8000,false);
                    $('#actualizarDatos').modal("show");
                }

             });
        }
        })
    },
    frmUpdatePassword = function(){
        var frmpassword = $('#formcontraDocente');
        var error2 = $('.alert-danger', frmpassword);
        var success2 = $('.alert-success', frmpassword);

        frmpassword.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: true, // do not focus the last invalid input
                ignore: "",  // validate all fields including form hidden input
                rules: {
                    password1: {
                        required: true,
                        minlength: 5
                    },
                    password2: {
                        required: true,
                        minlength: 5,
                        equalTo: '#password1'
                    }

                },

                messages: { // custom messages for radio buttons and checkboxes
                    password1: {
                        required: "Campo Obligatorio.",
                        minlength: "Ingresar mínimo 5 caracteres."
                    },
                    password2: {
                        required: "Campo Obligatorio.",
                        minlength: "Ingresar mínimo 5 caracteres.",
                        equalTo: "Las contraseñas deben coincidir."
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit
                    success2.hide();
                    error2.show();
                    Metronic.scrollTo(error2, -200);
                },

                errorPlacement: function (error, element) { // render error placement for each input type
                    var icon = $(element).parent('.input-icon').children('i');
                    icon.removeClass('fa-check').addClass("fa-warning");
                    icon.attr("data-original-title", error2.text()).tooltip({'container': 'body'});
                    // $('#mensajesContrasenia').html(error).css("color","red");
                    // error.insertAfter(element);
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').removeClass("has-success").addClass('has-error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change done by hightlight

                },

                success: function (label, element) {
                    var icon = $(element).parent('.input-icon').children('i');
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                    icon.removeClass("fa-warning").addClass("fa-check");
                },

                submitHandler: function (form ) {

                    success2.show();
                    error2.hide();
                    //form[0].submit(); // submit the form
                    var postData = $( "#formcontraDocente" ).serialize();

                     $.ajax({
                         type:'POST',
                         url:'modulo/PERSONAL/updatePasswordDocente.php',
                         data: postData

                     }).done(function(response){
                        if(response == 1){
                            UImensajeToastr.init("SE ACTUALIZO CORRECTAMENTE.",'','success','toast-top-center',4000,false);
                            $('#cambioPasswordDocente').modal("hide");

                        }else{
                            UImensajeToastr.init("ERROR: NO SE PUDO ACTUALIZAR LOS DATOS",'','error','toast-top-center',4000,false);
                            $('#cambioPasswordDocente').modal("show");
                        }
                    });
                }
        })
    },
    frmBuscarPaciente = function(){
        $('input#busqueda').on('keypress', function (event) {
            if(event.which === 13){
                var id = $('#state_id').val();
                if(id == ""){
                    UImensajeToastr.init("INGRESE HISTORIA CLINICA O NOMBRE DE PACIENTE",'','error','toast-top-center',8000,false);
                    window.location='?s=BusquedaHistoria';
                }else{
                    window.location='?s=BusquedaHistoria&id='+id;
                }
                event.preventDefault();
            }
        }),
        $("#busqueda").autocomplete({
            source: "nucleo/modulo/UserList.php",
            select: function(event, ui) {
                $('#state_id').val(ui.item.id);
            }
        })
    }
    return {
        init: function() {
            frmUpdateUser(), frmUpdatePassword(), frmBuscarPaciente()
        }
    }
}();

$(document).ready(function(){
	FormValidation.init();
});
