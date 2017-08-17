<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Warung */

$this->title = 'Update Warung: ' . $model->id_warung;
$this->params['breadcrumbs'][] = ['label' => 'Warungs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_warung, 'url' => ['view', 'id' => $model->id_warung]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="warung-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
