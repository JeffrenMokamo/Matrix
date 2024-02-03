<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="description" content=""/>
        <title>Checkout example · Bootstrap v5.0</title>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
        <!-- Custom styles for this template -->
        <link href="form-validation.css" rel="stylesheet"/>
    </head>
    <body class="bg-light">
        <div class="container">
            <main>
                <div class="py-5 text-center">
                    <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"/>
                    <h2>Enrgistrement</h2>
                    <p class="lead">Bienvenue sur <?= $APP_NAME?> votre référence dans le domaine technologique au Congo<br/>Veuillez insérer vos coordonnées et remplir les champs suivants.</p>
                </div>
                <div class="row g-3" style="display:flex;align-items: center;justify-content:center;">
                    <div class="col-md-7 col-lg-8">
                        <h4 class="mb-3">Vos informations pesonnelles</h4>
                        <form class="needs-validation" novalidate="">
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="firstName" class="form-label">Nom</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required="" name="nom"/>
                                    <div class="invalid-feedback">
                                        Veuillez s'il vous plait insérer votre nom.
</div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="lastName" class="form-label">Prénom</label>
                                    <input type="text" class="form-control" id="lastName" name="prenom" placeholder="" value="" required=""/>
                                    <div class="invalid-feedback">
                                        Veuillez s'il vous plait insérer votre prénom.
</div>
                                </div>
                                <div class="col-12">
                                    <label for="username" class="form-label">Username</label>
                                    <div class="input-group"><span class="input-group-text">@</span>
                                        <input type="tel" class="form-control" id="username" placeholder="Numéro de téléphnoe" required="" name="phone"/>
                                        <div class="invalid-feedback">
                                            Veuillez s'il vous plait insérer votre numéro de téléphone.
</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="email" class="form-label">Email <span class="text-muted">.</span>
                                    </label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="matrix@exemple.com"/>
                                    <div class="invalid-feedback">
                                        Veuillez s'il vous plait insérer votre adresse email.
</div>
                                </div>
                                <div class="col-12">
                                    <label for="address" class="form-label">Mot de passe</label>
                                    <input type="text" class="form-control" id="address" placeholder="****" required="" name="mdp"/>
                                    <div class="invalid-feedback">
                                        Veuillez s'il vous plait insérer votre mot de passe.
</div>
                                </div>
                                <div class="col-12">
                                    <label for="address2" class="form-label">Adresse <span class="text-muted">(Facultatif)</span>
                                    </label>
                                    <input type="text" class="form-control" id="address2" placeholder="Apartment or suite"/>
                                </div>
                                <div class="col-md-5" style="display:none;">
                                    <label for="country" class="form-label">Country</label>
                                    <select class="form-select" id="country" required="">
                                        <option value="">Choose...</option>
                                        <option>United States</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid country.
</div>
                                </div>
                                <div class="col-md-4" style="display:none;">
                                    <label for="state" class="form-label">State</label>
                                    <select class="form-select" id="state" required="">
                                        <option value="">Choose...</option>
                                        <option>California</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
</div>
                                </div>
                                <div class="col-md-3" style="display:none;">
                                    <label for="zip" class="form-label">Zip</label>
                                    <input type="text" class="form-control" id="zip" placeholder="" required=""/>
                                    <div class="invalid-feedback">
                                        Zip code required.
</div>
                                </div>
                            </div>
                            <hr class="my-4"/>
                            <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
                        </form>
                    </div>
                </div>
            </main>
            <footer class="my-5 pt-5 text-muted text-center text-small">
                <p class="mt-5 mb-3 text-muted">© 2023 <?= $APP_NAME ?> Inc</p>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="Connexion.php">J'ai déjà un compte sur <?= $APP_NAME?></a>
                    </li>
                </ul>
            </footer>
        </div>
        <script src="assets/js/popper.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

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
    </body>
</html>
