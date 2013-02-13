<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	
	<?php
		$baseUrl = Yii::app()->baseUrl; 
		$cs = Yii::app()->getClientScript();
		#$cs->registerScriptFile($baseUrl.'/js/jquery-1.4.4.min.js');
		$cs->registerScriptFile($baseUrl.'/js/image-slider.js');
		$cs->registerScriptFile($baseUrl.'/js/validar.js');
		$cs->registerCssFile($baseUrl.'/css/cascadas/estilos.css');
		$cs->registerCssFile($baseUrl.'/css/cascadas/image-slider.css');
	?>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

	<?php
		#include('includes/end_title.php');
#		include('includes/banner_home_menu.php');
		//include('includes/slider_home.php');
	?>

	
	

	<!--<img src="<?php #echo $baseUrl."/images/imagenes/arrow_dere.jpg"?>" />-->
	<!--<div id="header">
		<div id="logo"><?php //echo CHtml::encode(Yii::app()->name); ?></div>
	</div>-->
	
	
	
	
	<!--
	<div id="mainmenu">
		<?php /*$this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		));*/ ?>		
		
		
	</div>--><!-- mainmenu -->
	<?php //if(isset($this->breadcrumbs)):?>
		<?php /*$this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); */?><!-- breadcrumbs -->
	<?php //endif?>
	
	<!-- page -->
	<?php #echo $content; ?>
	<?php //include('includes/footer.php');?>
	<!--<div class="clear"></div>-->

	
	<!--<div id="footer">-->
		<!--Copyright &copy; <?php #echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>-->
		<?php #echo Yii::powered(); ?>
		<?php //include('includes/footer.php');?>
	<!--</div>-->
	
	
	<div class="__wrapper">
		<table style="width:100%" border="0">
			<!-- header -->	
			<tr>
				<td valign="top" class="banner-fondo">
					<?php include('includes/banner_home_menu.php');?>
				</td>
			</tr>
			<!-- body -->
			<tr>
				<td align="center" style="">
					<?php echo $content; ?>
				</td>
			</tr>
		</table>
        <div class="__push"></div>
    </div>
	<!-- footer -->
	<div class="__footer">
		  <?php include('includes/footer.php');?>
	</div>
</body>
</html>
