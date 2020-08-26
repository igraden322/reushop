<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

$this->title = "Корзина";
$this->params['breadcrumbs'][] = $this->title;

?>

<style>
.allBasket{
    width: 100%;
}

.sbasket{
    background: Lightgrey;
    width: 525px;
    height: 600px;
    text-align: center;
    font-family:"Roboto Light";
    border: 1px solid black;
}

.orderDiv{
    background: Lightgrey;
    height: 480px;
    width: 525px;
    margin-top:-600px;
    margin-left:600px;
    text-align: center;
    font-family:"Roboto Light";
    border: 1px solid black;
}

.orderForm{
    border: 1px solid black;
    height: 350px;
    margin-left:50px;
    width: 430px;
    font-size: 20px;
    background: white;  
}

table{
    width: 430px;
}

td{
    padding: 14px;
}

li{
    list-style-type: none;
}



</style>
<div class="allBasket">
    <div class="sbasket">
        <h1>Ваша корзина:</h1>
        <lu>
            <?php if(isset($_SESSION['cart'])){
             foreach ($_SESSION['cart'] as $item): ?>
                <li><h4><?= $item; ?><a href="/index.php?r=site%2Fdelete&index=<?php echo key($_SESSION['cart']); next($_SESSION['cart']); ?>"> (Удалить) </a><h4></li>
            <?php endforeach;} 
            else{?>
                <h4>В вашей корзине нет товаров</h4>
            <?php } ?>
        </lu>
    </div>
    <?php if(isset($_SESSION['cart']))
    {?>
    <div class="orderDiv">
        <h1>Оформить заказ:</h1>
        <form class="orderForm" action="/index.php">
            <table>
                <tr>
                    <td>
                        <label for="name">Ваше имя:</label>
                    </td>
                    <td>
                        <input name="name" type="text" placeholder="Имя">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="surname">Ваша фамилия:</label>
                    </td>
                    <td>
                        <input name="surname" type="text" placeholder="Фамилия">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">E-mail</label> 
                    </td>
                    <td>
                        <input name="email" type="email" placeholder="yourmail@domen.com">
                    </td>
               </tr>
               <tr>
                    <td>
                        <label for="phone">Телефон:</label>
                    </td>
                    <td>
                        <input name="phone" type="tel" placeholder="+7(XXX)XXX-XX-XX">  
                    </td>
               </tr>
          </table><br>
          <input type="submit" value="Оформить">
        </form>
    </div>
    <?php } ?>
</div>