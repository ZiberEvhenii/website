<html>
<?php
  $url = $_GET['url'];
  echo $url;
?>
<head>
	<meta charset = "utf-8">
	<title>Информация пользователя</title>
	<link rel="stylesheet" type="text/css" href="UserStyles.css">
</head>

<body bgcolor="black">
	<div>
		<?php include('header.php');?>	
		<?php include('menu.php');?>
	</div>
	<div id="menu">
		<div id="user">
			<div id="avatar">
				<img src="mainnew.jpg" style="width:100%;height: 100%; box-shadow: 0px 0px 5px #000;">
			</div>
			<div id="inform">
				<input type="submit1" value="изменить" onClick='location.href="HomePage.php"'></input>
				<br>
				<label>ИМЯ:</label>	
				<br>						
				<input type="text1" name="name"></input> 	
				<br>
				<label>ФАМИЛИЯ:</label>
				<br>							
				<input type="text1" name="Password"></input> 	
				<br>
				<label>NICKNAME:</label>	
				<br>					
				<input type="text1" name="RePassword"></input> 	
				<br>
				<label>ДАТА РОЖДЕНИЯ:</label>	
				<br>					
				<input type="text1" name="RePassword"></input> 	
				<br>
				<input type="submit1" value="Сохранить" onClick='location.href="HomePage.php"'></input>
			</div>
		</div>
	</div>
		
	<?php include('footer.php');?>	
</body>
</html> 