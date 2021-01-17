<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model yenereminelibol\pharmacymodule\models\Eczaneler */

$this->title = 'Create Eczaneler';
$this->params['breadcrumbs'][] = ['label' => 'Eczanelers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eczaneler-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
