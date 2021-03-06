<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;


/* @var $this yii\web\View */
/* @var $model backend\models\Compnies */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="compnies-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'company_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

    <?= DatePicker::widget([
    'model' => $model,
    'attribute' => 'company_start_date',
    'template' => '{addon}{input}',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'dd-M-yyyy'
        ]
]);?>

  

    <?= $form->field($model, 'company_cretated_date')->textInput() ?>

    <?= $form->field($model, 'compant_status')->dropDownList([ 'Active' => 'Active', 'InActive' => 'InActive', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
