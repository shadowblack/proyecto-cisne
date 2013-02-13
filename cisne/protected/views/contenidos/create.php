<?php
/* @var $this ContenidosController */
/* @var $model Contenidos */

$this->breadcrumbs=array(
	'Contenidoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Contenidos', 'url'=>array('index')),
	array('label'=>'Manage Contenidos', 'url'=>array('admin')),
);
?>

<h1>Crear Contenidos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>