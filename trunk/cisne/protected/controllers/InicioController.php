<?php
	
	class InicioController extends Controller{
	
		public function actionIndex(){		
			$saludo = "hola que tal como estas";
			$this->render('inicio',array('mivariable'=>$saludo));
			//exit();
		}
	
	}

?>