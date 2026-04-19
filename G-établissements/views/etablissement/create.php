<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un établissement</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h3>Ajouter un établissement</h3>

    <form method="POST" action="index.php?action=store">

        <div class="mb-3">
            <label>Nom</label>
            <input type="text" name="nom" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Ville</label>
            <input type="text" name="ville" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Adresse</label>
            <input type="text" name="adresse" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Ajouter</button>

        <a href="index.php" class="btn btn-secondary">Retour</a>

    </form>
</div>
</body>
</html>