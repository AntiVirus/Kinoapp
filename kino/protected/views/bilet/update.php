<?php
$this->breadcrumbs=array(
	'Bilet'=>array('index'),
	$model->idBiletu=>array('view','id'=>$model->idBiletu),
	'Edytuj',
);

$this->menu=array(
	array('label'=>'Lista Bilet', 'url'=>array('index')),
	array('label'=>'Utwórz Bilet', 'url'=>array('create')),
	array('label'=>'Zobacz Bilet', 'url'=>array('view', 'id'=>$model->idBiletu)),
	array('label'=>'Zarządzaj Bilet', 'url'=>array('admin')),
);
?>

<h1>Edytuj Bilet <?php echo $model->idBiletu; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>