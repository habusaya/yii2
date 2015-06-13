<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->title = 'Yii2 Web application Jhcis The Gangs.';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>ยินดีต้อนรับ</h1>

        <p class="lead">ทดสอบระบบ Yii2 Web application Jhcis The Gangs.</p>

        <p><a class="btn btn-lg btn-success" href="https://www.facebook.com/groups/JHCISTheGangs/">เข้าสู่เว็ปไซต์ Jhcis The Gangs</a></p>
    </div>
    
    <?php
    $route1 = Yii::$app->urlManager->createUrl('test/test1');
    ?>
    <a href="<?=$route1?>">ไปที่ test1</a>
    <br>
  
   <?php
    $route1 = Yii::$app->urlManager->createUrl(['test/test2','name'=>'sakarin','lname'=>'habusaya']);
    ?>
    <a href="<?=$route1?>">ไปที่ test2</a> 
    <br>
    
    
    <?=
    Html::a('ลิงค์แบบที่3', ['test/test1','a'=>'1']);
    ?>
    
    
    
    
    
    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
