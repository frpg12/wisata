<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PenginapanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Penginapans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penginapan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Penginapan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_penginapan',
            'nama_penginapan',
            'info_penginapan:ntext',
            'foto_penginapan',
            'alamat_penginapan',
            // 'cp_penginapan',
            // 'rating_penginapan',
            // 'id_wisata',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
