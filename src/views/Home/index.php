<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->registerCssFile('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css%27');
?>

<h1>Pharmacy Modülüne Hoşgeldiniz</h1>
<h3>sisteme devam etmek için seçiniz</h3>

<div class="container" style="width: 100%; height: 60vh">
    <div class="row" style="margin-bottom: 10px; display: flex; align-items: center;">
        <div class="col-sm-6">
            <img src="https://static.wixstatic.com/media/ac2d23_0acfcfacce714e1c8af409b34c2eff73~mv2.jpg" alt="eczane" style="width: 100%;"  >
        </div>
        <div class="col-sm-6">
            <?= Html::a('Eczane Ekle', ['eczaneler/index'],
                [
                    'class' => 'btn btn-success btn-block',
                    'style' => 'padding:20px;',
                ]) ?>
        </div>
    </div>
    <div class="row" style="margin-bottom: 10px; display: flex; align-items: center;">
        <div class="col-sm-6">
            <img src="https://itimatkutu.com/fotograflar/pagelarge_triplex-koliler_1_20150808165920.jpg" alt="depo" style="width: 100%;" >
        </div>
        <div class="col-sm-6">
            <?= Html::a('Depo Ekle', ['depolar/index'],
                [
                        'class' => 'btn btn-success btn-block',
                        'style' => 'padding:20px;',
                ]) ?>
        </div>
    </div>
    <div class="row" style="display: flex; align-items: center">
        <div class="col-sm-6">
            <img src="https://sebboy.com/wp-content/uploads/2018/03/2guMlOXBL19qGE0P2RIh5Irn3KTIlsR5HW3xOytx.jpeg" alt="deposec" style="width: 100%;" >
        </div>
        <div class="col-sm-6">
            <?= Html::a('Depo Seç', ['deposecme/index'],
                [
                    'class' => 'btn btn-success btn-block',
                    'style' => 'padding:20px;',
                ]) ?>
        </div>
    </div>
</div>


