<?php

include_once __DIR__ . "/../Functions/functions_view.php";

mostrarHeaders("Nou client");

?>
<form action="tratar" method="post" onkeyup="return test()" name="newClient" novalidate class="w-50 mx-4 my-4 px-3 py-3 row g-3 border border-3 rounded needs-validation">
    <h1>Donar d'alta client</h1>
    <div class="col-md-6">
        <label for="newClientNom" class="form-label">Nom</label>
        <input type="text" class="form-control" id="newClientNom" name="newClientNom" required>
    </div>
    <div class="col-md-6">
        <label for="newClientCognom" class="form-label">Cognom</label>
        <input type="text" class="form-control" id="newClientCognom" name="newClientCognom" required>
    </div>
    <div class="col-12">
        <label for="newClientDireccio" class="form-label">Adreça</label>
        <input type="text" class="form-control" id="newClientDireccio" placeholder="C/ La pineda, 69" name="newClientDireccio" required>
    </div>
    <div class="col-md-6">
        <label for="newClientDNI" class="form-label">DNI</label>
        <input type="text" class="form-control" maxlength="9" minlength="9" pattern="[0-9]{8}[A-Za-z]{1}" name="newClientDNI" id="newClientDNI" required>
        <div class="invalid-feedback">
            Introdueix un DNI correcte.
        </div>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="col-md-6">
        <label for="newClientEdat" class="form-label">Data de naixement</label>
        <input type="date" class="form-control" id="newClientEdat" name="newClientEdat" required>
        <div class="invalid-feedback">
            Introdueix la teva edat.
        </div>
    </div>
    <div class="col-12">
        <button class="btn btn-primary" name="newClient" type="submit">Submit form</button>
        <button class="btn btn-secondary" type="reset">Clear</button>
    </div>
</form>
<script>
    function test() {
        var form = document.forms["newClient"];
        form.classList.add("was-validated");
    }

    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        let forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
<?php
mostrarBotonMenu();
mostrarFooter();