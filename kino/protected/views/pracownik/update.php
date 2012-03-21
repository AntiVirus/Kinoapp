<?php
$this->breadcrumbs=array(
	'Pracowniks'=>array('index'),
	$model->idPracownika=>array('view','id'=>$model->idPracownika),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pracownik', 'url'=>array('index')),
	array('label'=>'Create Pracownik', 'url'=>array('create')),
	array('label'=>'View Pracownik', 'url'=>array('view', 'id'=>$model->idPracownika)),
	array('label'=>'Manage Pracownik', 'url'=>array('admin')),
);
?>

<h1>Update Pracownik <?php echo $model->idPracownika; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>