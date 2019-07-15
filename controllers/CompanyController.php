<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 15.07.2019
 * Time: 15:06
 */

namespace app\controllers;



use yii\web\Controller;
use app\models\Company;
use yii\web\NotFoundHttpException;

class CompanyController extends Controller{

    public function actionIndex()
    {
        $model = Company::find()->All();
        return $this->render('index', ['model' => $model]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    protected function findModel($id)
    {
        if (($model = Company::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}