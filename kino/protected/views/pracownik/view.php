<?php
$this->breadcrumbs=array(
	'Pracownik'=>array('index'),
	$model->idPracownika,
);

$this->menu=array(
	array('label'=>'Lista Pracownik', 'url'=>array('index')),
	array('label'=>'Utwórz Pracownik', 'url'=>array('create')),
	array('label'=>'Edytuj Pracownik', 'url'=>array('update', 'id'=>$model->idPracownika)),
	array('label'=>'Usuń Pracownik', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPracownika),'confirm'=>'Czy na pewno chcesz usunąć?')),
	array('label'=>'Zarządzaj Pracownik', 'url'=>array('admin')),
);
?>

<h1>Oglądasz Pracownik #<?php echo $model->idPracownika; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'imie',
		'nazwisko',
		'stanowisko',
		'login',
	),
)); ?>
