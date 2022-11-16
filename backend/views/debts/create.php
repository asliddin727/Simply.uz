<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Debts $model */

$this->title = 'Create Debts';
$this->params['breadcrumbs'][] = ['label' => 'Debts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="debts-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>