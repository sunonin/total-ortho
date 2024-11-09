<?php
use kartik\select2\Select2;
use yii\web\JsExpression;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\components\FontAwesome;

?>

<div class="teacher-profile-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-12">

            <div class="card card-info">

                <div class="card-header">
                    <h3 class="card-title"><?= FontAwesome::icon('info-circle') ?> Info</h3>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div> 

                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'telephone')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div> 

                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'fax_no')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div> 

                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div> 

                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'tin')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div> 

                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'signatory')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div> 

                </div>

                <div class="card-footer">
                    <div class="form-group">
                        <?= Html::a(FontAwesome::icon('arrow-left') . ' Back', ['index'], ['class' => 'btn btn-default btn-sm']) ?>
                        <?= Html::submitButton(FontAwesome::icon('check') . ' Save', ['class' => 'btn btn-success btn-sm']) ?>
                    </div> 
                </div>
            </div>
  
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
