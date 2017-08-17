<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Penginapan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penginapan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_penginapan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'info_penginapan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'foto_penginapan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_penginapan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cp_penginapan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rating_penginapan')->dropDownList([ 'Populer' => 'Populer', 'Sering dikunjungi' => 'Sering dikunjungi', 'Lumayan bagus' => 'Lumayan bagus', 'Jelek' => 'Jelek', 'Tidak direkomendasikan' => 'Tidak direkomendasikan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'id_wisata')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
