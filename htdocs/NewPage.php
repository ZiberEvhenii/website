﻿<html>
<?php
  $url = $_GET['url'];
  echo $url;
?>
<head>
	<meta charset = "utf-8">
	<title>Новость</title>
	<link rel="stylesheet" type="text/css" href="NewStyles.css">
</head>

<body bgcolor="black">
	<div>
		<?php include('header.php');?>	
		<?php include('menu.php');?>
	</div>
	<div id="menu">
		<div id="new">
			<div id="avatar">
				<img src="mainnew.jpg" style="width:100%; height: 100%;box-shadow: 0px 0px 5px #000;">
			</div>
			<div id="inform">
				<h1>Презентация iPhone 7: интриги и разочарования</h1>
				<p>Главные новости для любителей гаджетов пришли этой ночью из Сан-Франциско. Apple презентовала iPhone 7 и новое поколение умных часов AppleWatch.</p>
					<p>В дизайне и габаритах смартфона революционных изменений нет. Добавились лишь новые расцветки. Главные улучшения — внутри! Камера получила обновленный объектив, систему стабилизации и более яркую вспышку. Раньше съемка в темноте считалась одним из главных недостатков "яблочных" гаджетов.</p>
					<p>А еще iPhone стал влагозащищенным. Правда, эксперты говорят, что смартфон по-прежнему боится воды, и экспериментировать с погружениями не стоит. А главным разочарованием презентации стало то, что с панели исчез традиционный разъем для наушников. Теперь придется покупать фирменные или использовать переходник. Немногие оценили и решение сделать сенсорной единственную кнопку на передней панели.</p>
			</div>

		</div>	

	</div>
	<?php include('footer.php');?>	
</body>
</html> 