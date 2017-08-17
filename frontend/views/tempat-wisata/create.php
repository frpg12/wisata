<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TempatWisata */

$this->title = 'Create Tempat Wisata';
$this->params['breadcrumbs'][] = ['label' => 'Tempat Wisatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tempat-wisata-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
