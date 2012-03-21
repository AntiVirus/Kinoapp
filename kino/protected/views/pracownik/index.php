<?php
$this->breadcrumbs=array(
	'Pracownik',
);

$this->menu=array(
	array('label'=>'Utwórz Pracownik', 'url'=>array('create')),
	array('label'=>'Zarządzaj Pracownik', 'url'=>array('admin')),
);
?>

<h1>Pracownik</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
