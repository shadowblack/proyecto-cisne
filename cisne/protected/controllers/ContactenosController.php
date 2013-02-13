<?php
	
	class ContactenosController extends Controller{
	
		public function actionIndex(){	
			//die("entro");
			$model=new ContactenosFormularios;
			if(isset($_POST['ContactenosFormulario']))
			{
				$model->attributes=$_POST['ContactenosFormulario'];
				if($model->validate())
				{
					$name='=?UTF-8?B?'.base64_encode($model->nombre).'?=';
					$telefono='=?UTF-8?B?'.base64_encode($model->telefono).'?=';
					$headers="From: $name <{$model->email}>\r\n".
						"Reply-To: {$model->email}\r\n".
						"MIME-Version: 1.0\r\n".
						"Content-type: text/plain; charset=UTF-8";

					mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
					Yii::app()->user->setFlash('contactenos','Gracias por contactarnos, haremos todo lo posible para comunicarnos con usted.');
					$this->refresh();
				}
			}
			$this->render('contactenos',array('model'=>$model));
		
			#$this->render('contactenos');			
		}
		
		public function actions()
		{
			return array(
				// captcha action renders the CAPTCHA image displayed on the contact page
				'captcha'=>array(
					'class'=>'CCaptchaAction',
					'backColor'=>0xFFFFFF,
				),
				// page action renders "static" pages stored under 'protected/views/site/pages'
				// They can be accessed via: index.php?r=site/page&view=FileName
				'page'=>array(
					'class'=>'CViewAction',
				),
			);
		}

			
	}

?>