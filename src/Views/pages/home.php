<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/style.css">
    <title>Accueil</title>

</head>


<body>

    <?php require_once __DIR__ . "/../../Views/templates/navbar.php"; ?>

    <button class="btn btn-dark mt-3"><a href="index.php?url=login" class="text-decoration-none text-white">Se connecter</a></button>
            <button class="btn btn-dark mt-3"><a href="index.php?url=register" class="text-decoration-none text-white">S'inscrire</a></button>
            <button class="btn btn-dark mt-3"><a href="index.php?url=recipe" class="text-decoration-none text-white">Recette</a></button>

    <div class="container border border-dark">

        <div class="p-5 d-flex justify-content-center flex-wrap gap-5">

        <!-- Recette -->
            <div class="card" style="width: 20rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <div class="mt-auto d-flex flex-column flex-md-row gap-2 justify-content-center">
                        <a href="#" class="btn btn-dark">Accéder</a>
                        <a href="#" class="btn btn-dark">Modifier</a>
                        <a href="#" class="btn btn-dark">Supprimer</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

</body>

</html>