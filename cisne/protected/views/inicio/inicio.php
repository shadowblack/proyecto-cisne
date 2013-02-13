<?php
	//$this->pageTitle="Hola como estas?";
	//$this->breadcrumbs=array("Saludo");
?>
<script type="text/javascript">
	jQuery(document).ready(function() {	
		jQuery('#slider').slider({ speed: 500 });
	});       
</script>
<div class="cont_silvers" >
		<div id="mains">
			<div id="containers">
				
			<div class="titcol portafolio">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;portafolio
					<div class="div_bg_lin">
			</div>
			</div>
			<div id="slider">
			
				<div>
					<img alt="Free Minimal Wordpress Theme" src="<?php echo Yii::app()->baseUrl?>/images/imagenes/img_ej000.jpg" />
						<!--a href="http://www.greepit.com/2010/12/free-minimal-wordpress-theme-ginimalistic/" target="_blank"-->
	<a href="javascript:;">
							ver más
						</a>
				</div>
				
				<div>
					<img alt="Free Minimal Wordpress Theme" src="<?php echo Yii::app()->baseUrl?>/images/imagenes/img_ej001.jpg" />
						<!--a href="http://www.greepit.com/2010/12/free-minimal-wordpress-theme-ginimalistic/" target="_blank"-->
	<a href="javascript:;">
							ver más
						</a>
				</div>
				
				<div>
					<img alt="Free Minimal Wordpress Theme" src="<?php echo Yii::app()->baseUrl?>/images/imagenes/img_ej002.jpg" />
						<!--a href="http://www.greepit.com/2010/12/free-minimal-wordpress-theme-ginimalistic/" target="_blank"-->
	<a href="javascript:;">
							ver más
						</a>
				</div>
				
				<div>
					<img alt="Free Minimal Wordpress Theme" src="<?php echo Yii::app()->baseUrl?>/images/imagenes/img_ej003.jpg" />
						<!--a href="http://www.greepit.com/2010/12/free-minimal-wordpress-theme-ginimalistic/" target="_blank"-->
	<a href="javascript:;">
							ver más
						</a>
				</div>
				
				<div>
					<img alt="Free Minimal Wordpress Theme" src="<?php echo Yii::app()->baseUrl?>/images/imagenes/img_ej000.jpg" />
						<!--a href="http://www.greepit.com/2010/12/free-minimal-wordpress-theme-ginimalistic/" target="_blank"-->
	<a href="javascript:;">
							ver más
						</a>
				</div>
				
				<div>
					<img alt="Free Minimal Wordpress Theme" src="<?php echo Yii::app()->baseUrl?>/images/imagenes/img_ej001.jpg" />
						<!--a href="http://www.greepit.com/2010/12/free-minimal-wordpress-theme-ginimalistic/" target="_blank"-->
	<a href="javascript:;">
							ver más
						</a>
				</div>
				
				<div>
					<img alt="Free Minimal Wordpress Theme" src="<?php echo Yii::app()->baseUrl?>/images/imagenes/img_ej002.jpg" />
						<!--a href="http://www.greepit.com/2010/12/free-minimal-wordpress-theme-ginimalistic/" target="_blank"-->
	<a href="javascript:;">
							ver más
						</a>
				</div>

							
			</div>
			
			</div>   
		
			<?php //include('contenido.php')?>
		</div>
</div>
<div class="cont_cen" >
	
    	<div class="div_lef clearfix" >
        	<div class="titcol">
				<?php echo $model->nom_content;?>
            </div>
			
            <img src="<?php echo Yii::app()->baseUrl."/images/imagenes";?>/lin_bg.png" width="700" height="2">
            <br/><br/>
            <div style="width:700px; text-align:justify;">
				<?php echo $model->est_content;?>            
			</div>
        </div>		
        
        <div class="div_rig" >
        	<div class="titcol">
            	<?php echo $m_contactenos->nom_content?>				
            </div>
            <img src="<?php echo Yii::app()->baseUrl."/images/imagenes";?>/lin_bg.png" width="260" height="2">
            <br/><br/>
            <div style="width:260px; text-align:justify">
				<?php echo $m_contactenos->est_content?>				
				<br/><br/>
				<span class="bold">
					(0212) 580-06-51<br/>
					(0212) 580-06-51
				</span>
			</div>
		</div>

</div>
