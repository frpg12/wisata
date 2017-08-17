<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TempatWisata */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tempat-wisata-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_wisata')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'info_wisata')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'foto_wisata')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_wisata')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cp_wisata')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tiket')->textInput() ?>

    <?= $form->field($model, 'Rating')->dropDownList([ 'Populer' => 'Populer', 'Sering dikunjungi' => 'Sering dikunjungi', 'Lumayan bagus' => 'Lumayan bagus', 'Jelek' => 'Jelek', 'Tidak direkomendasikan' => 'Tidak direkomendasikan', ], ['prompt' => 'rating']) ?>

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
