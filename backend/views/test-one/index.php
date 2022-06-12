<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use backend\models\TestOne;
use backend\models\TestOneSearch;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\TestOneSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;




$this->title = 'Test Ones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-one-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Test One', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'email:email',
           
           [
            // 'attribute'=>'contact',
           'value'=>'contact',
            'filter'=>Select2::widget([
                'model' => $searchModel,
                'attribute' => 'contact',
                'data' =>ArrayHelper::map(TestOne::find()->all(), 'contact','contact'),
                'options' => ['placeholder' => 'Select a contact ...'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ])
           ],

      
          

          



            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TestOne $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
