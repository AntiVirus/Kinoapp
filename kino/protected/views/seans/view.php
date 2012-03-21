<?php
$this->breadcrumbs=array(
	'Seans'=>array('index'),
	$model->idSeansu,
);

$this->menu=array(
	array('label'=>'Lista Seans', 'url'=>array('index')),
	array('label'=>'Utwórz Seans', 'url'=>array('create')),
	array('label'=>'Edytuj Seans', 'url'=>array('update', 'id'=>$model->idSeansu)),
	array('label'=>'Usuń Seans', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idSeansu),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Zarządzaj Seans', 'url'=>array('admin')),
);
?>

<h1>Oglądasz Seans #<?php echo $model->idSeansu; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idSeansu',
		'idSali',
		'idFilmu',
		'data',
	),
)); ?>
