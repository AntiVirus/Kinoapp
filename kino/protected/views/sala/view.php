<?php
$this->breadcrumbs=array(
	'Salas'=>array('index'),
	$model->idSali,
);

$this->menu=array(
	array('label'=>'List Sala', 'url'=>array('index')),
	array('label'=>'Create Sala', 'url'=>array('create')),
	array('label'=>'Update Sala', 'url'=>array('update', 'id'=>$model->idSali)),
	array('label'=>'Delete Sala', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idSali),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sala', 'url'=>array('admin')),
);
?>

<h1>View Sala #<?php echo $model->idSali; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idSali',
		'rzedy',
		'miejsca',
	),
)); ?>
