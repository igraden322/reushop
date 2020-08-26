<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AccessoriesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="accesories-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'article') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'weigth') ?>

    <?= $form->field($model, 'count') ?>

    <?= $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>