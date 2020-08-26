<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = "Одежда";
$this->params['breadcrumbs'][] = $this->title;
?>

<script>    
    if(typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", "http://localhost/index.php?r=clothes%2Fshow");
    }
</script>

<style>



#grid { 
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-template-rows: repeat(<?= Html::encode($count / 3) ?>, 1fr);
    grid-gap: 2vw;
  }

#grid > div {
  font-size: 15px;
  padding: 15px;
  background: lightgrey;
  text-align: center;

  width: 320px;
  height: 320px;
  -webkit-transition: all 0.3s ease;;
  -moz-transition: all 0.3s ease;;
  -o-transition: all 0.3s ease;;
   transition: all 0.3s ease;
}

h1{
  text-align:center;
}

a.cls:hover{
    box-shadow:
    1px 1px darkgrey,
    2px 2px darkgrey,
    3px 3px darkgrey,
    4px 4px darkgrey,
    5px 5px darkgrey,
    6px 6px darkgrey,
    7px 7px darkgrey;
  -webkit-transform: translateX(-7px);
  transform: translateX(-7px); 
}

a.cls{
  font-size: 15px;
  padding: 15px;
  background: lightgrey;
  text-align: center;

  width: 320px;
  height: 320px;
  -webkit-transition: all 0.3s ease;;
  -moz-transition: all 0.3s ease;;
  -o-transition: all 0.3s ease;;
   transition: all 0.3s ease;
}

</style>

<div class="all">
<div id="grid">
<?php 
if(!isset($_SESSION)){
  session_start();
  $_SESSION['cart'] = array();
}

if(isset($_GET['name_toBasket'])){
  $orderPrice = $_GET['count_toBasket'] * $_GET['price_toBasket'];
  $productCart = $_GET['name_toBasket']."(".$_GET['count_toBasket']." шт.) ".$orderPrice." р.";
  unset($_GET['count_toBasket']);
  unset($_GET['price_toBasket']);
  unset($_GET['name_toBasket']);
  $_SESSION['cart'][] = $productCart;
}

if(isset($_GET['name']) && isset($_GET['surname']) && isset($_GET['email']) && isset($_SESSION['cart'])){
      Yii::$app->mailer->compose('test', ['goods' => $_SESSION['cart']])
          ->setFrom(['p_d.a.grachev@mpt.ru' => 'REU SHOP'])
          ->setTo($_GET['email'])
          ->setSubject('Заказ оформлен. ')
          ->send();

          unset($_SESSION['cart']);
}

foreach ($clothes as $item):?>
    <a href="/index.php?r=clothes%2Fview&id=<?= Html::encode("{$item->article}")?>" class="cls">
        <font size="4" face="Federo" color="Black" ><?= Html::encode("{$item->name}") ?>
        <?= Html::img($item->photo, ['alt' => 'Фото товара', 'height' => '220px', 'width' => '220px']) ?><br>
        <h4><?= Html::encode("{$item->price}") ?> ₽.</h4>
        <h5><?= Html::encode("{$item->size}") ?></h5>
        </font>
    </a>
<?php endforeach; ?>
</div>
</div>

<a>
<?= LinkPager::widget(['pagination' => $pagination]) ?>