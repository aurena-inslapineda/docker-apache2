<?php

include_once __DIR__ . "/../Functions/functions_view.php";

mostrarHeaders("Extracto bancario");
?>
    <form action="tratar" onkeyup="return test()" method="post" name="editExtracto" novalidate class="w-50 mx-4 my-4 px-3 py-3 row g-3 border border-3 rounded needs-validation">
        <h1>Retiro</h1>
        <div class="col-12">
            <label for="editExtractoNum" class="form-label">Número de compte</label>
            <input type="text" class="form-control" maxlength="9" minlength="9" pattern="[0-9]{4}[-]{1}[A-Za-z]{4}" name="editExtractoNum" id="editExtractoNum" required>
            <div class="invalid-feedback">
                Introdueix un número de compte correcte 0000-AAAA.
            </div>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-12">
            <label for="editExtractoSaldo" class="form-label">Saldo a retirar</label>
            <input type="number" class="form-control" id="editExtractoSaldo" name="editExtractoSaldo" min="0" required>
            <div class="invalid-feedback">
                Introdueix un número correcte.
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" name="editExtracto" type="submit">Submit form</button>
            <button class="btn btn-secondary" type="reset">Clear</button>
        </div>
    </form>
    <script>
        function test() {
            let form = document.forms["editExtracto"];
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