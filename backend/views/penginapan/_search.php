<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PenginapanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penginapan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_penginapan') ?>

    <?= $form->field($model, 'nama_penginapan') ?>

    <?= $form->field($model, 'info_penginapan') ?>

    <?= $form->field($model, 'foto_penginapan') ?>

    <?= $form->field($model, 'alamat_penginapan') ?>

    <?php // echo $form->field($model, 'cp_penginapan') ?>

    <?php // echo $form->field($model, 'rating_penginapan') ?>

    <?php // echo $form->field($model, 'id_wisata') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
