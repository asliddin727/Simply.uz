<?php

use backend\models\Orders;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var backend\models\search\OrdersSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>



<div class="orders-index">


    <p>
        <?= Html::a('Create Orders', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'port',
            // 'url:ntext',
            'centre_id',
            'fullName',
            'centre_name',
            'date',
            //'create_date',
            //'created_at',
            //'updated_at',
            //'created_by',
            //'updated_by',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Orders $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>