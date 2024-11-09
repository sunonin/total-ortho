<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\modules\cms\models\UserInfo $model */

$this->title = 'New User';
$this->params['breadcrumbs'][] = ['label' => 'User Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-info-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
