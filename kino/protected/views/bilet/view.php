<?php
$this->breadcrumbs=array(
	'Bilet'=>array('index'),
	$model->idBiletu,
);

$this->menu=array(
	array('label'=>'Lista Bilet', 'url'=>array('index')),
	array('label'=>'Utwórz Bilet', 'url'=>array('create')),
	array('label'=>'Edytuj Bilet', 'url'=>array('update', 'id'=>$model->idBiletu)),
	array('label'=>'Usuń Bilet', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idBiletu),'confirm'=>'Czy na pewno chcesz usunąć?')),
	array('label'=>'Zarządzaj Bilet', 'url'=>array('admin')),
);
?>

<h1>Oglądasz Bilet #<?php echo $model->idBiletu; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idBiletu',
		'idSeansu',
		'rzad',
		'miejsce',
		'rodzaj',
		'cena',
		'data',
		'idWidza',
		'idPracownika',
	),
)); ?>
