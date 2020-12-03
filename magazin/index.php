<!DOCTYPE html>
<html>
    <head>
        <title>Magazinul Meu</title>
        <link rel="stylesheet" href="style.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <script type="text/javascript">
			function checkform()
			{
				if (validateLastName() && validateFirstName() && validateEmail("Email"))
				return true;
			}
			
			var numere = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
			
			function validateLastName()
			{
				var nume = document.getElementById(LastName").value;
				if ((nume == null)||(nume==""))
				{
					document.getElementById("LastName").style.background = "red";
					return false;
				}
				
				for (var i = 0; i<= numere.length; i++){
					if (nume.includes(numere[i]))
					{	
						alert("Numele contine cifre!"+ numere[i]);
						return false;
						break;
					}
				}
				document.getElementById("LastName").style.background = "white";
				return true;
			}
			
			function validateFirstName()
			{
				var nume = document.getElementById("FirstName").value;
				if ((nume == null)||(nume==""))
				{
					document.getElementById("FirstName").style.background = "red";
					return false;
				}
			document.getElementById("FirstName").style.background = "white";
			return true;
			}

			function validateEmail(){
				var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
				var emailField = document.getElementById("Email");
				if (reg.test(emailField.value) == false) 
				{
					document.getElementById("Email").style.background = "red";
					alert('Invalid Email Address');
					return false;
				}
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
        <img/>
        </div>
		
        <div class="informations2">
		<form method="post" action="insert_table_form.php">
			<strong>Intra in clubul nostru:</strong><br>
				Nume: <input id="LastName" name="LastName" type="text" /><br />
				Prenume: <input id="FirstName" name="FirstName" type="text"/><br/>
				Telefon: <input id="Phone" name="Phone" type="text"/><br/>
				E-mail: <input id="Email" name="Email" type="text"/><br/>
			<!--<input name="submit" type="submit"/>-->
			<input type="submit" value="Salvati Datele" />
		</form>
        <br>
        </div>
    </body>
</html>