<!DOCTYPE html>
<html lang='fr'>

<head>
	<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8" />
	<title>Nicolas VERHELST</title>
	<link type="text/css" rel="stylesheet" href="style1.css">
	<?php
		$setmode21 = shell_exec("/usr/local/bin/gpio -g mode 27 out");
		shell_exec("gpio -g write 27 1");
		sleep (1);
		shell_exec("gpio -g write 27 0");
		
		$filename = 'compteurVisite.txt';
		$ipAddress = isset($_SERVER['REMOTE_ADDR'])?$_SERVER['REMOTE_ADDR']:"NO REMOTE_ADDR";
		$browser = isset($_SERVER['HTTP_USER_AGENT'])?$_SERVER['HTTP_USER_AGENT']:"NO HTTP_USER_AGENT";
		$referer = isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:"NO HTTP_REFERER";
		$somecontent = "" . date('Y-m-d-H:i:s', time()) . ">" . time() . ">" . $ipAddress . ">" . $browser . ">" . $referer . "<\n";
		//ATTENTION : le < est utilisé pour compter le nombre de visite (ne pas le retirer).

		// Assurons nous que le fichier est accessible en écriture
		if (is_writable($filename)) {

			// Dans notre exemple, nous ouvrons le fichier $filename en mode d'ajout
			// Le pointeur de fichier est placé à la fin du fichier
			// c'est là que $somecontent sera placé
			if (!$handle = fopen($filename, 'a')) {
				 echo "Impossible d'ouvrir le fichier ($filename)";
				 exit;
			}

			// Ecrivons quelque chose dans notre fichier.
			if (fwrite($handle, $somecontent) === FALSE) {
				echo "Impossible d'écrire dans le fichier ($filename)";
				exit;
			}

			//echo "L'écriture de ($somecontent) dans le fichier ($filename) a réussi";
			
			fclose($handle);

		} else {
			echo "Le fichier $filename n'est pas accessible en écriture.";
		}
		
		$strFile = file_get_contents ( $filename );
		$nbrVisite = substr_count ( $strFile , "<" );//compte le nomre de <
	?>
</head>

