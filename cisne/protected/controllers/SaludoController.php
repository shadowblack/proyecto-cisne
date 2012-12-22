<?php
	
	class SaludoController extends Controller{
	
		public function actionIndex(){
			$saludo = "hola que tal como estas";
			$this->render('index',array('saludo'=>$saludo));
			//exit();
		}
	
	}

?>