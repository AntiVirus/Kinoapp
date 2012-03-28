<?php
$this->breadcrumbs=array(
	'Widz'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Lista Widz', 'url'=>array('index')),
	array('label'=>'Utwórz Widz', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('widz-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Zarządzaj Widz</h1>

<p>
Opcjonalnie możesz wprowadzić operator porównania (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
lub <b>=</b>) na początku każdej wyszukiwanej wartości, aby wyspecyfikować jak powinno być wykonane porównanie.
</p>

<?php echo CHtml::link('Wyszukiwanie zaawansowane','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'widz-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idWidza',
		'imie',
		'nazwisko',
		'telefon',
		'email',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
