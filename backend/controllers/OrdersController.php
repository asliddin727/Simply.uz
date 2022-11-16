<?php

namespace backend\controllers;

use backend\models\Orders;
use backend\models\search\OrdersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


class OrdersController extends AuthController
{
   
    public function actionIndex()
    {
        $searchModel = new OrdersSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

   
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

  
    public function actionCreate()
    {
        $model = new Orders();

        if ($this->request->isPost) {
            if($model->load($this->request->post())){
                $model->create_date = date('Y-m-d H:i:s');
                $model->created_at = strtotime(date('Y-m-d H:i:s'));
                $model->created_by = strtotime(date('Y-m-d H:i:s'));
                $model->updated_at = null;
                $model->updated_by = null;
                $model->save();
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

   
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post())) {
            $model->updated_at = strtotime(date('Y-m-d H:i:s'));
            $model->updated_by = strtotime(date('Y-m-d H:i:s'));
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    
    protected function findModel($id)
    {
        if (($model = Orders::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
