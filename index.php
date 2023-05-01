<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Accueil</title>
</head>
<body>
<?php include ('header.php')?> 
<?php include ('nav.php')?> 

<script>
  const menuHamburger = document.querySelector(".menu-hamburger")
  const navLinks = document.querySelector(".nav-links")

  menuHamburger.addEventListener('click',()=>{
  navLinks.classList.toggle('menu-actif')
  })
</script>
 

  <div class="container"> 
	  <div class="slideshow">
	  	<div id="slide-1" class="slide">
	  		<a href="#slide-3"></a>
	  		<a href="#slide-2"></a>
	  		<img src="img/diaporama-1.jpg" alt="1ere image du diaporama">
		  </div>
		  <div id="slide-2" class="slide">
			  <a href="#slide-1"></a>
  			<a href="#slide-3"></a>
	  		<img src="img/diaporama-2.jpg" alt="2eme image du diaporama">
	  	</div>
	  	<div id="slide-3" class="slide">
	  		<a href="#slide-2"></a>
	  		<a href="#slide-1"></a>
	  		<img src="img/diaporama-3.jpg" alt="3eme image du diaporama">
  		</div>
    </div>
  </div>


  <div class="desc-f1">
     <p class="desc-f1-titre">
       C'est quoi la <a href="https://www.formula1.com">F1</a>
     </p>
   <br>
     <p>
       La Formule 1, communément abrégée en F1 est un sport automobile. Elle est considérée comme la catégorie reine du sport automobile et plus particulierement des monoplaces. 
      </p>
   <br>
     <p>
        Le Championnat du monde de formule 1 prend places sur une vingtaine de circuit partout sur la planète sur les quel s'affronte 20 pilotes et 10 écuries
     </p>
  </div>
  <?php include('footer.php'); ?>
</body>
</html>
