<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="public/assets/css/style.css">
    <title>Accueil</title>
</head>

<?php require_once __DIR__ . "/../../Views/templates/navbar.php"; ?>

<body>

    <div class="container">

        <!-- Espacement -->
        <hr class="text-white">
        <hr class="text-white">
        <hr class="text-white">
        <hr class="text-white">
        <!-- Espacement -->

        <div class="bg-secondary-subtle p-5">

            <div class="d-flex justify-content-between align-items-center vertical gap-5">

                <div class="d-flex justify-content-center gap-5">
                    <div class="Recette pt-3 rounded fw-bold bg-light">
                        <p>Recette</p>
                    </div>

                    <div class="Date pt-3 rounded fw-bold bg-light">
                        <p>Date</p>
                    </div>
                </div>


                <div class="Date pt-3 border border-light rounded fw-bold bg-light">
                    <p>Retour</p>
                </div>
            </div>

            <hr class="mt-5 mb-5">

            <div class="bg-light rounded">

                <textarea class="form-control" rows="15"></textarea>

            </div>
        </div>

    </div>

</body>

</html>