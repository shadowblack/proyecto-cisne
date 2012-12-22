<h1>
	Listado de tareas
</h1>
<?php
	echo "Probando la vista index XD";
?>
<br />
<?php echo CHtml::link("Crear",array("add"));?>
<table>
	<tr>
		<td>
			ID
		</td>
		<td>
			NOMBRE
		</td>
		<td>
			DESCRIPCIÓN
		</td>
		<td>
			Ver
		</td>
		<td>
			Editar
		</td>
		<td>
			Borrar
		</td>
	</tr>
	<?php foreach($tar as $t):?>
		<tr>
			<td>
				<?php echo $t->id?>
			</td>
			<td>
				<?php echo $t->nombre?>
			</td>
			<td>
				<?php echo $t->descripcion?>
			</td>
			<td>
				<?php echo CHtml::link("Ver",array("view","id"=>$t->id))?>
			</td>
			<td>
				<?php echo CHtml::link("Editar",array("edit","id"=>$t->id))?>
			</td>
			<td>
				<?php echo CHtml::link("Borrar",array("del","id"=>$t->id),array("confirm"=>"¿Seguro que desea borrar?"))?>
			</td>
		</tr>	
	<?php endforeach ?>
</table>