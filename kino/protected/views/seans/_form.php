<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'seans-form',
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
		<?php echo $form->labelEx($model,'idFilmu'); ?>
		<?php echo $form->textField($model,'idFilmu'); ?>
		<?php echo $form->error($model,'idFilmu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data'); ?>
		<?php echo $form->textField($model,'data'); ?>
		<?php echo $form->error($model,'data'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->