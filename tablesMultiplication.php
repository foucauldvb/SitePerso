<html>
	<head>
		<title>A BASIC HTML FORM</title>
		<style>
			div{
				text-align: center;
				margin-top: 100px;
			}
		</style>
		<script type="text/javascript">
			function init(){
				document.getElementById("theFocus").focus();
			}
		</script>
	</head>

	<body onload="init()">
		<div>
			<h1>Tables de multiplication</h1>
			<FORM NAME ="form1" METHOD ="POST" ACTION = "tablesMultiplication.php">
				<INPUT TYPE = "number" NAME= "min" id="theFocus" placeholder="Valeure minimale"><br/>
				<INPUT TYPE = "number" NAME= "max" placeholder="Valeure maximale"><br/>
				<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Créer table">
			</FORM>
		</div>
		
		<?PHP
			if (isset($_POST['Submit1'])){
				$min = isset($_POST['min'])?$_POST['min']:"";
				$max = isset($_POST['max'])?$_POST['max']:"";
				
				$error="";
				if($min==""){$error .= "Minimum vide <br/>";}
				if($max==""){$error .= "Maximum vide <br/>";}
				if($error!=""){echo "Erreur : $error";}
				
				echo "<div><table>";
				echo "<tr>";
				for ($col=$min-1; $col<$max+1; $col++){//première ligne
					echo "<th>".$col."</th>";
				}
				echo "</tr>";
				
				for ($lig=$min; $lig<$max+1 ; $lig++){
					echo "<tr>";
					echo "<td>".$lig."</td>";
					for ($col=$min+1; $col<$max+2; $col++){
						if($lig%2==0){
							echo "<td style='background-color: blue'>".$lig*($col-1)."</td>";
						}
						else{
							echo "<td>".$lig*($col-1)."</td>";
						}
					}
					echo "</tr>";
				}
				echo "</table></div>";
			
				echo "<style>
					table{
						border-collapse: collapse;
						text-align: center;
						margin: auto;
						margin-top: 100px;
						background-color: green;
					}
					tr{
						border: 2px solid black;
					}
					
					th{
						border: 2px solid black;
					}
					
					td{
						border: 2px solid black;
					}
				</style>";
			}	
		?>
	</body>
</html>
