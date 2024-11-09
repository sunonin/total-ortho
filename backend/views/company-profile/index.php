<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\widgets\DetailView;
use backend\components\FontAwesome;

$this->title = 'Company Profile';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-profile-index">

    <div class="card card-info card-outline">
        <div class="card-header">
            <h3 class="card-title"><?= FontAwesome::icon('info-circle') ?> Info</h3>
            <div class="card-tools">
                <?= Html::a(FontAwesome::icon('edit') . ' Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn-sm']) ?>
            </div>
        </div>
        <div class="card-body">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'name',
                    'description',
                    'address',
                    'telephone',
                    'fax_no',
                    'email',
                    'tin',
                    'signatory',
                ],
            ]) ?>
        </div>
    </div>

</div>