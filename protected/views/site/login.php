<?php


$this->pageTitle = Yii::app()->name . ' - Login';
$this->breadcrumbs = array(
	'Login',
);
?>



<?php $form = $this->beginWidget('CActiveForm', array(
	'id' => 'login-form',
	'enableClientValidation' => true,
	'clientOptions' => array(
		'validateOnSubmit' => true,
	),
)); ?>

<div class="login-main-content">
	<!-- Middle Box -->
	<div class="mail-text-box">
		<div class="login-input-form">
			<!-- Logo -->
			<div class="logo-thumb">
				<img class src="/images/logo.png" alt="">
			</div>

			<form class="mt-70" action="#">
				<div class="form-group">
					<!-- <input class="form-control text-box__input" type="email" id="emailaddress" required="" placeholder="Email or username"> -->
					<?php echo $form->textField($model, 'username', array('class' => 'form-control text-box__input', 'type' => 'email', 'placeholder' => 'Ingrese su correo electrónico')); ?>
				</div>

				<div class="form-group mb-30">
					<!-- <input class="form-control text-box__input" type="password" required="" id="password" placeholder="Password"> -->
					<?php echo $form->passwordField($model, 'password', array('class' => 'form-control text-box__input', 'type' => 'password', 'placeholder' => 'Ingrese su contraseña')); ?>
				</div>

				<div class="form-group mb-15">
					<!-- <button class="btn btn-primary btn-block" type="submit"> Sign In </button> -->
					<?php echo CHtml::submitButton('Ingresar', array('class' => 'btn btn-primary btn-block')); ?>
				</div>

				<div class="text-center"><span class="mr-2 font-14">¿No tienes una cuenta?</span><a class="font-14" href="register.html">Crear cuenta</a></div>
			</form>
		</div>
		<!-- end card -->
	</div>

	<div class="contaient-thumb bg-img" style="background-image: url(/images/1.jpg);">

	</div>
</div>

<?php $this->endWidget(); ?>