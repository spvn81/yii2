<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\Module\settings\models\Compnies */

$this->title = 'Create Compnies';
$this->params['breadcrumbs'][] = ['label' => 'Compnies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="compnies-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
