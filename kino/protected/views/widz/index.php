<?php
$this->breadcrumbs=array(
	'Widz',
);

$this->menu=array(
	array('label'=>'Utwórz Widz', 'url'=>array('create')),
	array('label'=>'Zarządzaj Widz', 'url'=>array('admin')),
);
?>

<h1>Widz</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
