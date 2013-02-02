<?php
/* @var $this ContenidosController */
/* @var $model Contenidos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contenidos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_content'); ?>
		<?php echo $form->textField($model,'cod_content',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'cod_content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_content'); ?>
		<?php echo $form->textField($model,'nom_content',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nom_content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'des_content'); ?>
		<?php echo $form->textField($model,'des_content',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'des_content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'est_content'); ?>
		<?php echo $form->textArea($model,'est_content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'est_content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'activo'); ?>
		<?php echo $form->textField($model,'activo'); ?>
		<?php echo $form->error($model,'activo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fregistro'); ?>
		<?php echo $form->textField($model,'fregistro'); ?>
		<?php echo $form->error($model,'fregistro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fmodif'); ?>
		<?php echo $form->textField($model,'fmodif'); ?>
		<?php echo $form->error($model,'fmodif'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->