<body OnLoad="fonctionTemps()">
    <div class="page">
		<header>
			<a href="index.php"><img src="images/photoProfil.jpg" alt="Photo profil Nicolas VERHELST"/></a>
			<h1>Nicolas VERHELST</h1>
			<h2><span id="dateHeureHeader"></span><br/></h2>
			
		</header>
		
		<nav>
			<ul>
				<li><a id="bontonNavSelected" href="index.php"><span>Accueil</span></a></li>
				<li><a href="CV.html"><span>CV</span></a></li>
				<li><a href="telechargements.html"><span>Téléchargements</span></a></li>
				<li><a href="images.html"><span>Images</span></a></li>
			</ul>
		</nav>

		
		
		
		<h1 id="titreBox"><span id="titre">Accueil</span></h1>
		
		<div id="inPage">
			
			
			<iframe src="sideBox.html">
			Votre navigateur ne support pas iframe.
			</iframe>

			
			
			
			
			
			<div id="content">
				<article>
					<h1 class="toph1">Position actuelle</h1>
					<h2>Etudiant à l'ECE Paris</h2>
						<a href="images/logoECE.jpg"><img src="images/logoECE.jpg" alt="Logo de l'ECE"/></a>
						<p>Je suis actuellement étudiant en bac+3 à l'ECE Paris (Ecole Centrale d'Electronique), une école d'ingénieur orientée électronique et nouvelles technologies. L'ECE est intégrable après la bac, mais j'ai préféré l'intégrer après deux années de prépa.</p>
						<p>L'école a été fondée en 1919 sous le nom original de l'<em>"École centrale de la T.S.F."</em>, elle est située aujourd'hui dans le quinzième arondissement de Paris, à proximité de la tour Eiffel. Elle fait partie des 210 écoles d'ingénieurs françaises habilitées (par la <a href="https://fr.wikipedia.org/wiki/Commission_des_titres_d'ing%C3%A9nieur">CTI</a>) à délivrer un diplôme d'ingénieur. </p>
						<p>Une vingtaines de spécialités y sont dispensées ; pour ma part, je pense choisir la majeur <em>Systèmes embarqués</em>.</p>
						<p><a href="http://www.ece.fr/ecole-ingenieur/">ECE Paris</a></p>
						<p><a href="http://www.ece.fr/lp/?lead_source=SEA_google&c_last_source=SEA_google&utm_campaign=ece_branding_google&gclid=Cj0KEQiAuJXFBRDirIGnpZLE-N4BEiQAqV0KGtRBuYneAtx7879RyrDG8swgxXNrdHSVGegbh91iRD4aAsHh8P8HAQ">ECE Paris : second site</a></p>
				</article>
				
				<article>
					<hr/>
					<h1>Positions antérieures</h1>
					<h2>Stagiaire au CNRS</h2>
						<a href="images/logoCNRS.png"><img src="images/logoCNRS.png" alt="Logo du CNRS"/></a>
						<p>Pendant mon année bac+3 j'ai eu la chance de faire un stage au CNRS à Grenoble, dans l'institut Néel. J'ai pu travailler avec une équipe de chercheurs et de doctorants dans le but de mettre en place une expérience d'étude de superfluides dans un cryostat.</p>
						<p>A cette occasion j'ai appris à gérer un réel travail d'équipe, et je me suis perfectionné dans de nombreux domaines comme l'informatique réseau, le traitement des images, etc... J'ai entre autre pu travailler sur une caméra haute vitesse (Phantom V311) capable de prendre 500000 images par seconde. J'ai travaillé sur la réception (avec les logiciels MATLAB et WireShark) de ces images après transit par une fibre optique.</p>
						<p><a href="documents/RapportStage20162017VERHELST.pdf">Rapport de stage CNRS</a></p>
						<p><a href="http://www.cnrs.fr/">http://www.cnrs.fr/</a></p>
						<p><a href="http://neel.cnrs.fr/">http://neel.cnrs.fr/</a></p>
					<h2>Classe préparatoire MPSI/MP</h2>
						<a href="images/logoLN.jpg"><img id="logoLN" src="images/logoLN.jpg" alt="Logo du Lycée Naval"/></a>
						<p>Avec l'envie de base de devenir pilote de chasse, j'ai été admis en MPSI au Lycée Naval (à Brest), un lycée militaire, pour me préparer au concours d'officier, et m'ouvrir la porte à une carrière de pilote. Mais entre temps, je suis devenu myope, je suis donc retourné, l'année d'après, dans le civil en classe de MP au Lycée Champollion (à Grenoble).</p>
						<p>Au cours de ces deux années de classe préparatoire, j'ai pu apprendre à organiser mon travail, et à être plus méthodique et rigoureux dans mes raisonnements. Je garderai de ces deux années de prépa l'idée qu'une tâche, aussi complexe qu'elle puisse être, peut toujours être réalisée avec du temps, de la motivation et de la concentration.</p>
					<h2>Lycée, bac scientifique S/SVT</h2>
						<p>Intéressé par la science en général, il était évident de faire un bac scientifique ; pour ce qui est de la SVT, c'est ma mère qui, étant docteur, a su me faire apprécier le milieux médical, et donc la science de la vie. Pour ce qui est de la science de la terre, c'est mon âme de montagnard qui s'exprime.</p>
				</article>
				
				<article>
					<hr/>
					<h1>Travaux</h1>
					<h2>TIPE : Traitement d'images satellites</h2>
					<p>Pour mon projet de classe préparatoire (TIPE : Travaux d'Initiative Personnels Encadrés) j'ai choisi de travailler sur les images satellites car le cousin de mon binôme était apte à nous aider dans ce domaine (il travaillait chez Thales). Je me suis alors penché sur l'implémentation de code permettant la fusion d'une image couleur de basse définition avec une image en nuance de gris basse définition afin d'obtenir une image couleur et haute définition. Nous avons cherché à perfectionner cette fusion en déterminant des caractéristiques objectives de réussite de cette fusion d'image. Pour en savoir plus, je vous invite à lire une version PDF de mon dossier (NB : j'ai perdu la dernière version du dossier, il y a donc des parties vides) : <a href="documents/TIPE.pdf">fichier PDF</a></p>
					<h2>TPE : La bière</h2>
					<p>Pour mon projet lycéen (TPE : Travaux Personnels Encadrés) j'ai trouvé l'idée de travailler sur la bière en lisant les sujets de TPE des années précédentes. Je me suis alors penché sur la fabrication et l'optimisation d'une bière. Pour en savoir plus, je vous invite à aller voir mon autre site qui est dédié à mon TPE : <a href="http://tpe.biere.pagesperso-orange.fr/">http://tpe.biere.pagesperso-orange.fr/</a></p>
				</article>
			</div>
		</div>
		
		
		
		
		
		<footer>
			<span id="dateHeureFooter"></span><br/>
			Hébergé par un serveur apache2 dans une carte Raspberry Pi 3 Model B<br/>
			&copy; Nicolas VERHELST <a href="mailto:nico.v.44@gmail.com">nico.v.44@gmail.com</a><br/>
			<?PHP
				echo "Nombre de visite de puis le 19/03/2017 : " . $nbrVisite;
			?>
		</footer>
		
	</div>

<script src="JS1.js"></script>
</body>
</html> 
