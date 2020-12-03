<!DOCTYPE html>
<html>
    <head>
        <title>Salvare client nou</title>
		<meta http-equiv="refresh" content="55;URL='index.php'" />
        <link rel="stylesheet" href="style.css"/>
    </head>

    <body>
    <div class="menu">
            <img class="pic" src="logo.png" title="Magazinul Meu online" height="160"/>
            <ul class="list">
            <li>
                <a href="Despre_Noi.php">Despre noi</a>
                </li><br>
				<li>
                <a href="Carti.php">Carti</a>
                </li><br>
                <li>
                <a href="adauga_carte_noua.php">Adauga titlul dorit</a>
                </li><br>
				<li>
                <a href="contact.php">Contact</a>
                </li><br>
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
        <ul class="social">
                <li>
                <a href="https://www.facebook.com/Printre-carti-102183264991394/" class="fa fa-facebook"></a>
                </li>
        </ul>
    </div>
		<div class="informations">
			<strong>Se salveaza datele.</strong>
			<?php 
			include 'connect_database.php';
			 echo "Salutare! Datele pe care dorim sa le salvam sunt: <br>Nume: ".$_POST['FirstName']."<br>Prenume:".$_POST["LastName"]."<br>";
			$sql = "INSERT INTO clienti (LastName, FirstName, Phone, Email)
			VALUES ('".$_POST['LastName']."','".$_POST["FirstName"]."','".$_POST["Phone"]."','".$_POST["Email"]."')";

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