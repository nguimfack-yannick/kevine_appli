<?php
require_once"connexion.php";

$request="SELECT * FROM etudiants ORDER BY id ASC";
$re=$cnx->prepare($request);
$re->execute();
$donnees = $re->fetchAll();

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> GESTION_ETUDIANTS</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="sidebar">
        <div class="logo">Gestion_Etudiants</div>
    </div>
    <div class="main-content">
        <header>
            <h1>Gestion_Etudiants</h1>
        </header>
        <section class="book-actions">
            <a class="btn-add" href="ajoute.php">Ajouter un etudiant</a>
            <input type="text" id="search" placeholder="Rechercher d'un etudiant...">
        </section>
        <section class="book-list">
            <table>
                <thead>     
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                </thead>
                <tbody>
                  <?php foreach($donnees as $donnee):?>
                        <tr>
                        <td><?=$donnee['id']?></td>
                        <td><?=$donnee['nom']?></td>
                        <td><?=$donnee['prenom']?> </td>
                        <td><?=$donnee['mail']?> </td>
                        <td><?=$donnee['date']?> </td>
                        <td>
                        <a class="btn-edit" href="modifier.php?id=<?=$donnees">Modifier</a>
                        <a class="btn-delete" href="supprimer.php?id=<?=$donnee['id']?>">supprimer</a>
                        </td>
                        </tr>
                        <?php endforeach; ?>
                </tbody>
            </table>
        </section>
                  </div>
</body>
</html>