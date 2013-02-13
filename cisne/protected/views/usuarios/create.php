<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de  Usuarios', 'url'=>array('index')),
	array('label'=>'Administrador de Usuarios', 'url'=>array('admin')),
);
?>

<h1>Crear Usuarios</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>