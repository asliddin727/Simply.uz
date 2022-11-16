<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Orders $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="orders-form">
<div class="col-lg-6">
    <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'port')->textInput() ?>

        <?= $form->field($model, 'url')->textInput() ?>

        <?= $form->field($model, 'centre_id')->textInput() ?>

        <?= $form->field($model, 'fullName')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'centre_name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'date')->textInput(['maxlength' => true]) ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
    </div>
</div>
    <?php ActiveForm::end(); ?>

</div>