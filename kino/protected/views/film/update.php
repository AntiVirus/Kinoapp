<?php
$this->breadcrumbs=array(
	'Film'=>array('index'),
	$model->idFilmu=>array('view','id'=>$model->idFilmu),
	'Edytuj',
);

$this->menu=array(
	array('label'=>'Lista Film', 'url'=>array('index')),
	array('label'=>'Utwórz Film', 'url'=>array('create')),
	array('label'=>'Zobacz Film', 'url'=>array('view', 'id'=>$model->idFilmu)),
	array('label'=>'Zarządzaj Film', 'url'=>array('admin')),
);
?>

<h1>Edytuj Film <?php echo $model->idFilmu; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>