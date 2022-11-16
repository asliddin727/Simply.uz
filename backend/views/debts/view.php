<?php

use backend\models\Orders;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\Debts $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Debts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="debts-view">

    <p>
        <?= Html::a('Back to Home', ['index', 'id' => $model->id], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
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
            [
                'attribute'=>'created_at',
                'format'=>'raw',
                'value'=>function ($model){
                    return date('Y-m-d H:i:s', $model->created_at);
                }
            ],
            [
                'attribute'=>'updated_at',
                'format'=>'raw',
                'value'=>function ($model){
                    if($model->updated_at != null){
                        return date('Y-m-d H:i:s', $model->updated_at);
                    }
                    return '<span style="color: orange;">not updated</span>';                 
                }
            ],
            [
                'attribute'=>'created_by',
                'format'=>'raw',
                'value'=>function ($model){
                    return date('Y-m-d H:i:s', $model->created_by);
                }
            ],
            [
                'attribute'=>'updated_by',
                'format'=>'raw',
                'value'=>function ($model){
                    if($model->updated_at != null){
                        return date('Y-m-d H:i:s', $model->updated_by);
                    }
                    return '<span style="color: orange;">not updated</span>';                     
                }
            ],
        ],
    ]) ?>

</div>