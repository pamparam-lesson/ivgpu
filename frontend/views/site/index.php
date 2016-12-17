<?php

use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'iv-politeh.ru - Сайт для преподавателей и студентов ИВГПУ';

?>

<?php foreach($facultets as $facultet){?>

    <p><a href="<?php echo Url::to(['facultets/index','alias'=>$facultet->alias]);?>"><?php echo $facultet->name ;?></a></p>

<?php } ?>

