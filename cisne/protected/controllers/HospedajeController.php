<?php
	
	class HospedajeController extends Controller{
	
		public function actionIndex(){
			
			$comentario = 'La página donde esta intentando acceder no se encuentra.';					
			$m_hospedaje = Contenidos::model()->find('cod_content=?',array("hos"));
			
			if($m_hospedaje===null)
				throw new CHttpException(404,$comentario);
				
			$this->render('hospedaje',array('m_hospedaje'=>$m_hospedaje));	
		}	
	}

?>