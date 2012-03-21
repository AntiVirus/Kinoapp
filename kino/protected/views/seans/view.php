<?php
$this->breadcrumbs=array(
	'Seans'=>array('index'),
	$model->idSeansu,
);

$this->menu=array(
	array('label'=>'List Seans', 'url'=>array('index')),
	array('label'=>'Create Seans', 'url'=>array('create')),
	array('label'=>'Update Seans', 'url'=>array('update', 'id'=>$model->idSeansu)),
	array('label'=>'Delete Seans', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idSeansu),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Seans', 'url'=>array('admin')),
);
?>

<h1>View Seans #<?php echo $model->idSeansu; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idSeansu',
		'idSali',
		'idFilmu',
		'data',
	),
)); ?>
