<?php
	echo "<a href='http://85.171.60.67'>Retour à l'accueil</a><br/>";
?>

<html>
	<head>
		<meta name="viewport" content="width=device-width" />
		<title>Commande LED et buzzer</title>
		<style>
			#box1{
				text-align: center;
			}
			h1{
				margin: 0px;
			}
			#reponse{
				font-weight: bold;
			}
		</style>
		<script>
			function buzzer(){
				document.getElementById("reponse").innerHTML  = "Buzz en cour...";
			}
		</script>
	</head>
	
	<body>
		<div id="box1">
			<h1>Commande LED</h1>
			<form method="get" action="testLed.php">
				   <input type="submit" value="LED on" name="on">
				   <input type="submit" value="LED off" name="off"><br/>
				   <input onclick="buzzer()" type="submit" value="Buzzer 5 secondes" name="buzzeron"><br/>
				   <input type="submit" value="Etat LED ?" name="led">
			</form>
			
			<div id="reponse">
				<?php
					$setmode17 = shell_exec("/usr/local/bin/gpio -g mode 17 out");
					$setmode21 = shell_exec("/usr/local/bin/gpio -g mode 27 out");
					if(isset($_GET['on'])){
						$gpio_on = shell_exec("/usr/local/bin/gpio -g write 17 1");
					}
					else if(isset($_GET['off'])){
						$gpio_off = shell_exec("/usr/local/bin/gpio -g write 17 0");
					}
					else if(isset($_GET['buzzeron'])){
						shell_exec("gpio -g write 27 1");
						sleep (5);
						shell_exec("gpio -g write 27 0");
						echo "Buzz fait<br/>";
					}
					$gpio17 = shell_exec("/usr/local/bin/gpio -g read 17");
					if($gpio17==1) {echo "LED allumée";}
					else {echo "LED éteinte";}
				?>
			</div>
			
			Bon...ok. Il n'y a que moi qui peut voir si la LED est allumée ou entendre le buzzer ; et si ça se trouve je tout débranchée, mais voici le code :
			<textarea readonly rows="58" cols="130">
<html>
	<head>
		<meta name="viewport" content="width=device-width" />
		<title>Commande LED et buzzer</title>
		<style>
			#box1{
				text-align: center;
			}
			h1{
				margin: 0px;
			}
			#reponse{
				font-weight: bold;
			}
		</style>
		<script>
			function buzzer(){
				document.getElementById("reponse").innerHTML  = "Buzz en cour...";
			}
		</script>
	</head>
	
	<body>
		<div id="box1">
			<h1>Commande LED</h1>
			<form method="get" action="testLed.php">
				   <input type="submit" value="LED on" name="on">
				   <input type="submit" value="LED off" name="off"><br/>
				   <input onclick="buzzer()" type="submit" value="Buzzer 5 seconde" name="buzzeron"><br/>
				   <input type="submit" value="Etat LED ?" name="led">
			</form>
			
			<div id="reponse">
				<&#63;php
					$setmode17 = shell_exec("/usr/local/bin/gpio -g mode 17 out");
					$setmode21 = shell_exec("/usr/local/bin/gpio -g mode 27 out");
					if(isset($_GET['on'])){
						$gpio_on = shell_exec("/usr/local/bin/gpio -g write 17 1");
					}
					else if(isset($_GET['off'])){
						$gpio_off = shell_exec("/usr/local/bin/gpio -g write 17 0");
					}
					else if(isset($_GET['buzzeron'])){
						shell_exec("gpio -g write 27 1");
						sleep (5);
						shell_exec("gpio -g write 27 0");
						echo "Buzz fait<br/>";
					}
					$gpio17 = shell_exec("/usr/local/bin/gpio -g read 17");
					if($gpio17==1) {echo "LED allumée";}
					else {echo "LED éteinte";}
				?>
				&#63;>
			</div>
		</div>
	</body>
</html></textarea><br/>
			Le site qui m'a aidé : <a href="http://www.raspberry-pi-geek.com/Archive/2014/07/PHP-on-Raspberry-Pi">http://www.raspberry-pi-geek.com/Archive/2014/07/PHP-on-Raspberry-Pi</a>
		</div>
	</body>
</html>