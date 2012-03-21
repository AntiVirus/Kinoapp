<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sala-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idSali'); ?>
		<?php echo $form->textField($model,'idSali'); ?>
		<?php echo $form->error($model,'idSali'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rzedy'); ?>
		<?php echo $form->textField($model,'rzedy'); ?>
		<?php echo $form->error($model,'rzedy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'miejsca'); ?>
		<?php echo $form->textField($model,'miejsca'); ?>
		<?php echo $form->error($model,'miejsca'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->