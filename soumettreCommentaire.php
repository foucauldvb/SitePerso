<?php
	echo "<a href='http://85.171.60.67/sideBox.html'>Remettre la barre laterale</a><br/>";
?>

<html>
	<head>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8" />
		<title>Soumettre commentaire</title>
		<style>
			#contenu{
				text-align: center;
				margin: auto;
			}
			.box{
				width: 220px;
				border: 2px solid black;
				margin: auto;
				margin-bottom: 30px;
				padding: 20px;
			}
		</style>
		
		<script type="text/javascript">
		function reste(texte)
		{
			var restants=1000-texte.length;
			document.getElementById('caracteres').innerHTML=restants;
		}
		</script>
		
	</head>

	<body>
		<div id="contenu">
			<div class="box">
				<form method="post" action="soumettreCommentaireTraitementA.php">
					<textarea name="commentaire" placeholder="Commentaire" cols="29" rows="8" onkeyup="reste(this.value);"></textarea><br/>
					<span id="caracteres">1000</span> caractères restants<br/>
					<input type="submit" Name = "Submit1" value="Envoyer ce commentaire"/>
				</form>
			</div>
			
			<form method="get" action="soumettreCommentaireTraitementB.php">
				<input type="submit" value="Afficher tous les commentaires"/>
			</form>
		</div>
	</body>
</html> 