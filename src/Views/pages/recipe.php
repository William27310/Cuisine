<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/style.css">
    <title>Recipe</title>

</head>


<body>

    <?php require_once __DIR__ . "/../../Views/templates/navbar.php"; ?>

    <div class="container">

        <div class="bg-dark-subtle rounded p-5">

            <div class="d-flex justify-content-between align-items-center vertical gap-5">

                <div class="d-flex justify-content-center gap-5">
                    <div class="Recette pt-3 rounded fw-bold bg-light">
                        <p>Recette</p>
                    </div>

                    <div class="Date pt-3 rounded fw-bold bg-light">
                        <p>Date</p>
                    </div>
                </div>


                <div class="Date p-3 border border-light rounded fw-bold bg-light">
                    <button class="border border-light text-dark bg-light"> <a href="index.php?url=home" class="fw-bold text-decoration-none text-dark"> Retour </a> </button>
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