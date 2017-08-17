<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Penginapan */

$this->title = $model->id_penginapan;
$this->params['breadcrumbs'][] = ['label' => 'Penginapans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penginapan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_penginapan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_penginapan], [
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
            'id_penginapan',
            'nama_penginapan',
            'info_penginapan:ntext',
            'foto_penginapan',
            'alamat_penginapan',
            'cp_penginapan',
            'rating_penginapan',
            'id_wisata',
        ],
    ]) ?>

</div>
