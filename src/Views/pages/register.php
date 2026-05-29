<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="public/assets/css/style.css">
    <title>Accueil</title>
</head>


<body class="min-vh-100">

    <?php require_once __DIR__ . "/../../Views/templates/navbar.php"; ?>

    <div class="container">

        <div class="bg-dark-subtle rounded row p-5">

            <form action="index.php?url=register" method="post" class="d-flex flex-column gap-3">

                <div>

                    <h2 class="text-center">S'inscrire</h2>

                </div>

                <div class="d-flex justify-content-center align-items-center row first_input">

                    <div class="mb-3 col-12 col-sm-6 col-md-4">
                        <div class="d-flex justify-content-between">
                            <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                            <span class="text-danger text-end"><?= $errors['email'] ?? "" ?></span>
                        </div>
                        <input name="email" value="<?= $_POST['email'] ?? "" ?>" class="form-control" id="exampleFormControlInput1" placeholder="E-mail">
                    </div>

                </div>

                <div class="d-flex justify-content-center align-items-center row second_input">

                    <div class="mb-3 col-12 col-sm-6 col-md-4">
                        <div class="d-flex justify-content-between">
                            <label for="exampleFormControlInput3" class="form-label">Nom</label>
                            <span class="text-danger text-end"><?= $errors['lastname'] ?? "" ?></span>
                        </div>
                        <input name="lastname" value="<?= $_POST['lastname'] ?? "" ?>" class="form-control" id="exampleFormControlInput3" placeholder="Nom">
                    </div>

                    <div class="mb-3 col-12 col-sm-6 col-md-4">
                        <div class="d-flex justify-content-between">
                            <label for="exampleFormControlInput4" class="form-label">Mot de passe</label>
                            <span class="text-danger text-end"><?= $errors['password'] ?? "" ?></span>
                        </div>
                        <input type="password" name="password" value="<?= $_POST['password'] ?? "" ?>" class="form-control" id="exampleFormControlInput4" placeholder="Mot de passe">
                    </div>

                </div>

                <div class="d-flex justify-content-center align-items-center row third_input">

                    <div class="mb-3 col-12 col-sm-6 col-md-4">
                        <div class="d-flex justify-content-between">
                            <label for="exampleFormControlInput2" class="form-label">Prénom</label>
                            <span class="text-danger text-end"><?= $errors['firstname'] ?? "" ?></span>
                        </div>
                        <input name="firstname" value="<?= $_POST['firstname'] ?? "" ?>" class="form-control" id="exampleFormControlInput2" placeholder="Prénom">
                    </div>

                    <div class="mb-3 col-12 col-sm-6 col-md-4">
                        <div class="d-flex justify-content-between">
                            <label for="exampleFormControlInput5" class="form-label">Confirmation</label>
                            <span class="text-danger text-end"><?= $errors['cpassword'] ?? "" ?></span>
                        </div>
                        <input type="password" name="cpassword" value="<?= $_POST['cpassword'] ?? "" ?>" class="form-control" id="exampleFormControlInput5" placeholder="Confirmation du Mot de passe">
                    </div>

                </div>

                <div class="d-flex justify-content-around">
                    <button type="submit" class="btn btn-dark border border-light">S'inscrire</button>
                    <a href="index.php?url=home" class="btn btn-dark border border-light">Retour</a>
                </div>

        </div>

        </form>

    </div>


</body>

</html>