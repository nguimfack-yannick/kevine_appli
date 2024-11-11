<?php

require_once"connexion.php";


if(isset($_GET["id"])){

  $id=$_GET["id"];

  $re_delete="DELETE FROM etudiants WHERE id=?";
  $re=$cnx->prepare($re_delete);
  $re->execute([$id]);

}



?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site d'enregistrement</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<form>
  <input type="submit"name="supprimer" value="Supprimer">

  <a class="btn-delete" href="index.php">Retour</a>
</form>
</body>
</html>