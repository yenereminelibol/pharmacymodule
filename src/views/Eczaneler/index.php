<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel yenereminelibol\pharmacymodule\models\EczanelerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Eczanelers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eczaneler-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Eczaneler', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Return Main Menu', ['home/index'], ['class' => 'btn btn-danger']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'EczaneAd',
            'EczaneSehir',
            'EczaneCalisanSayisi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
