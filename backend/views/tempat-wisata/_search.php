<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TempatWisataSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tempat-wisata-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_wisata') ?>

    <?= $form->field($model, 'nama_wisata') ?>

    <?= $form->field($model, 'info_wisata') ?>

    <?= $form->field($model, 'foto_wisata') ?>

    <?= $form->field($model, 'alamat_wisata') ?>

    <?php // echo $form->field($model, 'cp_wisata') ?>

    <?php // echo $form->field($model, 'Tiket') ?>

    <?php // echo $form->field($model, 'Rating') ?>

    <?php // echo $form->field($model, 'tgl_update') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
