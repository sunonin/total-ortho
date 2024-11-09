<?php
use \hail812\adminlte\widgets\Menu;

?>



<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        
        <span class="brand-text font-weight-light">Total Ortho Inventory System</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=$assetDir?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin Test</a>
            </div>
        </div>

        <nav class="mt-2">
            <?= Menu::widget([
                'options' => [
                    'class' => 'nav nav-pills nav-sidebar flex-column nav-flat nav-child-indent', 
                    'data-widget'=> 'treeview', 
                    'role'=> 'menu', 
                    'data-accordion' => 'false'
                ],
                'items' => [
                    [
                        'label' => 'Dashboard',  
                        'icon' => 'tachometer-alt', 
                        'url' => ['/dashboard/index'],
                        // 'active' => Yii::$app->controller->id == 'index',
                    ],
                    [
                        'label' => 'System Utilities', 
                        'icon' => 'cogs',
                        'items' => [
                            [
                                'label' => 'Company Profile', 
                                'icon' => 'circle', 
                                'url' => ['/company-profile/index'],
                                // 'active' => Yii::$app->controller->id == 'index',
                            ],
                            [
                                'label' => 'Position', 
                                'icon' => 'circle', 
                                'url' => ['/position/index'],
                                'active' => Yii::$app->controller->id == 'position',
                            ],
                            [
                                'label' => 'User Management', 
                                'icon' => 'circle', 
                                'url' => ['/user-info/index'],
                                'active' => Yii::$app->controller->id == 'user-info',
                            ],
                            [
                                'label' => 'Assignment', 
                                'icon' => 'circle', 
                                'url' => ['/admin/assignment'],
                                'active' => Yii::$app->controller->id == 'assignment',
                            ],
                            [
                                'label' => 'Roles', 
                                'icon' => 'circle', 
                                'url' => ['/admin/role'],
                                'active' => Yii::$app->controller->id == 'role',
                            ],
                            [
                                'label' => 'Routes', 
                                'icon' => 'circle', 
                                'url' => ['/admin/route'],
                                'active' => Yii::$app->controller->id == 'route',
                            ],


                            // [
                            //     'label' => 'User Level', 
                            //     'icon' => 'circle', 
                            //     'url' => ['/learners/profile/index'],
                            //     'active' => Yii::$app->controller->id == 'profile',
                            // ],
                            [
                                'label' => 'User Position', 
                                'icon' => 'circle', 
                                'url' => ['/learners/profile/index'],
                                'active' => Yii::$app->controller->id == 'profile',
                            ],
                            [
                                'label' => 'System User', 
                                'icon' => 'circle', 
                                'url' => ['/learners/profile/index'],
                                'active' => Yii::$app->controller->id == 'profile',
                            ],
                            [
                                'label' => 'User Info', 
                                'icon' => 'circle', 
                                'url' => ['/learners/profile/index'],
                                'active' => Yii::$app->controller->id == 'profile',
                            ],
                        ],
                    ],
                    [
                        'label' => 'File Maintenance', 
                        'icon' => 'file-archive',
                        'items' => [
                            [
                                'label' => 'Category', 
                                'icon' => 'circle', 
                                'url' => ['/learners/profile/index'],
                                'active' => Yii::$app->controller->id == 'profile',
                            ],
                            [
                                'label' => 'Payment Term', 
                                'icon' => 'circle', 
                                'url' => ['/learners/profile/index'],
                                'active' => Yii::$app->controller->id == 'profile',
                            ],
                            [
                                'label' => 'Purpose', 
                                'icon' => 'circle', 
                                'url' => ['/learners/profile/index'],
                                'active' => Yii::$app->controller->id == 'profile',
                            ],
                            [
                                'label' => 'Unit', 
                                'icon' => 'circle', 
                                'url' => ['/learners/profile/index'],
                                'active' => Yii::$app->controller->id == 'profile',
                            ],
                            [
                                'label' => 'Client', 
                                'icon' => 'circle', 
                                'url' => ['/learners/profile/index'],
                                'active' => Yii::$app->controller->id == 'profile',
                            ],
                            [
                                'label' => 'Supplier', 
                                'icon' => 'circle', 
                                'url' => ['/learners/profile/index'],
                                'active' => Yii::$app->controller->id == 'profile',
                            ],
                            [
                                'label' => 'Item', 
                                'icon' => 'circle', 
                                'url' => ['/learners/profile/index'],
                                'active' => Yii::$app->controller->id == 'profile',
                            ],
                            [
                                'label' => 'Item Group', 
                                'icon' => 'circle', 
                                'url' => ['/learners/profile/index'],
                                'active' => Yii::$app->controller->id == 'profile',
                            ],
                            [
                                'label' => 'Expenses Category', 
                                'icon' => 'circle', 
                                'url' => ['/learners/profile/index'],
                                'active' => Yii::$app->controller->id == 'profile',
                            ],
                        ],
                    ],
                    [
                        'label' => 'Transactions',  
                        'icon' => 'cart-plus', 
                        'url' => ['/transaction/index'],
                        'active' => Yii::$app->controller->id == 'index',
                    ],
                    [
                        'label' => 'Inventory',  
                        'icon' => 'cubes', 
                        'url' => ['/transaction/index'],
                        'active' => Yii::$app->controller->id == 'index',
                    ],
                    [
                        'label' => 'Reports',  
                        'icon' => 'file-pdf', 
                        'url' => ['/transaction/index'],
                        'active' => Yii::$app->controller->id == 'index',
                    ],
                ],
            ]); ?>
        </nav>
    </div>
</aside>