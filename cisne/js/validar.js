function validar(formulario)
{
	if (formulario.nombre.value=="")
		{
			alert("Coloque su nombre");
				formulario.nombre.focus();
			return false;
		}
	if (formulario.telefono.value=="")
		{
			alert("Coloque su numero telefonico");
				formulario.telefono.focus();
			return false;
		}
	if (formulario.correo.value=="")
		{
			alert("Coloque su direccion de correo");
				formulario.correo.focus();
			return false;
		}
	if (formulario.comentario.value=="")
		{
			alert("Coloque el asusnto");
				formulario.comentario.focus();
			return false;
		}
} 

	