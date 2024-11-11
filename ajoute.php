<?php

require_once"connexion.php";
$message="";

  
if(isset($_POST["ajouter"])){

if(!empty($_POST['nom']) || !empty($_POST['prenom']) || !empty($_POST['email'])){

      $nom = htmlspecialchars($_POST['nom']);
    $prenom= htmlspecialchars($_POST['prenom']);
    $mail =htmlspecialchars($_POST['mail']);


    $req_insert="INSERT INTO etudiants(nom,prenom,mail) VALUES(?,?,?)";
    $re=$cnx->prepare($req_insert);
    $re->execute([$nom,$prenom,$mail]);
    // var_dump($req_insert);
    // exit();

    $message="etudiants inserer avec succes";
}else{
    $message="Veuillez remplir tout les champs";
}


}



?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div id="modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Ajouter d'un etudiant</h2>
            <form action="" method="POST">

            <br><br>
            <?=$message?>
                <label for="Nom">Nom</label>
                <input type="text" id="Nom" name="nom">
                <label for="Prenom">Prenom</label>
                <input type="text" id="Prenom" name="prenom">
                <label for="Email">Email</label>
                <input type="email" id="Email" name="mail">
                <input type="submit" name="ajouter" value="Valider">
                <a href="index.php">Retour</a>
            </form>
        </div>
    </div>

</body>
</html>