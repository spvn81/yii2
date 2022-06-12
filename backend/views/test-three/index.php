<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use backend\models\TestThree;
use backend\models\TestTwo;
use backend\models\TestOne;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TestThreeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Test Threes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-three-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Test Three', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute'=>'name',
                'value'=>'testTwo.test_one_id'
            ],

           [
               'attribute'=>'test_two_id',
               'label'=>'test two name',
           

           ],
            'college',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TestThree $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
