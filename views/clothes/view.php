<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Clothes */

$this->title = $model->name;
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<script>    
   if(typeof window.history.pushState == 'function') {
       window.history.pushState({}, "Hide", "http://localhost/index.php?r=clothes%2Fshow");
   }
</script>

<style> 
div.img{
    width: 450px;
    height: 450px;
    background: #9dbfb0;
    padding: 15px;
    align: center;
}

div.description{
    font-family:"Roboto Light";
    font-weight: bold;
    margin-left: 500px;
    margin-top: -460px;
}

h1{
    text-align:center;
}
</style>



<div class="clothes-view">


    <p>
        <?php 
        if(!Yii::$app->user->isGuest) 
        {
            echo Html::a('Изменить', ['update', 'id' => $model->article], ['class' => 'btn btn-primary']); 
            echo Html::a('Удалить', ['delete', 'id' => $model->article], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]);
        }
        ?>
        
    </p>
    
    <?php /* DetailView::widget([
        'model' => $model,
        'attributes' => [
            'article',
            'name',
            'size',
            'price',
            'count',
            'photo',
        ],
    ])*/ 
    ?> 
    <div class="img">
        <?= Html::Img($model->photo,['alt' => 'Фото товара', 'height' => '417px', 'width' => '417px']) ?>
    </div>
    <div class="description">
         <div id="article"> <h4>Артикул: <?= Html::encode($model->article) ?></h4></div>
         <div id="description"> 
           <h1> <?= Html::encode($model->name) ?> </h1><br><br>
           <h3> <?= Html::encode($model->description)?>  </h3><br><br>
           <h5> Размерный ряд: <?= Html::encode($model->size)?> </h4><br><br>
           <h5> Осталось на складе: <?= Html::encode($model->count)?> </h4><br>
           <h4> Цена: <?= Html::encode($model->price)?> </h4><br>
            <form action="/index.php">
                <input type="submit" value="Добавить в корзину">
                <input type="hidden" name="name_toBasket" value="<?= Html::encode($model->name) ?>">
                <input type="hidden" name="price_toBasket" value="<?= Html::encode($model->price) ?>">
                <input type="number" name="count_toBasket" value="1" min="1" onkeypress="return false" max="<?= Html::encode($model->count)?>"> шт.
            </form>
           <?php if(!Yii::$app->user->isGuest)
                echo '<a href="/index.php?r=clothes%2Findex">Для разработчиков</a>';
               ?>
         </div>
    </div>

</div>

