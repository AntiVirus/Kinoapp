<?php
$this->breadcrumbs=array(
	'Seans',
);

$this->menu=array(
	array('label'=>'Utwórz Seans', 'url'=>array('create')),
	array('label'=>'Zarządzaj Seans', 'url'=>array('admin')),
);
?>

<h1>Seans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
