<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Souvenirs */

$this->title = 'Create Souvenirs';
$this->params['breadcrumbs'][] = ['label' => 'Souvenirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="souvenirs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
