<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TestTwo */

$this->title = 'Update Test Two: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Test Twos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="test-two-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
