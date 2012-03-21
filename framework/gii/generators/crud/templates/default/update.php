<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php
echo "<?php\n";
$nameColumn=$this->guessNameColumn($this->tableSchema->columns);
$label=$this->class2name($this->modelClass);
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	\$model->{$nameColumn}=>array('view','id'=>\$model->{$this->tableSchema->primaryKey}),
	'Edytuj',
);\n";
?>

$this->menu=array(
	array('label'=>'Lista <?php echo $this->modelClass; ?>', 'url'=>array('index')),
	array('label'=>'Utwórz <?php echo $this->modelClass; ?>', 'url'=>array('create')),
	array('label'=>'Zobacz <?php echo $this->modelClass; ?>', 'url'=>array('view', 'id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>)),
	array('label'=>'Zarządzaj <?php echo $this->modelClass; ?>', 'url'=>array('admin')),
);
?>

<h1>Edytuj <?php echo $this->modelClass." <?php echo \$model->{$this->tableSchema->primaryKey}; ?>"; ?></h1>

<?php echo "<?php echo \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>