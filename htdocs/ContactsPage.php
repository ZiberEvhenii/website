﻿<html>
<?php
  $url = $_GET['url'];
  echo $url;
?>
<head>
	<meta charset = "utf-8">
	<title>Контакты</title>
	<link rel="stylesheet" type="text/css" href="ContactsStyles.css">
</head>

<body bgcolor="black">	
	<?php include('header.php');?>	
	<?php include('menu.php');?>
		<div id="content">	
			<div id="sidebar">
				<br>
				<label>ИМЯ:</label>	
				<br>						
				<input type="text1" name="login"></input> 	
				<br>
				<label>EMAIL:</label>
				<br>							
				<input type="text1" name="Password"></input> 	
				<br>
				<label>ТЕМА:</label>	
				<br>					
				<input type="text1" name="RePassword"></input> 	
				<br>
				<label>СООБЩЕНИЕ:</label>	
				<br>					
				<textarea name="textArea" name="Message"></textarea> 	
				<br>
				<input type="submit1" value="ОТПРАВИТЬ" onClick='location.href="HomePage.php"'></input>
				<div id="email">
					<h1>Наши контакты</h1>
					<h2 style="text-align:left; text-indent: 20px;"><b>Телефон: <a href="tel:+380 (97) 16 25 888">+380 (97) 16 25 888</a></b>  </h2>
					<h2 style="text-align:left; text-indent: 20px;"><b>EMAIL: <a href="mailto:ziberz@mail.ru">ziberz@mail.ru</a></b>  </h2>
					<h2 style="text-align:left; text-indent: 20px;"><b>Адрес: г. Харьков, Сумская 105</b>  </h2>

				</div>
			</div>
			<div id="main">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d164153.5222906638!2d36.14574365104097!3d49.99450702760941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a09f63ab0f8b%3A0x2d4c18681aa4be0a!2z0KXQsNGA0YzQutC-0LIsINCl0LDRgNGM0LrQvtCy0YHQutCw0Y8g0L7QsdC70LDRgdGC0Yw!5e0!3m2!1sru!2sua!4v1478083267895" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe> 
			</div>
		</div>
	<?php include('footer.php');?>	
</body>
</html> 