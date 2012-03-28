<?
if($_GET['logout']==1){
Yii::app()->user->logout();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="robots" content="all" />
	<meta name="description" content="" /> 
	<meta name="keywords" content="" /> 
	<meta name="language" content="pl" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/kino.css" />
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js" type="text/javascript"></script>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

	<body>	
		<div id="kontenerek">
			<div id="gora">
				<a href="index.php"><img id="logo" src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.jpg" alt="Kino logo" /></a>
			</div>
			<div id="menulogin"><center>
				<ul>
					<li><a href="index.php">Strona główna</a></li>
					<li><a href="index.php?r=film">Repertuar</a></li>
					<li><a href="index.php?r=site/page&view=about">O nas</a></li>
					<li><a href="index.php?r=site/contact">Kontakt</a></li>
					<li><a href="index.php?r=site/page&view=admin">Administracja</a></li>
					<?php 
					if(!Yii::app()->user->isGuest){
					echo '<li><a href="index.php?logout=1">Logout</a></li>';
					} 
					?>
				</ul></center>
			</div>
			<?
echo $content;
?>
			<div id="stopka">
			&copy; Cinema-Town 2012
			</div>
		</div>
		<script type="text/javascript">
			//<![CDATA[
			$("#logo").mouseover(function () { $(this).animate({opacity:0.5}); });
			$("#logo").mouseout(function () { $(this).animate({opacity:1}); });
			$("input").mouseover(function () { $(this).animate({opacity:0.5}); });
			$("input").mouseout(function () { $(this).animate({opacity:1}); });
			//]]>>
		</script>
	</body>
</html>