<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\Orders $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>


<div class="orders-view">


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
            'port',
            'url:ntext',
            'centre_id',
            'fullName',
            'centre_name',
            'date',
            'create_date',
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