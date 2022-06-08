<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CompniesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Compnies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="compnies-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Compnies', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'company_name',
            'company_start_date',
            'email:email',
            'address:ntext',
            //'company_cretated_date',
            //'compant_status',
            // [
            //     'class' => ActionColumn::className(),
            //     'urlCreator' => function ($action, Compnies $model, $key, $index, $column) {
            //         return Url::toRoute([$action, 'id' => $model->id]);
            //      }
            // ],
        ], 
    ]); ?>


</div>
