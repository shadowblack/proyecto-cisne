<?php
	?><b>id:</b><?php
	echo $model->id;
	?><br /><b>nombre:</b><?php
	echo $model->nombre;
	?><br /><b>descripcion:</b><?php
	echo $model->descripcion;
	?><br /><?php
	echo CHtml::link("Atras",array("/tareas"));
?>