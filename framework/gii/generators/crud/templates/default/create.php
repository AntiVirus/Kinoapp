<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php
echo "<?php\n";
$label=$this->class2name($this->modelClass);
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	'Utwórz',
);\n";
?>

$this->menu=array(
	array('label'=>'Lista <?php echo $this->modelClass; ?>', 'url'=>array('index')),
	array('label'=>'Zarządzaj <?php echo $this->modelClass; ?>', 'url'=>array('admin')),
);
?>

<h1>Utwórz <?php echo $this->modelClass; ?></h1>

<?php echo "<?php echo \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>
