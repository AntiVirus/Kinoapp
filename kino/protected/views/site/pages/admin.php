<?php
if(Yii::app()->user->isGuest){
Yii::app()->user->returnUrl='/kino/index.php?r=site/page&view=admin';
$this->redirect(array('site/login'));
}
$this->pageTitle=Yii::app()->name . ' - Administracja';
$this->breadcrumbs=array(
	'Administracja',
);
?>
<h1>Administracja</h1>


<h1>Witaj ponownie <? echo Yii::app()->user->getState('names'); ?></h1>
<? if(Yii::app()->user->getState('stanowisko')=="Kierownik"){
echo '<p><a href="index.php?r=bilet/admin">Bilety</a><br>
<a href="index.php?r=film/admin">Filmy</a><br>
<a href="index.php?r=sala/admin">Sale</a><br>
<a href="index.php?r=seans/admin">Seanse</a><br>
<a href="index.php?r=widz/admin">Widzowie</a><br>
<a href="index.php?r=pracownik/admin">Pracownicy</a><br>
<a href="index.php?r=gii">Gii code generator</a><br>';
} else {
echo '<p><a href="index.php?r=bilet/create">Bilety</a><br>';
}
?>

</p>

<br />