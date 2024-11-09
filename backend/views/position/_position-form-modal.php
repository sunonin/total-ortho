<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\components\FontAwesome;

?>

<?php $form = ActiveForm::begin([
    'id' => 'position-form',
    'options' => ['class' => 'form-horizontal']
]); ?>

<?= $form->field($model, 'name')->textInput() ?>

<div class="form-group">
    <?= Html::submitButton(Fontawesome::icon('check') . ' Save', ['class' => 'btn btn-primary btn-sm']) ?>
</div>

<?php ActiveForm::end(); ?>
