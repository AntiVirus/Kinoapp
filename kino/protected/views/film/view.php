<?php
$this->breadcrumbs=array(
	'Films'=>array('index'),
	$model->idFilmu,
);

$this->menu=array(
	array('label'=>'List Film', 'url'=>array('index')),
	array('label'=>'Create Film', 'url'=>array('create')),
	array('label'=>'Update Film', 'url'=>array('update', 'id'=>$model->idFilmu)),
	array('label'=>'Delete Film', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idFilmu),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Film', 'url'=>array('admin')),
);
?>

<h1>View Film #<?php echo $model->idFilmu; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idFilmu',
		'tytul',
		'gatunek',
		'rok',
		'opis',
		'rezyser',
	),
)); ?>
