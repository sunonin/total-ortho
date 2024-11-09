<?php

use common\modules\cms\models\Position;
use yii\helpers\Html;
use yii\helpers\Url;
use kartik\grid\ActionColumn;
use kartik\grid\GridView;
use backend\components\FontAwesome;
use yii\bootstrap4\Modal;


$this->title = 'User Management';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-info-index">

    <div class="card card-info card-outline">
        <div class="card-header">
            <h4 class="card-title"><?= Fontawesome::icon('info') ?> List</h4>
            <div class="card-tools">
                <?= Html::a(FontAwesome::icon('plus-square') . ' New', ['create'], [
                    'class' => 'btn btn-success btn-block btn-sm']);
                ?>
            </div>
        </div>

        <div class="card-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'fullname',
                    'position_id',
                    [
                        'label' => 'Actions',
                        'format' => 'raw',
                        'value' => function($model) {
                            $viewButton = Html::a(FontAwesome::icon('eye') . ' View', '#', [
                                    'value' => Url::to(['update', 'id' => $model->id]),
                                    'class' => 'btn btn-info btn-sm new-position-button',
                                    'data-toggle' => 'modal', 'data-target' => '#new-position-modal']);

                            $deleteButton = Html::a(FontAwesome::icon('trash') . ' Delete', 
                                ['delete', 'id' => $model->id], [
                                    'title' => 'Delete',
                                    'class' => 'btn btn-danger btn-sm',
                                    'data' => [
                                        'confirm' => 'Are you sure you want to delete this item?',
                                        'method' => 'post',
                                    ],
                                ]);

                            return $viewButton . ' ' . $deleteButton;
                        },
                        'contentOptions' => ['style' => 'width:200px;'],
                    ],
                ],
            ]); ?>    
        </div>
    </div>

</div>

