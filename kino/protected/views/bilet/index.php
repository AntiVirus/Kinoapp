<?php
$this->breadcrumbs=array(
	'Bilet',
);

$this->menu=array(
	array('label'=>'Utwórz Bilet', 'url'=>array('create')),
	array('label'=>'Zarządzaj Bilet', 'url'=>array('admin')),
);
?>

<h1>Bilet</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
