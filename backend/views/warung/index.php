<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\WarungSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Warungs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="warung-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Warung', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_warung',
            'nama_warung',
            'informasi_warung:ntext',
            'foto_warung',
            'lokasi_stand',
            // 'cp_warung',
            // 'rating_warung',
            // 'id_wisata',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
