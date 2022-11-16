<?php

use yii\helpers\Html;


$this->title = 'Create Orders';
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>