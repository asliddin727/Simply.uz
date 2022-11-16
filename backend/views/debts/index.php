<?php

use backend\models\Debts;
use backend\models\Orders;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

$this->title = 'Debts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="debts-index">


    <p>
        <?= Html::a('Create Debts', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            [
                'attribute'=>'order_id',
                'format'=>'raw',
                'value'=>function ($model){
                    return Orders::findOne(['id'=>$model->order_id])->fullName;
                }
            ],
            'date',
            [
                'attribute'=>'status',
                'format'=>'raw',
                'value'=>function ($model){
                   $val = "<b style='color: orange;'>InActive</b>";
                   if($model->status==1){
                    $val = "<b style='color: green;'>Active</b>";
                   }
                   return $val;
                }
            ],
            'status_pay',
            //'created_at',
            //'updated_at',
            //'created_by',
            //'updated_by',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Debts $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 },

                 'template'=> '{view} {update} {delete}'
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>