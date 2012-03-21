<?php
$this->breadcrumbs=array(
	'Bilet'=>array('index'),
	'Utwórz',
);

$this->menu=array(
	array('label'=>'Lista Bilet', 'url'=>array('index')),
	array('label'=>'Zarządzaj Bilet', 'url'=>array('admin')),
);
?>

<h1>Utwórz Bilet</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>