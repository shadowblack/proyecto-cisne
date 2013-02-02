<?php
/* @var $this ContenidosController */
/* @var $model Contenidos */

$this->breadcrumbs=array(
	'Contenidoses'=>array('index'),
	$model->id_contenido,
);

$this->menu=array(
	array('label'=>'List Contenidos', 'url'=>array('index')),
	array('label'=>'Create Contenidos', 'url'=>array('create')),
	array('label'=>'Update Contenidos', 'url'=>array('update', 'id'=>$model->id_contenido)),
	array('label'=>'Delete Contenidos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_contenido),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Contenidos', 'url'=>array('admin')),
);
?>

<h1>View Contenidos #<?php echo $model->id_contenido; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_contenido',
		'cod_content',
		'nom_content',
		'des_content',
		'est_content',
		'activo',
		'fregistro',
		'fmodif',
	),
)); ?>
