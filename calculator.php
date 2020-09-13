<!DOCTYPE html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<?php include 'header.php'?>
<body>
	<div id="container">
		<div class="menu">
			<?php include 'nav.php'?>		
		</div>
		 <div class="content">
		 	<hr><h2>Calculatrice</h2>
			 	<form method="POST" action="calculator.php">
			 		<table class="calculatrice">
				 		<tr>
				 			<td><label for='num1'> Expression 1 </label></td>
				 			<td><label for='operateur' name="operateur"> Opérateur </label></td>
				 			<td><label for='num2'> Expression 2 </label></td>
				 		</tr>
				 		<tr>
				 			<td><input type="text" name="num1" placeholder="Entrez l'expression 1 ici"></td>
				 			<td><select name="operateur">
					 			<option>Aucun choix</option>
					 			<option>Additionner</option>
					 			<option>Soustraire</option>
					 			<option>Multiplier</option>
					 			<option>Division Euclidienne</option>
					 			<option>Division entière</option>
					 			<option>Reste de la division</option>
				 				</select>
				 			</td>
				 			<td><input type="text" name="num2" placeholder="Entrez l'expression 2 ici"></td>
				 		</tr>
				 	</table>
				 	<table class="boutons">
				 		<tr>
				 			<td><button type="submit" name="submit" value="submit">Calculer</button></td>
				 			<td><button type="reset" name="Effacer" value="Effacer">Effacer</button></td>
				 		</tr>
			 		</table>
			 	</form>
			 	<hr>
		 	
			<?php
			if (isset($_POST['submit']) && isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operateur']) ) {
                /*
                 * Ca, j'ai pas compris pourquoi il faut le faire
                 */
				$result1 = $_POST['num1'];
				$result2 = $_POST['num2'];
				$fonction = $_POST['operateur'];
				?>
				<div class="switch">
					<?php
					switch ($fonction) {
						case 'Aucun choix':
							echo "Selectionnez un Opérateur";
							break;
						case 'Additionner':
							echo "le resultat est = ".($result1+$result2) ;
							break;
						case 'Soustraire':
							echo "le resultat est = ".($result1-$result2) ;
							break;
						case 'Multiplier':
							echo "le resultat est = ".($result1*$result2) ;
							break;
						case 'Division Euclidienne':
							if ($result2 != 0) {
								echo "le resultat est = ".($result1/$result2) ;
							}
							else{
								echo "Division par 0 interdite !";
							}
							
							break;
						case 'Division entière':
							if ($result2 != 0) {
								echo "le resultat est = ".intdiv($result1, $result2);
							}
							else{
								echo "Division par 0 interdite !";
							}
							break;
						case 'Reste de la division':
							if ($result2 != 0) {
								echo "le resultat est = ".($result1%$result2);
							}
							else{
								echo "Division par 0 interdite !";
							}	
							break;
						default:
							# code...
							break;
					}
				}
				else {
					echo "Allez-y, essayez la calculatrice ! Entrez vos valeurs, choisissez un opérateur et validez !";
				}
				?>
			</div>
		</div>
	</div>
</body>
<?php include 'footer.php'?>
