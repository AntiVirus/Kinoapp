<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idSeansu'); ?>
		<?php echo $form->textField($model,'idSeansu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idSali'); ?>
		<?php echo $form->textField($model,'idSali'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idFilmu'); ?>
		<?php echo $form->textField($model,'idFilmu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data'); ?>
		<?php echo $form->textField($model,'data'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Szukaj'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->