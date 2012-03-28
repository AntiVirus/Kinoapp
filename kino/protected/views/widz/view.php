<?php
$this->breadcrumbs=array(
	'Widz'=>array('index'),
	$model->idWidza,
);

$this->menu=array(
	array('label'=>'Lista Widz', 'url'=>array('index')),
	array('label'=>'Utwórz Widz', 'url'=>array('create')),
	array('label'=>'Edytuj Widz', 'url'=>array('update', 'id'=>$model->idWidza)),
	array('label'=>'Usuń Widz', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idWidza),'confirm'=>'Czy na pewno chcesz usunąć?')),
	array('label'=>'Zarządzaj Widz', 'url'=>array('admin')),
);
?>

<h1>Oglądasz Widz #<?php echo $model->idWidza; ?></h1>

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
