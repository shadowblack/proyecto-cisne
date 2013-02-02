<?php
/* @var $this ContenidosController */
/* @var $data Contenidos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_contenido')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_contenido), array('view', 'id'=>$data->id_contenido)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_content')); ?>:</b>
	<?php echo CHtml::encode($data->cod_content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_content')); ?>:</b>
	<?php echo CHtml::encode($data->nom_content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('des_content')); ?>:</b>
	<?php echo CHtml::encode($data->des_content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('est_content')); ?>:</b>
	<?php echo CHtml::encode($data->est_content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fregistro')); ?>:</b>
	<?php echo CHtml::encode($data->fregistro); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fmodif')); ?>:</b>
	<?php echo CHtml::encode($data->fmodif); ?>
	<br />

	*/ ?>

</div>