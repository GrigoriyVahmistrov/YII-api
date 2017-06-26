<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Currbatch */

$this->title = $model->currentbatch;
$this->params['breadcrumbs'][] = ['label' => 'Currbatches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="currbatch-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->currentbatch], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->currentbatch], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'currentbatch',
        ],
    ]) ?>

</div>
