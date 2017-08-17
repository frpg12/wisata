<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TempatWisata */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tempat-wisata-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_lokasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sekilas_info')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detail_info')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_lokasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foto')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
