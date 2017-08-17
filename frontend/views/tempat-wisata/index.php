<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TempatWisataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tempat Wisatas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tempat-wisata-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tempat Wisata', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama_lokasi',
            'sekilas_info',
            'detail_info',
            'alamat_lokasi',
            // 'foto',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
