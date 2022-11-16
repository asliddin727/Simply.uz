<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\search\OrdersSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="orders-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'port') ?>

    <?= $form->field($model, 'url') ?>

    <?= $form->field($model, 'centre_id') ?>

    <?= $form->field($model, 'fullName') ?>

    <?php // echo $form->field($model, 'centre_name') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'create_date') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
