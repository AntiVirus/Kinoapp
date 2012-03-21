<?php
$this->breadcrumbs=array(
	'Film'=>array('index'),
	$model->idFilmu,
);

$this->menu=array(
	array('label'=>'Lista Film', 'url'=>array('index')),
	array('label'=>'Utwórz Film', 'url'=>array('create')),
	array('label'=>'Edytuj Film', 'url'=>array('update', 'id'=>$model->idFilmu)),
	array('label'=>'Usuń Film', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idFilmu),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Zarządzaj Film', 'url'=>array('admin')),
);
?>

<h1>Oglądasz Film #<?php echo $model->idFilmu; ?></h1>

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
