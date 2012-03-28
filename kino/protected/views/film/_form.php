<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'film-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Pola oznaczone <span class="required">*</span> są wymagane.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tytul'); ?>
		<?php echo $form->textField($model,'tytul',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'tytul'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gatunek'); ?>
		<?php echo $form->textField($model,'gatunek',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'gatunek'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rok'); ?>
		<?php echo $form->textField($model,'rok'); ?>
		<?php echo $form->error($model,'rok'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'opis'); ?>
		<?php echo $form->textArea($model,'opis',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'opis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rezyser'); ?>
		<?php echo $form->textField($model,'rezyser',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'rezyser'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imageUrl'); ?>
		<?php echo $form->textField($model,'imageUrl',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'imageUrl'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Utwórz' : 'Zapisz'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->