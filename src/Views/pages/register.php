<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="public/assets/css/style.css">
    <title>Accueil</title>
</head>


<body>

    <?php require_once __DIR__ . "/../../Views/templates/navbar.php"; ?>

    <div class="container">

        <div class="bg-dark-subtle rounded p-5">

            <form action="index.php?url=login" method="post" class="d-flex flex-column gap-3">

                <div>

                    <h2 class="text-center">S'inscrire</h2>

                </div>

                <div class="d-flex justify-content-center align-items-center row">

                    <div class="mb-3 col-12 col-sm-2 col-md-6">
                        <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="E-mail" required>
                    </div>

                    <div class="d-flex justify-content-center align-items-center row gap-2">
                        <div class="mb-3 col-12 col-sm-2 col-md-3">
                            <label for="exampleFormControlInput2" class="form-label">Prénom</label>
                            <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="Prénom" required>
                        </div>

                        <div class="mb-3 col-12 col-sm-2 col-md-3">
                            <label for="exampleFormControlInput3" class="form-label">Nom</label>
                            <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="Nom" required>
                        </div>
                    </div>

                    <div class="mb-3 col-12 col-sm-2 col-md-3">
                        <label for="exampleFormControlInput4" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="exampleFormControlInput4" placeholder="Mot de passe" required>
                    </div>

                    <div class="mb-3 col-12 col-sm-2 col-md-3">
                        <label for="exampleFormControlInput5" class="form-label">Confirmer</label>
                        <input type="password" class="form-control" id="exampleFormControlInput5" placeholder="Mot de passe" required>
                    </div>
                </div>

                <div class="d-flex justify-content-around">
                    <button type="submit" class="btn btn-dark border border-light">Se connecter</button>
                    <a href="index.php?url=home" class="btn btn-dark border border-light">Retour</a>
                </div>

            </form>

        </div>

    </div>

</body>

</html>