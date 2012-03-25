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
<p><a href="index.php?r=bilet">Bilety</a><br>
<a href="index.php?r=film">Filmy</a><br>
<a href="index.php?r=sala">Sale</a><br>
<a href="index.php?r=seans">Seanse</a><br>
<a href="index.php?r=widz">Widzowie</a><br>
<a href="index.php?r=pracownik">Pracownicy</a><br>


</p>

<br />