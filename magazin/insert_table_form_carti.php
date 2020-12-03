<!DOCTYPE html>
<html>
    <head>
        <title>Salvare titlul nou</title>
		<meta http-equiv="refresh" content="55;URL='index.php'" />
        <link rel="stylesheet" href="style.css"/>
    </head>

    <body>
    <div class="menu">
            <img class="pic" src="logo.png" title="Magazinul Meu online" height="160"/>
            <ul class="list">
            <li>
                <a href="#">Despre noi</a>
                </li>
				<li>
                <a href="Carti.php">Carti</a>
                </li>
                <li>
                <a href="adauga_carte_noua.php">Adauga cartea dorita</a>
                </li>
				<li>
                <a href="contact.php">Contact</a>
                </li>
                <li>
                <a href="index.php">Vrei sa devii membrul clubului nostru de lectura?</a>
                </li><br>
                <li>
                <a href="clienti.php">Clubul dintre carti</a>
                </li><br>
                <li>
                <a href="cutia_cu_fainosaguri.php">Cutia cu fainosaguri</a>
                </li>
            </ul>
            </div>
		<div class="informations">
			<strong>Se salveaza datele.</strong>
			<?php 
			include 'connect_database.php';
			 echo "Salutare! Datele pe care dorim sa le salvam sunt: <br>Autor: ".$_POST['Autor']."<br>Titlu:".$_POST["Titlu"]."<br>";
			$sql = "INSERT INTO carti (Autor, Titlu)
			VALUES ('".$_POST['Autor']."','".$_POST["Titlu"]."')";

			if ($conn->query($sql) === TRUE) {
				echo "New record created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
			$conn->close();
			?>
        <br>
        </div>
    </body>
</html>