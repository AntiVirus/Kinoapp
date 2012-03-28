<?php
$this->breadcrumbs=array(
	'Sala'=>array('index'),
	'Utwórz',
);

$this->menu=array(
	array('label'=>'Lista Sala', 'url'=>array('index')),
	array('label'=>'Zarządzaj Sala', 'url'=>array('admin')),
);
?>

<h1>Utwórz Sala</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>