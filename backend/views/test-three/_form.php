<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TestThree */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="test-three-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'test_two_id')->textInput() ?>

    <?= $form->field($model, 'college')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
