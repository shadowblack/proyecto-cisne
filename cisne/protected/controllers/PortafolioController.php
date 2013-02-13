<?php
	
	class PortafolioController extends Controller{
	
		public function actionIndex(){	
		
			$comentario = 'La página donde esta intentando acceder no se encuentra.';

			$m_portafolio = Contenidos::model()->find('cod_content=?',array("por"));									
			if($m_portafolio===null)
				throw new CHttpException(404,$comentario);	

			$this->render('portafolio',array(
				'm_portafolio' => $m_portafolio
			));	
		}
	
	}

?>