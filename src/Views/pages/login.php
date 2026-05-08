<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
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

                    <h2 class="text-center">Se connecter</h2>

                </div>

                <div class="d-flex flex-column justify-content-center align-items-center">

                    <div class="mb-3 col-12 col-sm-6 col-md-4">
                        <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="E-mail" required>
                    </div>

                    <div class="mb-3 col-12 col-sm-6 col-md-4">
                        <label for="exampleFormControlInput1" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Mot de passe" required>
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