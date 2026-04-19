<!DOCTYPE html>
<html>
<head>
    <title>Modifier un établissement</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h3>Modifier un établissement</h3>

    <form method="POST" action="index.php?action=update&id=<?php echo $etablissement['id']; ?>">

        <div class="mb-3">
            <label>Nom</label>
            <input type="text" name="nom" class="form-control" value="<?php echo $etablissement['nom']; ?>" required>
        </div>

        <div class="mb-3">
            <label>Ville</label>
            <input type="text" name="ville" class="form-control" value="<?php echo $etablissement['ville']; ?>" required>
        </div>

        <div class="mb-3">
            <label>Adresse</label>
            <input type="text" name="adresse" class="form-control" value="<?php echo $etablissement['adresse']; ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Modifier</button>
        <a href="index.php" class="btn btn-secondary">Retour</a>

    </form>
</div>
</body>
</html>