<html>
<?php
  $url = $_GET['url'];
  echo $url;
?>
<head>
	<meta charset = "utf-8">
	<title>Новостной сайт</title>
	<link rel="stylesheet" type="text/css" href="HomeStyles.css">
</head>

<body bgcolor="black">
	<div>
		<?php include('header.php');?>	
		<?php include('menu.php');?>	
	</div>
	<div id="menu">
		<div class="slideshow-container">
			<div class="mySlides fade">
  				<img src="1.jpg" style="width:100%;height: 100%;">
			</div>

			<div class="mySlides fade">
  				<img src="2.jpg" style="width:100%; height: 100%;">
			</div>

			<div class="mySlides fade">
  				<img src="3.jpg" style="width:100%;height: 100%;">
			</div>

			<a class="prev" onclick="plusSlides(-1)">❮</a>
			<a class="next" onclick="plusSlides(1)">❯</a>
		
		

		<div style="text-align:center">
  			<span class="dot" onclick="currentSlide(1)"></span> 
  			<span class="dot" onclick="currentSlide(2)"></span> 
  			<span class="dot" onclick="currentSlide(3)"></span> 
		</div>
		</div>
		<script>
			var slideIndex = 0;
			showSlides(slideIndex);
			showSlide();
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
			function showSlide() {
			    var i;
			    var slides = document.getElementsByClassName("mySlides");
			    var dots = document.getElementsByClassName("dot");
			    for (i = 0; i < slides.length; i++) {
			       slides[i].style.display = "none";  
			    }
			    slideIndex++;
			    if (slideIndex> slides.length) {slideIndex = 1}    
			    for (i = 0; i < dots.length; i++) {
			        dots[i].className = dots[i].className.replace(" active", "");
			    }
			    slides[slideIndex-1].style.display = "block";  
			    dots[slideIndex-1].className += " active";
			    setTimeout(showSlide, 2000); // Change image every 2 seconds
			}
		</script>
	</div>
	<div id="content">
		<div id="cont">		
			<div id="top">
				<div id="im"><img src="mainnew.jpg" style="width:100%; height: 100%;box-shadow: 0px 0px 5px #000;"></div>				
				<b>Презентация iPhone 7: интриги и первые разочарования</b>
				<div id="t1">
					<p>Главные новости для любителей гаджетов пришли этой ночью из Сан-Франциско. Apple презентовала iPhone 7 и новое поколение умных часов AppleWatch.</p>
					<p>В дизайне и габаритах смартфона революционных изменений нет. Добавились лишь новые расцветки. Главные улучшения — внутри! Камера получила обновленный объектив, систему стабилизации и более яркую вспышку. Раньше съемка в темноте считалась одним из главных недостатков "яблочных" гаджетов.</p>
					<p>А еще iPhone стал влагозащищенным. Правда, эксперты говорят, что смартфон по-прежнему боится воды, и экспериментировать с погружениями не стоит. А главным разочарованием презентации стало то, что с панели исчез традиционный разъем для наушников. Теперь придется покупать фирменные или использовать переходник. Немногие оценили и решение сделать сенсорной единственную кнопку на передней панели.</p>
				</div>
			</div>
			<div id="down">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/G-fgnl5a7Yc" frameborder="0" allowfullscreen></iframe>
			</div>	
		</div>
		<div id="news">
			<div id="new">
				<div id ="icon">
					<img src="mainnew.jpg" style="width:100%; height: 100%;box-shadow: 0px 0px 5px #000;">
				</div>
				<div id="newtext">
					<b>Презентация iPhone 7: интриги и первые разочарования</b>
				</div>
			</div>
			<div id="new">
				<div id ="icon">
					<img src="mainnew.jpg" style="width:100%; height: 100%;box-shadow: 0px 0px 5px #000;">
				</div>
				<div id="newtext">
					<b>Презентация iPhone 7: интриги и первые разочарования</b>
				</div>
			</div>
			<div id="new">
				<div id ="icon">
					<img src="mainnew.jpg" style="width:100%; height: 100%; box-shadow: 0px 0px 5px #000;">
				</div>
				<div id="newtext">
					<b>Презентация iPhone 7: интриги и первые разочарования</b>
				</div>
			</div>
			<div id="new">
				<div id ="icon">
					<img src="mainnew.jpg" style="width:100%;height: 100%;box-shadow: 0px 0px 5px #000;">
				</div>
				<div id="newtext">
					<b>Презентация iPhone 7: интриги и первые разочарования</b>
				</div>
			</div>
		</div>		

	</div>
	<?php include('footer.php');?>	
</body>
</html> 