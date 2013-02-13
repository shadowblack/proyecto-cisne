<?php
	
	class InicioController extends Controller{
	
		public function actionIndex(){		
			$saludo = "hola que tal como estas";
			$comentario = 'La página donde esta intentando acceder no se encuentra.';
			
			$model = Contenidos::model()->find('cod_content=?',array("qso"));									
			if($model===null)
				throw new CHttpException(404,$comentario);								
				
			$m_contactenos = Contenidos::model()->find('cod_content=?',array("con"));
			if($m_contactenos===null)
				throw new CHttpException(404,$comentario);			
				
			/*$m_portafolio = Contenidos::model()->find('cod_content=?',array("por"));
			if($m_portafolio===null)
				throw new CHttpException(404,$comentario);	
				
			$m_hospedaje = Contenidos::model()->find('cod_content=?',array("hos"));
			if($m_hospedaje===null)
				throw new CHttpException(404,$comentario);	
				
			$m_servicios = Contenidos::model()->find('cod_content=?',array("ser"));
			if($m_servicios===null)
				throw new CHttpException(404,$comentario);	*/
							
				
			$this->render('inicio',array(
											'mivariable'		=>$saludo,
											"model"				=>$model,
											"m_contactenos"		=>$m_contactenos,
											//"m_portafolio"		=>$m_portafolio,
											//"m_hospedaje"		=>$m_hospedaje,
											//"m_servicios"		=>$m_servicios
										)
			);
		}
	
	}

?>