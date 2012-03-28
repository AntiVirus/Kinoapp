<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bilet-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Pola oznaczone <span class="required">*</span> są wymagane.</p>

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
		<?php $cats=array('normalny'=>'Normalny','ulgowy'=>'Ulgowy','student'=>'Student','senior'=>'Senior');?>
		<?php echo $form->dropDownList($model,'rodzaj',$cats, array('empty' => '--Wybierz--')); ?>
		<?php echo $form->error($model,'rodzaj'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cena'); ?>
		<?php echo $form->textField($model,'cena'); ?>
		<?php echo $form->error($model,'cena'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data'); ?>
		<?php echo $form->textField($model,'data',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'data'); ?>
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
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Utwórz' : 'Zapisz'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->