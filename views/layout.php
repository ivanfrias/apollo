<!DOCTYPE html>
<html>
<head>
	<title>Grupo de Teatro Apollo</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="css/apollo.css"/>
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
	<meta charset="UTF-8">
</head>
<body>
	  
	<div style="width: 900px; margin-left: auto; margin-right: auto;">
		<div style="position: fixed; top: 0px; width: 900px; z-index:1;">
			<img src="images/header.png" style="width: 100%;  height: 90px;">			
		</div>
		
		<div style="position: fixed; top: 90px; width: 450px;">
			<img id="lights_img" src="images/lights.png"/>
		    <div id="gallery_container">
			  <div class="w3-content w3-display-container">
				  <div class="w3-display-container mySlides">
					  <img src="images/img_fjords.jpg" style="width:100%;height: 100%;">
					  <div class="w3-display-bottom w3-container w3-black">
						  Trolltunga, Norway
					  </div>
				  </div>
			
				  <div class="w3-display-container mySlides">
					  <img src="images/img_lights.jpg" style="width:100%;height: 100%;">
					  <div class="w3-display-bottom w3-container w3-black">
						  Trolltunga, Norway
					  </div>
				  </div>
			
				  <div class="w3-display-container mySlides">
					  <img src="images/img_lights.jpg" style="width:100%;height: 100%;">
					  <div class="w3-display-bottom w3-container w3-black">
						  Trolltunga, Norway
					  </div>
				  </div>
			
				  <div class="w3-display-container mySlides">
					  <img src="images/img_mountains.jpg" style="width:100%;height: 100%;">
					  <div class="w3-display-bottom w3-container w3-black">
						  Trolltunga, Norway
					  </div>
				  </div>
			
				  <div class="w3-display-container mySlides">
					  <img src="images/img_forest.jpg" style="width:100%;height: 100%;">
					  <div class="w3-display-bottom w3-container w3-black">
						  Trolltunga, Norway
					  </div>
				  </div>

				  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
				  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
			  </div>
		
			  <script>
				  var slideIndex = 1;
				  showDivs(slideIndex);

				  function plusDivs(n) {
					  showDivs(slideIndex += n);
				  }

				  function showDivs(n) {
					  var i;
					  var x = document.getElementsByClassName("mySlides");
					  if (n > x.length) {slideIndex = 1}    
					  if (n < 1) {slideIndex = x.length}
					  for (i = 0; i < x.length; i++) {
						  x[i].style.display = "none";  
					  }
					  x[slideIndex-1].style.display = "block";  
				  }
			  </script>
		  </div>
		</div>
		
		<div style="position: fixed; left: 620px; width: 450px; height: 10px; top:90px; z-index: 1; background-color: grey;"></div>
		
		<div style="position: fixed; left: 620px; width: 450px; top: 90px;z-index: 1;">
			<div class="w3-bar w3-grey" style="font-size: 10px; margin-top:10px;">
				<a href="?controller=about&action=index" class="w3-bar-item w3-button">O Apollo</a>
				<a href="?controller=marathon&action=index" class="w3-bar-item w3-button">Meia Maratona</a>
				<a href="?controller=historic&action=index" class="w3-bar-item w3-button">Historial</a>
				<a href="?controller=act&action=index" class="w3-bar-item w3-button">Repertorio</a>
				<a href="?controller=contacts&action=index" class="w3-bar-item w3-button">Contactos</a>
			</div>
		</div>
		
		<div id="content_text_container" style="position: relative; top: 120px; width: 450px; left: 450px;">
			  <?php require_once('routes.php'); ?>
		</div>

		<div id="footer" style="position: fixed; bottom: 0px;height: 100px; width: 900px; z-index: 1;">
			<img src="images/logo.png" style="position: absolute; left: 20px; bottom: 10px; width: 70px; height: 90px;">
			<img src="images/ccrpr_logo.png" style="position: absolute; left: 100px; bottom: 20px; width: 90px; height: 60px;">
		</div>
	</div>
	
	<!--
		  <div style="position:fixed; top:0px; left:0px; height: 70px; right:0px;">
			  <img alt=" " src="images/header.png" style="width: 100%;  height: 70px;">
		  </div>
		

		  <div class="w3-row" style="position: fixed; top: 70px; bottom:30px; right:0px; left: 0px; overflow: scroll;">
				  <div class="w3-col s6">
					  <div id="lights_container">
					  	  <img id="lights_img" src="images/lights.png"/>
						  <div id="gallery_container">
							  <div class="w3-content w3-display-container">
								  <div class="w3-display-container mySlides">
									  <img src="images/img_fjords.jpg" style="width:100%;height: 100%;">
									  <div class="w3-display-bottom w3-container w3-black">
										  Trolltunga, Norway
									  </div>
								  </div>
							
								  <div class="w3-display-container mySlides">
									  <img src="images/img_lights.jpg" style="width:100%;height: 100%;">
									  <div class="w3-display-bottom w3-container w3-black">
										  Trolltunga, Norway
									  </div>
								  </div>
							
								  <div class="w3-display-container mySlides">
									  <img src="images/img_lights.jpg" style="width:100%;height: 100%;">
									  <div class="w3-display-bottom w3-container w3-black">
										  Trolltunga, Norway
									  </div>
								  </div>
							
								  <div class="w3-display-container mySlides">
									  <img src="images/img_mountains.jpg" style="width:100%;height: 100%;">
									  <div class="w3-display-bottom w3-container w3-black">
										  Trolltunga, Norway
									  </div>
								  </div>
							
								  <div class="w3-display-container mySlides">
									  <img src="images/img_forest.jpg" style="width:100%;height: 100%;">
									  <div class="w3-display-bottom w3-container w3-black">
										  Trolltunga, Norway
									  </div>
								  </div>

								  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
								  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
							  </div>
						
							  <script>
								  var slideIndex = 1;
								  showDivs(slideIndex);

								  function plusDivs(n) {
									  showDivs(slideIndex += n);
								  }

								  function showDivs(n) {
									  var i;
									  var x = document.getElementsByClassName("mySlides");
									  if (n > x.length) {slideIndex = 1}    
									  if (n < 1) {slideIndex = x.length}
									  for (i = 0; i < x.length; i++) {
										  x[i].style.display = "none";  
									  }
									  x[slideIndex-1].style.display = "block";  
								  }
							  </script>
						  </div>
						 </div>
				  </div>
				  <div class="w3-col s6">
						  <div id="menubar" class="w3-bar w3-grey">
							  <a href="?controller=about&action=index" class="w3-bar-item w3-button">O Apollo</a>
							  <a href="?controller=marathon&action=index" class="w3-bar-item w3-button">Meia Maratona</a>
							  <a href="?controller=historic&action=index" class="w3-bar-item w3-button">Historial</a>
							  <a href="?controller=act&action=index" class="w3-bar-item w3-button">Repertorio</a>
							  <a href="?controller=contacts&action=index" class="w3-bar-item w3-button">Contactos</a>
						  </div>

						  <div id="content_container">
							  <div id="content_text_container">

								  <?php require_once('routes.php'); ?>

							  </div>
						  </div>
				  </div>	
		  </div>				
		  

		<div id="footer" style="position:fixed; bottom:0px; height:80px; left:0px; right:0px;">
			<img src="images/logo.png" style="width: 50px; height: 70px; position: absolute; left: 30px; bottom: 10px;">
			<img src="images/ccrpr_logo.png" style="width: 90px; height: 60px; position: absolute; left: 90px; bottom: 10px;">
		</div>
		-->
		

  </body>
</html>