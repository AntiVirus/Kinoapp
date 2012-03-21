<?php
$this->breadcrumbs=array(
	'Films',
);

$this->menu=array(
	array('label'=>'Create Film', 'url'=>array('create')),
	array('label'=>'Manage Film', 'url'=>array('admin')),
);
?>

<h1>Films</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
