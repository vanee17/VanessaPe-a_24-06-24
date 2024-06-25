<?php
require_once ("c://laragon/www/VanessaPeña_24-06-24/view/head/header.php");
?>
<main class="mt-5">
    <div class="row">
        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <div class="titleReg text-center">
                <h1>Registrate a nuestro blog.</h1>
            </div>
            <img src="../../asset/img/halo.jpg" alt="Mando" class="w-100">
        </div>
        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <form class="formReg w-100 mt-5" id="formRegister">
                <div class="mb-3">
                    <label for="inputName" class="form-label">Nombre</label>
                    <input  type="text" name="inputName" class="form-control" id="inputName"
                        aria-describedby="namelHelp">
                    </di>
                    <div class="mb-3">
                        <label for="inputNumber" class="form-label">Teléfono</label>
                        <input  type="text" name="inputNumber" class="form-control" id="inputNumber" oninput="validarNumero(event)">
                    </div>
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Correo Electrónico</label>
                        <input  type="text" name="inputEmail" class="form-control" id="inputEmail">
                    </div>
                    <div class="mb-3 form-check">
                        <input  type="checkbox" name="inputCheck" class="form-check-input inputReg" id="inputCheck">
                        <label class="form-check-label" for="inputCheck">Acepto Terminos y Condiciones</label>
                    </div>
                    <div class="d-flex justify-content-center py-5">
                        <button id="submitButton" href="view/pages/subscribe.php" class="btn10">
                            <span>Enviar</span>
                        </button>
                    </div>
            </form>
        </div>
    </div>

</main>

<?php
require_once ("c://laragon/www/VanessaPeña_24-06-24/view/head/footer.php");
?>