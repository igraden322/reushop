<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Accesories */

$this->title = 'Create Accesories';
$this->params['breadcrumbs'][] = ['label' => 'Accesories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="accesories-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
