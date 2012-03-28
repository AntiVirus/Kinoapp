<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pracownik-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Pola oznaczone <span class="required">*</span> są wymagane.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'imie'); ?>
		<?php echo $form->textField($model,'imie',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'imie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nazwisko'); ?>
		<?php echo $form->textField($model,'nazwisko',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'nazwisko'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stanowisko'); ?>
		<?php $cats=array('kasjer'=>'Kasjer','kierownik'=>'Kierownik');?>
		<?php echo $form->dropDownList($model,'stanowisko',$cats, array('empty' => '--Wybierz--')); ?>
		<?php echo $form->error($model,'stanowisko'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'login'); ?>
		<?php echo $form->textField($model,'login',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'login'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'haslo'); ?>
		<?php echo $form->textField($model,'haslo',array('size'=>30,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'haslo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Utwórz' : 'Zapisz'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->