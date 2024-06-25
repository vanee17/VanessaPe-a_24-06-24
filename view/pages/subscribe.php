<?php
require_once ("c://laragon/www/VanessaPeña_24-06-24/view/head/header.php");
?>
<main class="mt-5">
    <div class="row">
        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <div class="titleReg text-center">
                <h1>Suscríbete a nuestro boletín.</h1>
            </div>
            <img src="../../asset/img/cyber.jpg" alt="Mando" class="w-100">
        </div>
        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <form class="formReg w-100 mt-5 pt-5 pt-md-0" id="formSubscribe">
                <div class="mb-3">
                    <label for="inputEmail1" class="form-label">Correo Electrónico</label>
                    <input  type="text" name="inputEmail" class="form-control inputSubs" id="inputEmail">
                </div>
                <div class="mb-3 form-check">
                    <input  type="checkbox" name="inputCheck" class="form-check-input inputSubs" id="inputCheck">
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