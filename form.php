<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
    <form action="reponseform.php" method="post" class="container bg-light border rounded p-5">
        <h1 class="text-center">Votre commande</h1>

        <p class="row">
            <label for="nom" class="form-label">nom : </label>
            <input type="text" name="nom" id="nom" class="form-control">
        </p>

        <p class="row">
            <label for="prénom" class="form-label">prénom : </label>
            <input type="text" name="prénom" id="prénom" class="form-control">
        </p>

        <p class="row">
            <label for="e-mail" class="form-label">e-mail : </label>
            <input type="text" name="e-mail" id="e-mail" class="form-control">
        </p>

        <p class="row">
            <label for="téléphone" class="form-label">téléphone,: </label>
            <input type="number" name="téléphone" id="téléphone" class="form-control">
        </p>

        <p class="row">
            <label for="sujet " class="form-label">sujet : </label>
            <input type="text" name="sujet" id="sujet " class="form-control">
        </p>

        <p class="row">
            <label for="message" class="form-label">message: </label>
            <input type="text" name="message" id="message" class="form-control">
        </p>

        <p class="text-center">
            <button type="submit" class="btn btn-primary">Envoyer</button> 
        </p>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>