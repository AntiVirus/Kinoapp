<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bilet-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idSeansu'); ?>
		<?php echo $form->textField($model,'idSeansu'); ?>
		<?php echo $form->error($model,'idSeansu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rzad'); ?>
		<?php echo $form->textField($model,'rzad',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'rzad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'miejsce'); ?>
		<?php echo $form->textField($model,'miejsce'); ?>
		<?php echo $form->error($model,'miejsce'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rodzaj'); ?>
		<?php echo $form->textField($model,'rodzaj',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'rodzaj'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cena'); ?>
		<?php echo $form->textField($model,'cena'); ?>
		<?php echo $form->error($model,'cena'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idWidza'); ?>
		<?php echo $form->textField($model,'idWidza'); ?>
		<?php echo $form->error($model,'idWidza'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idPracownika'); ?>
		<?php echo $form->textField($model,'idPracownika'); ?>
		<?php echo $form->error($model,'idPracownika'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->