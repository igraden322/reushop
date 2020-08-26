<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SouvenirsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Souvenirs';
$this->params['breadcrumbs'][] = $this->title;

if(Yii::$app->user->isGuest){
    echo "Вам запрещено здесь находиться, если вы не авторизированы";
}
else{?>

    <div class="souvenirs-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Souvenirs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'article',
            'name',
            'count',
            'weigth',
            'price',
            'description',
            'photo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
]); ?>


</div>
<?php }?>

