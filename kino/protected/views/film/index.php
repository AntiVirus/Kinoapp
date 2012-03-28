<?php
$this->breadcrumbs=array(
	'Film',
);

$this->menu=array(
	array('label'=>'Utwórz Film', 'url'=>array('create')),
	array('label'=>'Zarządzaj Film', 'url'=>array('admin')),
);
?>

<h1>Film</h1>

<table id="menulogin">
<?php 
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));


 ?>
</table>

