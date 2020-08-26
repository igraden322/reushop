<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClothesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Одежда';
$this->params['breadcrumbs'][] = $this->title;

if(Yii::$app->user->isGuest)
{
    echo "Вам запрещено здесь находиться, если вы не авторизированы";
}
else
{?>
<div class="clothes-index">

<h1><?= Html::encode($this->title) ?></h1>

<p>
    <?= Html::a('Create Clothes', ['create'], ['class' => 'btn btn-success']) ?>
</p>

<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'article',
        'name',
        'size',
        'price',
        'count',
        //'photo',
        //'description',

        ['class' => 'yii\grid\ActionColumn'],
    ],
]); ?>


</div>

<?php }?>


