
<?php
use yii\helpers\Html;
use kartik\grid\GridView;
/* @var $this yii\web\View */

$this->title = 'ระบบติดตามโครงการคณะวิทยาการจัดการ มหาวิทยาลัยราชภัฏสงขลา';
?>
<?php
$route1 = Yii::$app->urlManager->createUrl('site/login');
?>
<a href="<?=$route1?>">ไปที่ login</a><br>
<?php
$route2 = Yii::$app->urlManager->createUrl('site/about');
?>
<a href="<?=$route1?>">ไปที่ about</a>


