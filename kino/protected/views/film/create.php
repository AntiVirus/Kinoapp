<?php
$this->breadcrumbs=array(
	'Film'=>array('index'),
	'Utwórz',
);

$this->menu=array(
	array('label'=>'Lista Film', 'url'=>array('index')),
	array('label'=>'Zarządzaj Film', 'url'=>array('admin')),
);
?>

<h1>Utwórz Film</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>