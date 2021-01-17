<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model yenereminelibol\pharmacymodule\models\Depolar */

$this->title = 'Update Depolar: ' . $model->DepoAd;
$this->params['breadcrumbs'][] = ['label' => 'Depolars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->DepoAd, 'url' => ['view', 'id' => $model->DepoAd]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="depolar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
