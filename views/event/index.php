<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EventSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'События';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
<div class="event-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать событие', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Назад', ['site/index'], ['class' => 'btn btn-danger'])?>
        
    </p>
    <?= GridView::widget([
        'summary'=>'Событий {count} - Страниц {page}',
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'description',
            'price',
            // 'isdeleted',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
