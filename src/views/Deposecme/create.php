<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model yenereminelibol\pharmacymodule\models\Deposecme */

$this->title = 'Create Deposecme';
$this->params['breadcrumbs'][] = ['label' => 'Deposecmes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deposecme-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
