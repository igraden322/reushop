<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<style>

#grid { 
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(275px, 1fr));
  grid-template-rows: repeat(auto-fill, minmax(275px, 1fr));
  grid-gap: 1vw;
  }

#grid > div {
  font-size: 15px;
  padding: 15px;
  background: #9dbfb0;
  text-align: center;
}


div.all{
    display: grid;
}


div.cls{
    width: 320px;
    height: 320px;
    -webkit-transition: all 0.3s ease;;
    -moz-transition: all 0.3s ease;;
    -o-transition: all 0.3s ease;;
   transition: all 0.3s ease;
   padding: 15px;
} 

div.cls:hover{
    box-shadow:
    1px 1px #74e8b6,
    2px 2px #74e8b6,
    3px 3px #74e8b6,
    4px 4px #74e8b6,
    5px 5px #74e8b6,
    6px 6px #74e8b6,
    7px 7px #74e8b6;
  -webkit-transform: translateX(-7px);
  transform: translateX(-7px); 
}

</style>

<h1>Товар</h1>
<?php foreach ($clothe as $item): ?>
    <div class="cls">
        <font size="4" face="Federo" color="Black" ><?= Html::encode("{$item->name}") ?>
        <?= Html::img($item->photo, ['alt' => 'Фото товара', 'height' => '220px', 'width' => '220px']) ?><br>
        <h5><?= Html::encode("{$item->size}") ?></h5>
        <h4><?= Html::encode("{$item->price}") ?></h4>
        </font>
    </div>
<?php endforeach; ?>
</div>

<?= LinkPager::widget(['pagination' => $pagination]) ?>