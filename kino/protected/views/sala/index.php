<?php
$this->breadcrumbs=array(
	'Salas',
);

$this->menu=array(
	array('label'=>'Create Sala', 'url'=>array('create')),
	array('label'=>'Manage Sala', 'url'=>array('admin')),
);
?>

<h1>Salas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
