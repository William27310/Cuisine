<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.css">
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
                        <div class="d-flex justify-content-between">
                            <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                            <span class="text-danger text-end"><?= $errors['email'] ?? "" ?></span>
                        </div>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="E-mail" name="email" value="<?= $_POST['email'] ?? "" ?>">
                    </div>

                    <div class="mb-3 col-12 col-sm-6 col-md-4">
                        <div class="d-flex justify-content-between">
                            <label for="exampleFormControlInput1" class="form-label">Mot de passe</label>
                            <span class="text-danger text-end"><?= $errors['password'] ?? "" ?></span>
                        </div>
                        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Mot de passe" name="password" value="<?= $_POST['password'] ?? "" ?>">

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