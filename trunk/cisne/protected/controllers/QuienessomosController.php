<?php
	
	class QuienessomosController extends Controller{
	
		public function actionIndex(){	
			$comentario = 'La página donde esta intentando acceder no se encuentra.';
			
			$m_quienessomos = Contenidos::model()->find('cod_content=?',array("qso"));									
			if($m_quienessomos===null)
				throw new CHttpException(404,$comentario);
			
			$m_mision = Contenidos::model()->find('cod_content=?',array("mis"));									
			if($m_mision===null)
				throw new CHttpException(404,$comentario);
				
			$m_vision = Contenidos::model()->find('cod_content=?',array("vis"));									
			if($m_vision===null)
				throw new CHttpException(404,$comentario);
				
			$this->render('quienessomos',array(
							"m_quienessomos" => $m_quienessomos,
							"m_mision"		 => $m_mision,
							"m_vision"		=> $m_vision
						)
			);			
		}
	
	}

?>