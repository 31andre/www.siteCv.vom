<?php 
	$user = 'root';
      $mdp = '';
      $db = 'cloud';
      $db = new mysqli('localhost', $user,$mdp,$db)
      or die("connexion impossible");
      if(!$db) {
    echo "Connexion non établie.";

    exit;
}

session_start();
if (isset($_POST['envoyer'])) {
	if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['numero']) AND !empty($_POST['email']))
	{
	$nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $numero = $_POST['numero'];
    $email = $_POST['email'];


    if(!mysqli_query($db,"INSERT INTO user SET nom='".$_POST['nom']."', prenom='".$_POST['prenom']."', numero='".$_POST['numero']."', email='".$_POST['email']."'")){
            echo "Une erreur s'est produite: ".mysqli_error($db);
            } else {
            echo "<h1> Bienvenue $nom $prenom</h1>";
            echo "<h1>nom : $nom </h1><br>
                  <h1>prenom : $prenom</h1> <br>
                  <h1>numero : $numero</h1> <br>
                  <h1>email : $email</h1>";
         }
}
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="connexion.css">
 </head>
 <body>
 
 </body>
 </html>