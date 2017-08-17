<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DaftarKuliner */

$this->title = 'Create Daftar Kuliner';
$this->params['breadcrumbs'][] = ['label' => 'Daftar Kuliners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daftar-kuliner-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
