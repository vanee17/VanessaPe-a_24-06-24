


  //valdiación email
function validarCorreo() {
    let emailInput = $('#inputEmail');
    let emailValue = emailInput.val();
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; 
    // Destruye cualquier popover existente
    emailInput.popover('dispose');
    if (!emailPattern.test(emailValue)) {
        
        emailInput.popover({
            content: "Por favor ingrese un correo válido",
            placement: "right"
        });
        emailInput.popover('show');
        return 0;
    }
    return 1;
}
function validarNumero(event) {
    let inputValue = event.target.value;
    event.target.value = inputValue.replace(/[^\d]/g, '').substr(0, 10);
}

function validarLongitud() {
    let numeroInputVal = $('#inputNumber').val();
    let numeroInput = $("#inputNumber");
    if (numeroInputVal.length !== 10) {
        numeroInput.popover({
            content: 'Ingrese un número válido (10 dígitos)',
            placement: 'right'
        });
        numeroInput.popover('show');
        return 0;
    }
    return 1;
}
function validarNombre(){
    let inputNombreVal = $('#inputName').val();
    let inputNombre = $("#inputName");
    if (inputNombreVal.length == "" ) {
        inputNombre.popover({
            content: 'Este campo no puede estar vacio',
            placement: 'right'
        });
        inputNombre.popover('show');
        return 0;
    }
    return 1;
}
function validarCheckbox() {
    let checkbox = $('#inputCheck');

    if (!checkbox.prop('checked')) {
        // Si el checkbox no está marcado, mostramos el popover
        checkbox.popover({
            content: "Debe aceptar los términos y condiciones",
            placement: "right"
        });
        checkbox.popover('show');
        return 0; 
    } else {
       
        checkbox.popover('dispose');
        return 1; 
    }
}


  $(document).ready(function () {
    $('#inputCheck').change(function() {
        validarCheckbox();
    });
    //ajax para registro
    $("#formRegister").submit(function(e) {
        e.preventDefault(); // Prevenir envío automático del formulario

        // Si las validaciones son exitosas, proceder con el envío del formulario
        let form_data = new FormData(this);
        if(validarCorreo() == 0 || validarCheckbox() == 0 || validarLongitud() == 0 || validarNombre() == 0 ){
            validarCheckbox();
            validarCorreo();               
            validarLongitud();   
            validarNombre();            
        }else{
            $.ajax({
                url: "../../controller/homeController.php?f=guardarRegistros",
                type: "POST",
                data: form_data,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response == 1) {
                        Swal.fire({
                            position: "center",
                            icon: "success",
                            title: "¡Tu registro fue un éxito!",
                            showConfirmButton: false,
                            timer: 1500
                        });
                        $('#formRegister')[0].reset();
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }

    });

//ajax para suscripcion

$("#formSubscribe").submit(function(e){
    e.preventDefault();
    let form_data = new FormData(this);
    if(validarCorreo()== 0 || validarCheckbox() == 0){
        validarCheckbox();
        validarCorreo();
    }else{
        $.ajax({
            url: "../../controller/homeController.php?f=guardarSuscripciones",
            type: "POST",
            data: form_data,
            processData: false,
            contentType: false,
            success:function(response){
                if (response == 1) {
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "¡¡Tu suscripción fue un éxito!!",
                        showConfirmButton: false,
                        timer: 1500
                      });
                      $('#formSubscribe')[0].reset();
                }
            },
            error: function(error){
                console.log(error);
            }
        });
       }


});
});




