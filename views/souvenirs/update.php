<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Souvenirs */

$this->title = 'Update Souvenirs: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Souvenirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->article]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="souvenirs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
