<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\TestOne;
use kartik\select2\Select2;


/* @var $this yii\web\View */
/* @var $model backend\models\TestTwo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="test-two-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model,'test_one_id')->dropDownList(ArrayHelper::map(TestOne::find()->all(), 'id','name')) ?>


    <?php

echo $form->field($model, 'test_one_id')->widget(Select2::classname(), [
    'data' =>ArrayHelper::map(TestOne::find()->all(), 'id','name'),
    'language' => 'en',
    'options' => ['placeholder' => 'Select a data ...'],
    'pluginOptions' => [
        'allowClear' => true
    ],
]);


?>

    <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
