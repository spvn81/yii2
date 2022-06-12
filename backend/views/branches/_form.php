<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Compnies;

/* @var $this yii\web\View */
/* @var $model backend\models\Branches */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="branches-form"> 
 
    <?php $form = ActiveForm::begin(); ?>

    <?=   $form->field($model,'company_id')->dropDownList(ArrayHelper::map(Compnies::find()->all(),'id','company_name'))   ?>

    <?= $form->field($model, 'branch_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'branch_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'branch_created_date')->textInput() ?>

    <?= $form->field($model, 'branch_status')->dropDownList([ 'Active' => 'Active', 'InActive' => 'InActive', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
