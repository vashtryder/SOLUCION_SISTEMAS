var Login = function() {
    var e = function() {
        $(".login-form").validate({
            errorElement: "span",
            errorClass: "help-block",
            focusInvalid: !1,
            rules: {
                username: {
                    required: !0
                },
                password: {
                    required: !0
                }
            },
            messages: {
                username: {
                    required: "Requiere un Usuario."
                },
                password: {
                    required: "Requiere un Password."
                }
            },
            invalidHandler: function(e, r) {
                $(".alert-danger", $(".login-form")).show()
            },
            highlight: function(e) {
                $(e).closest(".form-group").addClass("has-error")
            },
            success: function(e) {
                e.closest(".form-group").removeClass("has-error"), e.remove()
            },
            errorPlacement: function(e, r) {
                e.insertAfter(r.closest(".input-icon"))
            },
            submitHandler: function(e) {

               $('.login-form').submit(function(event){

                    var postData = $( ".login-form" ).serialize();
                    console.log();
                    $.ajax({
                        type:'POST',
                        url:'nucleo/modulo/sesion.php',
                        data: postData,
                        success: function(response)
                        {
                            if(response != 0){
                                window.location='?s='+response;
                                console.log(response);
                            } else {
                                UImensajeToastr.init("Sino Recuerda su Usuario o Contrase\u00F1a.\nComunicarse con inform\u00E1tica.",'IMPORTANTE','error','toast-bottom-center',8000,false);
                                $( "#username" ).focus();
                            }
                        }
                    })
                     event.preventDefault();
               });
            }
        }), $(".login-form input").keypress(function(e) {
            return 13 == e.which ? ($(".login-form").validate().form() && $(".login-form").submit(), !1) : void 0
        })
    }
    return {
        init: function() {
            e()
        }
    }
}();

jQuery(document).ready(function() {
    Login.init()
});