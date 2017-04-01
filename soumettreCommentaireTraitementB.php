<?php

	echo "<a href='http://85.171.60.67/sideBox.html'>Remettre la barre laterale</a><br/>";
	echo "<a href='http://85.171.60.67/soumettreCommentaire.php'>Nouveau commentaire</a><br/><br/>";
	
	$database = 'db001';
	$table = 'commentaires';
	$dbhandle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
	$dbfound = mysqli_select_db($dbhandle, $database);
	if($dbfound){
		$sql = "Select * from $table";
		$reqUTF8 = 'SET NAMES UTF8';
		mysqli_query($dbhandle, $reqUTF8);//pour avoir les accents OK
		$result = mysqli_query($dbhandle, $sql);
		while($data = mysqli_fetch_assoc($result)){
			echo "<div style='margin-bottom: 20px; border: 2px solid black; width: 250px;'>";
			echo "ID : " . $data['ID'] . "<br/>";
			echo "TimeStamp (UTC) : " . $data['timeStamp'] . "<br/>";
			echo "Commentaire : " . $data['commentaire'] . "<br/>";
			echo "</div>";
		}
	}
	else{
		echo "Base de donnée non trouvée.";
	}
	mysqli_close($dbhandle);
?>