<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\export\ExportMenu;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RouteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Маршруты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
<div class="route-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать маршрут', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Назад', ['site/index'], ['class' => 'btn btn-danger']) ?>
    </p>
        <?php 
echo ExportMenu::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
            'id',
            'name',
            'description',
            'capacity',
            'price',
            // 'isdeleted',
             'isvip',

    ]
]);
    ?>   
    <?=  \kartik\grid\GridView::widget([
        'summary'=>'Маршрутов {count} - Страниц {page}',
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'name',
            'description',
            'capacity',
            'price',
            // 'isdeleted',
             'isvip',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>