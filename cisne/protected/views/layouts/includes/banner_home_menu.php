<div class="banner">
	<div class="bg_banner">
    <div style="float:left;">
    <a href="index.php">
    <img src="<?php echo Yii::app()->baseUrl?>/images/imagenes/logo.png" width="200"/>
    </a>
    </div>
	<div class="cisne">
    	<a href="index.php">
    		<img src="<?php echo Yii::app()->baseUrl?>/images/imagenes/nom.png" />
        </a>
    </div>
    <div class="twfa" style="float:right;">
    <a href="<?php echo Yii::app()->baseUrl?>/inicio">
   	<img src="<?php echo Yii::app()->baseUrl?>/images/imagenes/btn_home.jpg" />
    </a>
    <a href="javascript:;">
    <img src="<?php echo Yii::app()->baseUrl?>/images/imagenes/btn_face.jpg" />
    </a>
    
    <a href="javascript:;">
    <img src="<?php echo Yii::app()->baseUrl?>/images/imagenes/btn_twitter.jpg" />
    </a>
    	
    </div>
    
	</div>
    
    <div class="bg_men">
    	
        <div class="cont_men">
        	
            <ul>
            	<li>
                	<?php
						if($_SERVER['PHP_SELF']=="/moises/index.php")
							{
                    ?>
                            <a href="index.php">
                                <img src="<?php echo Yii::app()->baseUrl?>/images/imagenes/btn_1_on.jpg"/>
                            </a>
                    <?php
							}else{
                    ?>
                    		<a href="index.php">
                                <img src="<?php echo Yii::app()->baseUrl?>/images/imagenes/btn_1_off.jpg"/>
                            </a>
                    <?php 
							}
                    ?>
                </li>
                <li>
                	<?php
						if($_SERVER['PHP_SELF']=="/moises/quienesomos.php")
							{
                    ?>
                            <a href="quienesomos.php">
                                <img src="<?php echo Yii::app()->baseUrl?>/images/imagenes/btn_2_on.jpg"/>
                            </a>
                    <?php
							}else{
                    ?>
                    		<a href="quienesomos.php">
                                <img src="<?php echo Yii::app()->baseUrl?>/images/imagenes/btn_2_off.jpg"/>
                            </a>
                    <?php 
							}
                    ?>
                </li>
                <li>
                	<a href="javascript:;">
                    	<img src="<?php echo Yii::app()->baseUrl?>/images/imagenes/btn_3_off.jpg"/>
                    </a>
                </li>
                <li>
                	<?php
						if($_SERVER['PHP_SELF']=="/moises/hospedaje.php")
							{
                    ?>
                            <a href="hospedaje.php">
                                <img src="<?php echo Yii::app()->baseUrl?>/images/imagenes/btn_4_on.jpg"/>
                            </a>
                    <?php
							}else{
                    ?>
                    		<a href="hospedaje.php">
                                <img src="<?php echo Yii::app()->baseUrl?>/images/imagenes/btn_4_off.jpg"/>
                            </a>
                    <?php 
							}
                    ?>
                </li>
                <li>
                	<?php
						if($_SERVER['PHP_SELF']=="/moises/servicio.php")
							{
                    ?>
                            <a href="servicio.php">
                                <img src="<?php echo Yii::app()->baseUrl?>/images/imagenes/btn_5_on.jpg"/>
                            </a>
                    <?php
							}else{
                    ?>
                    		<a href="servicio.php">
                                <img src="<?php echo Yii::app()->baseUrl?>/images/imagenes/btn_5_off.jpg"/>
                            </a>
                    <?php 
							}
                    ?>
                </li>
                
                <li>
                	<?php
						if($_SERVER['PHP_SELF']=="/moises/contactenos.php")
							{
                    ?>
                            <a href="contactenos.php">
                                <img src="<?php echo Yii::app()->baseUrl?>/images/imagenes/btn_6_on.jpg"/>
                            </a>
                    <?php
							}else{
                    ?>
                    		<a href="contactenos.php">
                                <img src="<?php echo Yii::app()->baseUrl?>/images/imagenes/btn_6_off.jpg"/>
                            </a>
                    <?php 
							}
                    ?>
                </li>
                
            </ul>

        </div>
    </div> 
	<div class="bg_silver" style="">
       
    </div>	
</div>