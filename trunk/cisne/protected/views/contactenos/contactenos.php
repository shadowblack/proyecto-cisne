<?php
	$this->pageTitle=Yii::app()->name . ' - Contactesnos';
	$this->breadcrumbs=array(
		'Contactenos',
	);

?>
<?php if(Yii::app()->user->hasFlash('contactenos')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contactenos'); ?>
</div>

<?php else: ?>

<p>
If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
</p>

<div class="clearfix bg_color">
	 <div class="cont_cen">
		<div class="clearfix">
				<div class="div_lef">
					<div class="titcol">
						hospedaje
					</div>
					<img width="700" height="2" src="imagenes/lin_bg.png">
					<br><br>
					Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. <br/><br/>

					<?php $form=$this->beginWidget('CActiveForm', array(
						'id'=>'contact-form',
						'enableClientValidation'=>true,
						'clientOptions'=>array(
							'validateOnSubmit'=>true,
						),
					)); ?>

					<p class="note">Fields with <span class="required">*</span> are required.</p>
					<?php echo $form->errorSummary($model); ?>
					
					
								<div class="tct_lef">				
								
									<?php echo $form->labelEx($model,'nombre'); ?>:<br/>
									<?php echo $form->textField($model,'nombre',array('class'=>'inp')); ?><br/>
									<?php echo $form->error($model,'nombre'); ?><br/>
									
									<?php echo $form->labelEx($model,'telefono'); ?>:<br/>
									<?php echo $form->textField($model,'telefono',array('class'=>'inp')); ?><br/>
									<?php echo $form->error($model,'telefono'); ?><br/>
									
									<?php echo $form->labelEx($model,'email'); ?>:<br/>
									<?php echo $form->textField($model,'email',array('class'=>'inp')); ?><br/>
									<?php echo $form->error($model,'email'); ?><br/>
								</div>
									
								<div class="tct_rig">
									<?php echo $form->labelEx($model,'body'); ?>:<br/>
									<?php echo $form->textArea($model,'body',array('class'=>'com')); ?><br/>
									<?php echo $form->error($model,'body');  ?><br/>
									
									<!--
									<textarea class="com" name="comentario" cols="35" rows="3"></textarea><br/>
									<input name="enviar" type="image"  src="imagenes/btn_enviar.jpg" align="right"/>
									-->
								</div>
								
								<?php if(CCaptcha::checkRequirements()): ?>
								<div class="row">
									<?php echo $form->labelEx($model,'verificarCodigo'); ?>
									<div>aa
									<?php $this->widget('CCaptcha'); ?>bb
									<?php echo $form->textField($model,'verificarCodigo'); ?>
									</div>
									<div class="hint">Please enter the letters as they are shown in the image above.
									<br/>Letters are not case-sensitive.</div>
									<?php echo $form->error($model,'verificarCodigo'); ?>
								</div>
								<?php endif; ?>
								
								<?php echo CHtml::submitButton('Submit'); ?>
					
				
				
		</div>

			<div class="div_rig">
					<div class="titcol">
							empresa de hospedaje
					</div>
					<img width="260" height="2" src="imagenes/lin_bg.png">
					<br><br>
					<div class="cont_icon" style="font-size:11px;">
						<img src="imagenes/icon_telephone.jpg" align="absmiddle" /> 
						(0212) 580-06-51 / (0212) 580-06-51
						<br/><br/>
						<img src="imagenes/icon_mail.jpg" align="absmiddle" />
						ventas@cisnes.com / sistemas@cisnes.com
						<br/><br/>
						<img src="imagenes/icon_map.jpg" align="absmiddle"/>
						<a href="javascript:;">Ub&iacute;canos aqu&iacute;</a>
						<br/>
					</div>
				   
					<br>
			  <br>          
			</div>


		</div>
	</div>
</div>
<?php endif;?>

<?php $this->endWidget(); ?>