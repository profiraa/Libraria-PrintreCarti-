<!DOCTYPE html>
<html>
    <head>
        <title>Magazinul Meu</title>
        <link rel="stylesheet" href="style.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <script type="text/javascript">
			function checkform()
			{
				if (validateidCarte() && validateTitlu()&& validateAutor())
				return true;
			}
			
			var numere = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
			
			function validateidCarte()
			{
				var nume = document.getElementById("idCarte").value;
				if ((nume == null)||(nume==""))
				{
					document.getElementById("idCarte").style.background = "red";
					return false;
				}
				
				for (var i = 0; i<= numere.length; i++){
					if (nume.includes(numere[i]))
					{	
						alert("Numele contine cifre!"+ numere[i]);
						return false;
						break;
					}
				document.getElementById("idCarte").style.background = "white";
				return true;
			}

			function validateAutor()
			{
				var nume = document.getElementById("Autor").value;
				if ((nume == null)||(nume==""))
				{
					document.getElementById("Autor").style.background = "red";
					return false;
				}
				
				for (var i = 0; i<= numere.length; i++){
					if (nume.includes(numere[i]))
					{	
						alert("Numele contine cifre!"+ numere[i]);
						return false;
						break;
					}
				document.getElementById("Autor").style.background = "white";
				return true;
			}
			
			function validateTitlu()
			{
				var nume = document.getElementById("Titlu").value;
				if ((nume == null)||(nume==""))
				{
					document.getElementById("Titlu").style.background = "red";
					return false;
				}
			document.getElementById("Titlu").style.background = "white";
			return true;
			}
        </script>
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
    </div>

	<div class="informations2">
		<form method="post" action="insert_table_form_carti.php">
			<strong>Adauga titlul nou</strong><br>
				Nume autor: <input id="Autor" name="Autor" type="text" /><br />
				Titlul cartii: <input id="Titlu" name="Titlu" type="text"/><br/>
			<!--<input name="submit" type="submit"/>-->
			<input type="submit" value="Salvati datele" />
		</form>
        <br>
		</div>
		<div class="empty">
        </div>
       		
		<p><br>
		<img src="funny-library.jpg" alt="about us photo" title="Libraria PRINTRE CARTI"/>
		</p>
	</body>
</html>