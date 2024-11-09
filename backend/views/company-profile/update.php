<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\widgets\DetailView;
use backend\components\FontAwesome;

$this->title = 'Company Profile';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-profile-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>