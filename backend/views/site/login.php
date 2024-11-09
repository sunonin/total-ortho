<?php

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use backend\components\FontAwesome;

$this->title = 'Login';
?>

<div class="site-login">

	<div class="mt-5 offset-lg-4 col-lg-4">
		<div class="login-logo">
		    <a href="../../index2.html" class="h4"><b>Total Ortho Inventory System</b></a>
		</div>
        <div class="card card-outline card-primary">
    		<div class="card-header text-center">
  				<h4 class="card-title"><?= FontAwesome::icon('lock') ?> Login</h4>
			</div>
		    <div class="card-body login-card-body">
		      <p class="login-box-msg">Sign in to start your session</p>

		      <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

		            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

		            <?= $form->field($model, 'password')->passwordInput() ?>

		            <div class="form-group">
		                <?= Html::submitButton(FontAwesome::icon('sign-in-alt') . ' Login', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
		            </div>

		        <?php ActiveForm::end(); ?>
		    </div>
		    <div class="card-footer" style="font-size: 12px;">
		    	<strong>Copyright &copy; 2024 Total Ortho Inventory System</a>.</strong>
			    All rights reserved.
		    </div>
		 </div>
    </div>	
    
</div>





