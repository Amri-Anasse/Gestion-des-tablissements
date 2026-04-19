<!DOCTYPE html>
<html>
<head>
    <title>Liste des établissements</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h3>Gestion des établissements</h3>

    <a href="index.php?action=create" class="btn btn-primary mb-3">Ajouter un établissement</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Ville</th>
                <th>Adresse</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($etablissements as $etablissement) { ?>
            <tr>
                <td><?php echo $etablissement["id"]; ?></td>
                <td><?php echo $etablissement["nom"]; ?></td>
                <td><?php echo $etablissement["ville"]; ?></td>
                <td><?php echo $etablissement["adresse"]; ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?php echo $etablissement["id"]; ?>" class="btn btn-warning btn-sm">Modifier</a>

                    <a href="index.php?action=delete&id=<?php echo $etablissement["id"]; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet établissement ?')">Supprimer</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>