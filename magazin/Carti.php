<!DOCTYPE html>
<html>
<head>
        <title>Magazinul Meu</title>
        <link rel="stylesheet" href="style.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
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

    <div class="slideshow-container">
    <div class="mySlides fade">
    <div class="numbertext">1 /10</div>
    <img src="eliade-maitreyi.jpg" style="width:30%">
    <p> Autor: Mircea Eliade<br>
    Titlu: "Maitreyi" <br>
    Pret: 45 lei</p>
    </div>

    <div class="mySlides fade">
    <div class="numbertext">2 / 10</div>
    <img src="placeri vinovate.jpg" style="width:25%">
    <p> Autor: Dan C.Mihaescu<br>
    Titlu: "Placeri vinovate si datorii implinite" <br>
    Pret: 42 lei</p>
    </div>

    <div class="mySlides fade">
    <div class="numbertext">3 / 10</div>
    <img src="padureanca.jpg" style="width:20%">
    <p> Autor: Augustin Buzura<br>
    Titlu: "Padureanca" <br>
    Pret: 37 lei</p>
    </div>

    <div class="mySlides fade">
    <div class="numbertext">4 / 10</div>
    <img src="visniec.jpg" style="width:27%">
    <p> Autor: Matei Visniec<br>
    Titlu: "Trois nuits avec Madox" <br>
    Pret: 52 lei</p>
    </div>

    <div class="mySlides fade">
    <div class="numbertext">5 / 10</div>
    <img src="sadoveanu.jpg" style="width:25%">
    <p> Autor: Mihail Sadoveanu<br>
    Titlu: "Pastile blajinilor" <br>
    Pret: 32 lei</p>
    </div>

    <div class="mySlides fade">
    <div class="numbertext">6 / 10</div>
    <img src="calinescu.jpg" style="width:30%">
    <p> Autor: George Calinescu	<br>
    Titlu: "Viata lui Ion Creanga" <br>
    Pret: 55 lei</p>
    </div>

    <div class="mySlides fade">
    <div class="numbertext">7 / 10</div>
    <img src="divanul.jpg" style="width:25%">
    <p> Autor: Dimitrie Cantemir<br>
    Titlu: "Divanul" <br>
    Pret: 30 lei</p>
    </div>

    <div class="mySlides fade">
    <div class="numbertext">8 / 10</div>
    <img src="s.fl.marian.jpg" style="width:25%">
    <p> Autor: Simion Florea Marian<br>
    Titlu: "Sarbatorile la romani" <br>
    Pret: 40 lei</p>
    </div>

    <div class="mySlides fade">
    <div class="numbertext">9 / 10</div>
    <img src="ion.jpg" style="width:25%">
    <p> Autor: Liviu Rebreanu<br>
    Titlu: "Ion" <br>
    Pret: 25 lei</p>
    </div>

    <div class="mySlides fade">
    <div class="numbertext">10 / 10</div>
    <img src="la medeleni.jpg" style="width:25%">
    <p> Autor: Ionel Teodoreanu<br>
    Titlu: "La Medeleni" <br>
    Pret: 60 lei</p>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
    <span class="dot" onclick="currentSlide(5)"></span>
    <span class="dot" onclick="currentSlide(6)"></span>
    <span class="dot" onclick="currentSlide(7)"></span>
    <span class="dot" onclick="currentSlide(8)"></span>
    <span class="dot" onclick="currentSlide(9)"></span>
    <span class="dot" onclick="currentSlide(10)"></span>
    </div>

    <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
    showSlides(slideIndex += n);
    }

    function currentSlide(n) {
    showSlides(slideIndex = n);
    }

    function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    }
    </script>
  
    <div class="books">
		<table>
			<tr>
				<td>Id Carte</td>
				<td>Autor</td>
				<td>Titlu</td>
                <td>Pret</td>
			</tr>
		<?php 
			include 'connect_database.php';
			 
			$sql = "SELECT idCarte, Autor, Titlu, Pret FROM carti ORDER BY idCarte";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc())
			{
				echo "<tr><td> ". $row["idCarte"]. " </td><td> ". $row["Autor"]. " </td><td> " . $row["Titlu"] . "</td><td> " . $row["Pret"] . "</td></tr>";
			}
			} else {
				echo "0 results";
			}
			$conn->close();
        ?>
		<table>
        <br>
        </div>

    </body>
</html>