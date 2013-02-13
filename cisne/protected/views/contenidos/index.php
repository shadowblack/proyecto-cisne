<?php
/* @var $this ContenidosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Contenidos',
);

$this->menu=array(
	array('label'=>'Crear Contenidos', 'url'=>array('create')),
	array('label'=>'Administrar Contenidos', 'url'=>array('admin')),
);
?>

<h1>Contenidoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
