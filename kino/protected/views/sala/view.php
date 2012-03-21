<?php
$this->breadcrumbs=array(
	'Sala'=>array('index'),
	$model->idSali,
);

$this->menu=array(
	array('label'=>'Lista Sala', 'url'=>array('index')),
	array('label'=>'Utwórz Sala', 'url'=>array('create')),
	array('label'=>'Edytuj Sala', 'url'=>array('update', 'id'=>$model->idSali)),
	array('label'=>'Usuń Sala', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idSali),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Zarządzaj Sala', 'url'=>array('admin')),
);
?>

<h1>Oglądasz Sala #<?php echo $model->idSali; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idSali',
		'rzedy',
		'miejsca',
	),
)); ?>
