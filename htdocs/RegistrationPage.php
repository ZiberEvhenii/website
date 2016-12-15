<html>
<?php
  $url = $_GET['url'];
  echo $url;
?>
<head>
	<meta charset = "utf-8">
	<title>Регистрация</title>
	<link rel="stylesheet" type="text/css" href="RegistrationStyles.css">
</head>

<body bgcolor="black">	
		<?php include('header.php');?>	
		<?php include('menu.php');?>
		<div id="content">	
			<div id="form">
				<label>Логин:</label>	
				<br>						
				<input type="text1" name="login"></input> 	
				<br>
				<label>Пароль:</label>
				<br>							
				<input type="text1" name="Password"></input> 	
				<br>
				<label>Повторите пароль:</label>	
				<br>					
				<input type="text1" name="RePassword"></input> 	
				<br>
				<input type="submit" value="Зарегистрироваться" onClick='location.href="HomePage.php"'></input>
				<br>
				<label><a href="UserPage.html">USERPAGE</a></label>
			</div>			
		</div>
	<?php include('footer.php');?>	
</body>
</html> 