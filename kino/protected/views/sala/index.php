<?php
$this->breadcrumbs=array(
	'Sala',
);

$this->menu=array(
	array('label'=>'Utwórz Sala', 'url'=>array('create')),
	array('label'=>'Zarządzaj Sala', 'url'=>array('admin')),
);
?>

<h1>Sala</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
