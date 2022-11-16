<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Debts $model */
/** @var yii\widgets\ActiveForm $form */
?>
<div class="debts-form">
    <div class="col-lg-6">
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'order_id')->dropDownList(ArrayHelper::map(\backend\models\Orders::find()->all(), 'id', 'fullName'),['prompt'=>'Select an order'])?>

        <?= $form->field($model, 'date')->input('date')?>

        <?= $form->field($model, 'status')->dropDownList(['1'=>'Active', '0'=>'InActive'], ['prompt'=>'Select the status'])?>

        <?= $form->field($model, 'status_pay')->input('number') ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>