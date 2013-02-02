<?php
/* @var $this ContenidosController */
/* @var $model Contenidos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_contenido'); ?>
		<?php echo $form->textField($model,'id_contenido'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_content'); ?>
		<?php echo $form->textField($model,'cod_content',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nom_content'); ?>
		<?php echo $form->textField($model,'nom_content',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'des_content'); ?>
		<?php echo $form->textField($model,'des_content',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'est_content'); ?>
		<?php echo $form->textArea($model,'est_content',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'activo'); ?>
		<?php echo $form->textField($model,'activo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fregistro'); ?>
		<?php echo $form->textField($model,'fregistro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fmodif'); ?>
		<?php echo $form->textField($model,'fmodif'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->