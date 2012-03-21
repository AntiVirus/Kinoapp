<?php
$this->breadcrumbs=array(
	'Pracownik'=>array('index'),
	$model->idPracownika=>array('view','id'=>$model->idPracownika),
	'Edytuj',
);

$this->menu=array(
	array('label'=>'Lista Pracownik', 'url'=>array('index')),
	array('label'=>'Utwórz Pracownik', 'url'=>array('create')),
	array('label'=>'Zobacz Pracownik', 'url'=>array('view', 'id'=>$model->idPracownika)),
	array('label'=>'Zarządzaj Pracownik', 'url'=>array('admin')),
);
?>

<h1>Edytuj Pracownik <?php echo $model->idPracownika; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>