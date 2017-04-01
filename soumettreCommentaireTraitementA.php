<?php
	
	//Redirige après 3 secondes
	header("refresh:3; url=http://85.171.60.67/soumettreCommentaire.php");
	
	if (isset($_POST['Submit1'])){
				$commentaire = isset($_POST['commentaire'])?$_POST['commentaire']:"";
				$timeStamp = time();
			}
	
	$database = 'db001';
	$table = 'commentaires';
	$dbhandle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
	$dbfound = mysqli_select_db($dbhandle, $database);
	if($dbfound){
		$sql = "INSERT INTO $table(commentaire, timeStamp) VALUES ('$commentaire', FROM_UNIXTIME($timeStamp))";
		$reqUTF8 = 'SET NAMES UTF8';
		mysqli_query($dbhandle, $reqUTF8);//pour avoir les accents OK
		if(mysqli_query($dbhandle, $sql)){
			echo "Commentaire posté. Redirection en cours...";
		}
	}
	else{
		echo "Base de donnée non trouvée.";
	}
	mysqli_close($dbhandle);
	
	
	
	
	
?>