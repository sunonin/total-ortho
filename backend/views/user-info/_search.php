<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\modules\cms\models\UserInfoSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="user-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'account_id') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'fullname') ?>

    <?= $form->field($model, 'position_id') ?>

    <?php // echo $form->field($model, 'level') ?>

    <?php // echo $form->field($model, 'marital_status_id') ?>

    <?php // echo $form->field($model, 'religion') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'contact_no') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
