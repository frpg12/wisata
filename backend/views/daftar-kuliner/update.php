<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DaftarKuliner */

$this->title = 'Update Daftar Kuliner: ' . $model->id_kuliner;
$this->params['breadcrumbs'][] = ['label' => 'Daftar Kuliners', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kuliner, 'url' => ['view', 'id' => $model->id_kuliner]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="daftar-kuliner-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
