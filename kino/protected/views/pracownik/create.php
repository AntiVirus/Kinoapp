<?php
$this->breadcrumbs=array(
	'Pracownik'=>array('index'),
	'Utwórz',
);

$this->menu=array(
	array('label'=>'Lista Pracownik', 'url'=>array('index')),
	array('label'=>'Zarządzaj Pracownik', 'url'=>array('admin')),
);
?>

<h1>Utwórz Pracownik</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>