<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TestOne */

$this->title = 'Create Test One';
$this->params['breadcrumbs'][] = ['label' => 'Test Ones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-one-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
