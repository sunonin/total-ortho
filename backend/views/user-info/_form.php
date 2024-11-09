<?php
use kartik\select2\Select2;
use yii\web\JsExpression;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\components\FontAwesome;

?>


<div class="user-info-form">

    <div class="row">
        <div class="col-md-8">
            <?php $form = ActiveForm::begin(); ?>

            <div class="card card-info card-outline">

                <div class="card-header">
                    <h3 class="card-title"><?= FontAwesome::icon('info-circle') ?> Info</h3>
                </div>
                <div class="card-body">

                    <?= $form->field($model, 'fullname')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'position_id')->widget(Select2::classname(), [
                        'data' => [], 
                        'options' => ['placeholder' => 'Select Position', 'id' => 'position-select'],
                        'pluginOptions' => ['allowClear' => false]
                    ]); ?>

                    <?= $form->field($model, 'level')->widget(Select2::classname(), [
                        'data' => [], 
                        'options' => ['placeholder' => 'Select Level', 'id' => 'level-select'],
                        'pluginOptions' => ['allowClear' => false]
                    ]); ?>

                    <?= $form->field($model, 'marital_status_id')->widget(Select2::classname(), [
                        'data' => [], 
                        'options' => ['placeholder' => 'Select Status', 'id' => 'maritalStatus-select'],
                        'pluginOptions' => ['allowClear' => false]
                    ]); ?>

                    <?= $form->field($model, 'religion')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'contact_no')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'status')->textInput() ?>



                    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

                </div>

                <div class="card-footer">
                    <div class="form-group">
                        <?= Html::a(FontAwesome::icon('arrow-left') . ' Back', ['index'], ['class' => 'btn btn-default btn-sm']) ?>
                        <?= Html::submitButton(FontAwesome::icon('check') . ' Save', ['class' => 'btn btn-success btn-sm']) ?>
                    </div> 
                </div>
            </div>
            <?php ActiveForm::end(); ?>

        </div>

        <div class="col-md-4">
            
        </div>
    </div>

</div>