<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'О нас';
$this->params['breadcrumbs'][] = $this->title;
?>

<style>
.info{
    width: 800px;
    height: 600px;
    font-size: 25px;
    margin-left:175px;
    font-family:"Roboto Light";
}

h1{
    text-align: center;
    font-family:"Roboto Light";
}
</style>

<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="info">

    <h2>REU Shop — официальный магазин сувенирной продукции Российского экономического университета им. Г. В. Плеханова.<h2>

    <p>▪ Уже 2 года мы создаем и развиваем современный имидж РЭУ!</p>
    <p>▪ Большой ассортимент по демократическим ценам.</p>
    <p>▪ Качественный мерч для каждого факультета.</p>
    <p>▪ Особые условия на массовый заказ.</p>
    </div>

</div>
