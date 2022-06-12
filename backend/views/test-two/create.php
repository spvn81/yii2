<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TestTwo */

$this->title = 'Create Test Two';
$this->params['breadcrumbs'][] = ['label' => 'Test Twos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-two-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
