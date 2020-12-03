<!DOCTYPE html>
<html>
    <head>
        <title>Magazinul Meu</title>
        <link rel="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
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
    <div class="empty">
        <img/>
    </div>

    <div class="informations">
		<table>
			<tr>
				<td>Id</td>
				<td>Nume</td>
				<td>Prenume</td>
				<!--<td>Telefon</td>
				<td>Email</td>-->
			</tr>
		<?php 
			include 'connect_database.php';
			 
			$sql = "SELECT idCostumers, LastName, FirstName FROM clienti ORDER BY idCostumers";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc())
			{
				echo "<tr><td> ". $row["idCostumers"]. " </td><td> ". $row["LastName"]. " </td><td> " . $row["FirstName"] . "</td></tr>";
			}
			} else {
				echo "0 results";
			}
			$conn->close();
			
			?>
		</table>
        <br>
        </div>
    <div class="contact">
        <h2>De ce sa devii membru al "Clubului dintre carti"?</h2>
            <img src="logo10.jpg" width="350" height="263" alt="reducere">
            <p>Daca ne recomanzi libraria, ai reducere 10% la orice comanda.</p>
    </div> 

    <div class="contact">
            <img src="fainosag.jpg" width="350" height="263" alt="cutie cu fainosag">
            <p>Ca membru poti posta idei faine pe site-ul librariei, in "Cutia cu fainosaguri" .</p>
    </div> 

    <div class="contact">
            <img src="prietenie.jpg" width="350" alt="intalnirea de vineri">
            <p>In prima zi de vineri din luna ne intalnim la un pahar de vorba, muzica buna si povesti haioase .</p>
    </div> 
    
    
    </body>
</html>