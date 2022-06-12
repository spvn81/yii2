<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TestOne */

$this->title = 'Update Test One: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Test Ones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="test-one-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
