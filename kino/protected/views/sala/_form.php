<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sala-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Pola oznaczone <span class="required">*</span> są wymagane.</p>

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
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Utwórz' : 'Zapisz'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->