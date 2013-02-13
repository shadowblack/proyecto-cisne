<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class ContactenosFormularios extends CFormModel
{
	public $nombre;
	public $email;
	//public $subject;
	public $telefono;
	public $body;
	public $verificarCodigo;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// name, email, subject and body are required
			array('nombre, email, body', 'required'),
			// email has to be a valid email address
			array('email', 'email'),
			
			array('telefono','numerical','max'=>'12'),
			// verifyCode needs to be entered correctly
			array('verificarCodigo', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements())
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
			'verificarCodigo'=>'Verificacion Código',
			'nombre'=>'Nombre',
			'email'=>'Correo',
			'telefono'=>'Teléfono',
			'body'=>'Cuerpo'
		);
	}
}