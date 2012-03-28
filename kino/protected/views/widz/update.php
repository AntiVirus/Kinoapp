<?php
$this->breadcrumbs=array(
	'Widz'=>array('index'),
	$model->idWidza=>array('view','id'=>$model->idWidza),
	'Edytuj',
);

$this->menu=array(
	array('label'=>'Lista Widz', 'url'=>array('index')),
	array('label'=>'Utwórz Widz', 'url'=>array('create')),
	array('label'=>'Zobacz Widz', 'url'=>array('view', 'id'=>$model->idWidza)),
	array('label'=>'Zarządzaj Widz', 'url'=>array('admin')),
);
?>

<h1>Edytuj Widz <?php echo $model->idWidza; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>