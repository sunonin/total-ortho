<?php

use common\modules\cms\models\Position;
use yii\helpers\Html;
use yii\helpers\Url;
use kartik\grid\ActionColumn;
use kartik\grid\GridView;
use backend\components\FontAwesome;
use yii\bootstrap4\Modal;


$this->title = 'Positions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="position-index">

    <div class="card card-info card-outline">
        <div class="card-header">
            <h4 class="card-title"><?= Fontawesome::icon('info') ?> List</h4>
            <div class="card-tools">
                <?= Html::a(FontAwesome::icon('plus-square') . ' New Position', '#', [
                    'value' => Url::to(['create']),
                    'class' => 'btn btn-success btn-block btn-sm new-position-button']);
                ?>
            </div>
        </div>

        <div class="card-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'name',
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

<?php Modal::begin([
    'id' => 'new-position-modal',
    'title' => FontAwesome::icon('plus-square') . ' New Position', // Use 'title' for the header text
]); ?>

    <div id="new-position-modal-content">
    </div>

<?php Modal::end(); ?>

<?php
$script = <<< JS

    $('.new-position-button').click(function(e) {
        e.preventDefault();
        $('#new-position-modal').modal('show')
            .find('#new-position-modal-content')
            .load($(this).attr('value'));
    });
JS;
$this->registerJs($script);
?>
