<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model yenereminelibol\pharmacymodule\models\Eczaneler */

$this->title = 'Update Eczaneler: ' . $model->EczaneAd;
$this->params['breadcrumbs'][] = ['label' => 'Eczanelers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->EczaneAd, 'url' => ['view', 'id' => $model->EczaneAd]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="eczaneler-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
