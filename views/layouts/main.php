<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <style>
    div.categories{
        background: #262626;
        height: 40px;
        width: 100%;
        position:fixed;
        z-index: 1;
        text-align: center;
    }

    ul li{
        display:inline-block;
    }   

    li.clothes{
        font-family:"JOURNALISM";
        font-size: 31px;  
        color: white; 
        margin-left: 150px;

    }

    li.souvenirs{
        font-family:"JOURNALISM";
        font-size: 31px;  
        color: white; 
        margin-left: 150px;
    }

    li.accesories{
        font-family:"JOURNALISM";
        font-size: 31px;  
        color: white; 
        margin-left: 150px;
    }

    .basket{
        font-family:"JOURNALISM";
        font-size: 31px;  
        color: white; 
    }

    a.link{
        color:white;
    }

    a.link:hover{
        color:white;
    }
    </style>
</head>

<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'О нас', 'url' => ['/site/about']],
            ['label' => 'Контакты', 'url' => ['/site/contact']],
            ['label' => 'Регистрация', 'url' => ['site/signup'], 'visible' => Yii::$app->user->isGuest],
            Yii::$app->user->isGuest ? (
            ['label' => 'Войти', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Выйти (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?><br><br><br>

    <div class="categories">
        <ul>
            <li class = "basket"><a class="link" href="/index.php?r=site%2Fbasket">Корзина(<?php if(isset($_SESSION['cart'])){echo count($_SESSION['cart']);} else { echo "0"; }  ?>)</a></li>
            <li class="clothes"><a class="link" href="/index.php?r=clothes%2Fshow">Одежда</a></li>
            <li class="accesories"><a class="link" href="/index.php?r=accessories%2Fshow">Аксессуары</a></li>
            <li class="souvenirs"><a class="link" href="/index.php?r=souvenirs%2Fshow">Сувениры</a></li>
        </ul>
    </div>
    

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<br>



<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; MPT <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
