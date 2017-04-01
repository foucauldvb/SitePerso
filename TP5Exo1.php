<?php
	require 'TP5Exo1config.php';
	$database = 'db001';
	$dbhandle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
	$dbfound = mysqli_select_db($dbhandle, $database);
	if($dbfound){
		$sql = "Select * from membres WHERE Prenom LIKE 'G%'";
		$reqUTF8 = 'SET NAMES UTF8';
		mysqli_query($dbhandle, $reqUTF8);//pour avoir les accents OK
		$result = mysqli_query($dbhandle, $sql);//$result : tous les mebres de la famille (resultat du select)
		while($data = mysqli_fetch_assoc($result)){//$data : un membre de la famille (ligne par ligne du resultat)
			echo "<div style='margin-bottom: 20px; border: 2px solid black; width: 250px;'>";
			echo "ID : " . $data['ID'] . "<br/>";
			echo "Nom : " . $data['Nom'] . "<br/>";
			echo "Prénom : " . $data['Prenom'] . "<br/>";
			echo "Statut : " . $data['Statut'] . "<br/>";
			echo "Date de naissance : " . $data['DateNaissance'] . "<br/>";
			echo "</div>";
		}
	}
	else{
		echo "Base de donnée non trouvée.";
	}
	mysqli_close($dbhandle);
?>