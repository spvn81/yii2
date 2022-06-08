<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\Module\settings\models\Compnies */

$this->title = 'Update Compnies: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Compnies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="compnies-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
