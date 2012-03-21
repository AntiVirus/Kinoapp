<?php
$this->breadcrumbs=array(
	'Pracowniks'=>array('index'),
	$model->idPracownika,
);

$this->menu=array(
	array('label'=>'List Pracownik', 'url'=>array('index')),
	array('label'=>'Create Pracownik', 'url'=>array('create')),
	array('label'=>'Update Pracownik', 'url'=>array('update', 'id'=>$model->idPracownika)),
	array('label'=>'Delete Pracownik', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPracownika),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pracownik', 'url'=>array('admin')),
);
?>

<h1>View Pracownik #<?php echo $model->idPracownika; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPracownika',
		'imie',
		'nazwisko',
		'stanowisko',
		'login',
		'haslo',
	),
)); ?>
