<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idSali'); ?>
		<?php echo $form->textField($model,'idSali'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rzedy'); ?>
		<?php echo $form->textField($model,'rzedy'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'miejsca'); ?>
		<?php echo $form->textField($model,'miejsca'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Szukaj'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->