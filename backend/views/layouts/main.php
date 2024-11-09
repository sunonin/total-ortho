<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

\hail812\adminlte3\assets\FontAwesomeAsset::register($this);
\hail812\adminlte3\assets\AdminLteAsset::register($this);
$this->registerCssFile('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback');

$assetDir = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');

$publishedRes = Yii::$app->assetManager->publish('@vendor/hail812/yii2-adminlte3/src/web/js');
$this->registerJsFile($publishedRes[1].'/control_sidebar.js', ['depends' => '\hail812\adminlte3\assets\AdminLteAsset']);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- Include Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>
<body class="hold-transition sidebar-mini text-sm">
<?php $this->beginBody() ?>

<div class="wrapper">
    
    <?php if (!Yii::$app->user->isGuest): ?>
        <?= $this->render('navbar', ['assetDir' => $assetDir]) ?>

        <?= $this->render('sidebar', ['assetDir' => $assetDir]) ?>
    <?php endif ?>

    <?= $this->render('content', ['content' => $content, 'assetDir' => $assetDir]) ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Set Toastr options
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "positionClass": "toast-top-right", // Position of the toast
                "preventDuplicates": true,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "3000", // Duration in milliseconds
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            <?php if (Yii::$app->session->hasFlash('success')): ?>
                toastr.success('<?= addslashes(Yii::$app->session->getFlash('success')) ?>', 'Success!');
            <?php endif; ?>

            <?php if (Yii::$app->session->hasFlash('error')): ?>
                toastr.error('<?= addslashes(Yii::$app->session->getFlash('error')) ?>', 'Error!');
            <?php endif; ?>

            <?php if (Yii::$app->session->hasFlash('warning')): ?>
                toastr.warning('<?= addslashes(Yii::$app->session->getFlash('warning')) ?>', 'Warning!');
            <?php endif; ?>

            <?php if (Yii::$app->session->hasFlash('info')): ?>
                toastr.info('<?= addslashes(Yii::$app->session->getFlash('info')) ?>', 'Info!');
            <?php endif; ?>
        });
    </script>


    <?php if (!Yii::$app->user->isGuest): ?>
        <?= $this->render('control-sidebar') ?>

        <?= $this->render('footer') ?>
    <?php endif ?>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
