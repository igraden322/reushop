<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Clothes */

$this->title = 'Update Clothes: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Clothes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->article]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="clothes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
