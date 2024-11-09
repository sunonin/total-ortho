<?php

namespace backend\controllers;

use Yii;
use common\modules\cms\models\CompanyProfile;


class CompanyProfileController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = CompanyProfile::myCompanyProfile();
        return $this->render('index', compact('model'));
    }

    public function actionUpdate($id)
    {
        $model = CompanyProfile::findOne($id);

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                Yii::$app->getSession()->setFlash('success', 'Record has been updated successfully!');
                return $this->redirect(['index']);
            }
        } else {
            $model->loadDefaultValues();
        }


        return $this->render('update', compact('model'));
    }

}
