<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Warung */

$this->title = $model->id_warung;
$this->params['breadcrumbs'][] = ['label' => 'Warungs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="warung-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_warung], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_warung], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_warung',
            'nama_warung',
            'informasi_warung:ntext',
            'foto_warung',
            'lokasi_stand',
            'cp_warung',
            'rating_warung',
            'id_wisata',
        ],
    ]) ?>

</div>
