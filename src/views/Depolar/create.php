<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model yenereminelibol\pharmacymodule\models\Depolar */

$this->title = 'Create Depolar';
$this->params['breadcrumbs'][] = ['label' => 'Depolars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="depolar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
