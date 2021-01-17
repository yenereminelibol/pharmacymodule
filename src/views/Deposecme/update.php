<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model yenereminelibol\pharmacymodule\models\Deposecme */

$this->title = 'Update Deposecme: ' . $model->Deposecmeid;
$this->params['breadcrumbs'][] = ['label' => 'Deposecmes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Deposecmeid, 'url' => ['view', 'id' => $model->Deposecmeid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="deposecme-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
