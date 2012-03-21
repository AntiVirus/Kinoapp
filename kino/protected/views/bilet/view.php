<?php
$this->breadcrumbs=array(
	'Bilets'=>array('index'),
	$model->idBiletu,
);

$this->menu=array(
	array('label'=>'List Bilet', 'url'=>array('index')),
	array('label'=>'Create Bilet', 'url'=>array('create')),
	array('label'=>'Update Bilet', 'url'=>array('update', 'id'=>$model->idBiletu)),
	array('label'=>'Delete Bilet', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idBiletu),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bilet', 'url'=>array('admin')),
);
?>

<h1>View Bilet #<?php echo $model->idBiletu; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idBiletu',
		'idSeansu',
		'rzad',
		'miejsce',
		'rodzaj',
		'cena',
		'idWidza',
		'idPracownika',
	),
)); ?>
