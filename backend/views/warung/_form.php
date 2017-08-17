<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Warung */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="warung-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_warung')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'informasi_warung')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'foto_warung')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lokasi_stand')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cp_warung')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rating_warung')->dropDownList([ 'Populer' => 'Populer', 'Sering dikunjungi' => 'Sering dikunjungi', 'Lumayan bagus' => 'Lumayan bagus', 'Jelek' => 'Jelek', 'Tidak direkomendasikan' => 'Tidak direkomendasikan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'id_wisata')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
