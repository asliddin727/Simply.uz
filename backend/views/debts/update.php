<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Debts $model */

$this->title = 'Update Debts: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Debts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="debts-update">
    
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>