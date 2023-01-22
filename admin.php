	<?php 
			$user = 'root';
			$pass = '';
			$db = 'cloud';
			$db = new mysqli('localhost', $user,$pass,$db)
			or die("connexion impossible");
			$mysqli = mysqli_connect("localhost", "root", "", "cloud");
            
            if(!$mysqli){
                echo "Erreur de connexion à la base de données.";
            } 

            	
            	
            	$requect = "select * from user";
            	$result = mysqli_query($db,$requect) or die("erreur");
               echo "<table border='1'>";
               echo "<tr><td>nom</td><td>prenom</td><td>numero</td><td>e-mail</td></tr>";
            	while($row=mysqli_fetch_assoc($result)){
            		echo "<tr><td>{$row['nom']}</td><td>{$row['prenom']}</td><td>{$row['numero']}</td><td>{$row['email']} </td></tr>";
            	}
?>
               <!DOCTYPE html>
               <html>
               <head>
                  <title></title>
                  <link rel="stylesheet" type="text/css" href="admin.css">
               </head>
               <body>
               
               </body>
               </html>