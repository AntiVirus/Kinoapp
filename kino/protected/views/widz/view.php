<?php
$this->breadcrumbs=array(
	'Widzs'=>array('index'),
	$model->idWidza,
);

$this->menu=array(
	array('label'=>'List Widz', 'url'=>array('index')),
	array('label'=>'Create Widz', 'url'=>array('create')),
	array('label'=>'Update Widz', 'url'=>array('update', 'id'=>$model->idWidza)),
	array('label'=>'Delete Widz', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idWidza),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Widz', 'url'=>array('admin')),
);
?>

<h1>View Widz #<?php echo $model->idWidza; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idWidza',
		'imie',
		'nazwisko',
		'telefon',
		'email',
	),
)); ?>
