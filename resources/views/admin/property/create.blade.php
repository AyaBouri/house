<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Create Property</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>Ajouter Property</h1>
            <form class="needs-validation" novalidate>
                <div class="form-control">
                    <div class="col-md-4 mb-3">
                        <label for="titre">Titre</label>
                        <input type="text" class="form-control" id="titre" placeholder="titre" required>
                        <div class="valid-feedback">Ok!</div>
                        <div class="invalid-feedback">Valeur Incorrecte!</div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="surface">Surface m²</label>
                        <input type="number" class="form-control" id="surface" placeholder="surface" required>
                        <div class="valid-feedback">Ok!</div>
                        <div class="invalid-feedback">Valeur Incorrecte!</div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="address" required>
                        <div class="valid-feedback">Ok!</div>
                        <div class="invalid-feedback">Valeur Incorrecte!</div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="ville">Ville</label>
                        <input type="text" class="form-control" id="ville" placeholder="ville" required>
                        <div class="valid-feedback">Ok!</div>
                        <div class="invalid-feedback">Valeur Incorrecte!</div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
<!--
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="ville">Ville</label>
                        <input type="text" class="form-control" id="ville" placeholder="ville" required>
                        <div class="valid-feedback">Ok!</div>
                        <div class="invalid-feedback">Valeur Incorrecte!</div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="cp">Postal Code</label>
                        <input type="text" class="form-control" id="cp" placeholder="code postal" required>
                        <div class="valid-feedback">Ok!</div>
                        <div class="invalid-feedback">Valeur Incorrecte!</div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="cgu" required>
                        <label class="form-check-label" for="cgu">J'accepte les conditions générales d'utilisation et de ventes</label>
                        <div class="invalid-feedback">Vous Devez accepter les CGU pour continuer</div>
                    </div>
                </div>
                <a href="{{url('admin/option/index')}}">
                    <button class="btn btn-primary" type="submit">Envoyer</button>
                </a>
            </form>
        </div>
        <script>
            (function(){
                'use strict';
                window.addEventListener('load',function (){
                    let forms=document.getElementsByClassName('needs-validation');
                    let validation=Array.prototype.filter.call(forms,function (form){
                        form.addEventListener('submit',function (event){
                            if(form.checkValidity()===false){
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        },false);
                    });
                },false);
            })();
        </script>-->
