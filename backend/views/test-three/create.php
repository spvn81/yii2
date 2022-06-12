<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TestThree */

$this->title = 'Create Test Three';
$this->params['breadcrumbs'][] = ['label' => 'Test Threes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-three-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
