<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DepartmentsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="departments-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'brsnch_id') ?>

    <?= $form->field($model, 'company_id') ?>

    <?= $form->field($model, 'deportment_name') ?>

    <?= $form->field($model, 'deportmeny_cretated_date') ?>

    <?php // echo $form->field($model, 'deportment_status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
