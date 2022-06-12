<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use backend\models\TestTwo;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TestTwoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Test Twos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-two-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Test Two', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'test_one_id',
            'address:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TestTwo $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
