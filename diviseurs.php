<!DOCTYPE html>
<meta charset="utf-8">
<title>Diviseurs</title>
<link rel="stylesheet" type="text/css" href="style.css">
<hr>
<?php include 'header.php' ?>

<body>
	<div id="container">
		<div class="menu">
			<?php include 'nav.php' ?>
		</div>
		<div class = "content">
			<hr>
			<h2>Rechercher des diviseurs</h2>
			<form method="POST" action="Diviseurs.php">
				<label for="nombre">Entrez un nombre</label>
				<input name="nombre", type="text" placeholder="Ecrivez votre nombre ici">
				<br />
				<label for="diviseur">Entrez un diviseur</label>
				<input name="diviseur", type="text" placeholder="Ecrivez votre nombre ici">
				<br />
				<button type="submit" value='Valider' name="valider">valider</button>
				<button type="Reset" value="Effacer" name="reset">Effacer</button>
			</form>
		<?php
		if (isset($_POST['nombre']) && isset($_POST['diviseur']) && !empty($nombre = $_POST['nombre']) && !empty($diviseur = $_POST['diviseur'])){
		$nombre = $_POST['nombre'];
		$diviseur = $_POST['diviseur'];
			echo "<br /> "."Le nombre choisi est : ".$nombre;
			echo "<br /> "."Le diviseur choisi est : ".$diviseur;
		?>
		<table>
		<tr>
		<?php
			if ($nombre%$diviseur == 0) {
				echo"<br />".$diviseur." divise bien ".$nombre."<br />";  
			}
			else{
				echo"<br />".$diviseur." ne divise pas entièrement ".$nombre."<br />";
			}
		?>
		</tr>
		<tr>
		<?php
		$tab=array();
			for ($i=1; $i<101; $i++){ 
				if ($nombre%$i==0){
						$tab[$i]=$i;
				}
			}
			echo"<hr>"."Les nombres de 1 à 100 qui divisent ".$nombre." sont : ";
			foreach ($tab as $i) {
			  	echo $tab[$i]." | ";
		  }  
		}
		else {
			echo"<br />"."Allez-y, faites un essai !";
		}
		?>
		</tr>
		</table>
		</div>
	</div>
</body>
<?php include 'footer.php' ?>
</html>