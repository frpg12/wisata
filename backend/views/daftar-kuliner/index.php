<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DaftarKulinerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Kuliners';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daftar-kuliner-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Daftar Kuliner', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kuliner',
            'nama_kuliner',
            'harga',
            'id_warung',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
