<html>
<?php
  $url = $_GET['url'];
  echo $url;
?>
<head>
    <meta charset = "utf-8">
    <title>Категории</title>
    <link rel="stylesheet" type="text/css" href="CategoriesStyles.css">
</head>

<body bgcolor="black">  
    <?php include('header.php');?>	
	<?php include('menu.php');?>
        <div id="content">  
            <div id="iphone">
                <div id="im">
                    <a href="NewsPage.php">
                        <img src="iphone.jpg" style="width:100%;   height:100%;">
                    </a>
                </div>                
                <div class="itext"><b>iPhone</b></div>
            </div>
            <div id="ipad">
                <div id="im">
                    <a href="NewsPage.php">
                        <img src="ipad.jpg" style="width:100%;  height:100%;">
                    </a>
                </div>
                <div class="itext"><b>iPad</b></div>
            </div>
            <div id="mac">
                <div id="im">
                    <a href="NewsPage.php">
                        <img src="mac.jpg" style="width:100%;  height:100%;">
                    </a>
                </div>
                <div class="itext"><b>Macbook</b></div>
            </div>
            <div id="ios">
                <div id="im">
                    <a href="NewsPage.php">
                        <img src="ios.jpg" style="width:100%; height:100%;">
                    </a>
                </div>
                <div class="itext"><b>iOS</b></div>
            </div>
            
        </div>
    <?php include('footer.php');?>	
</body>
</html> 