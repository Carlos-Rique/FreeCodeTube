<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use common\widgets\Alert;

AppAsset::register($this);  //it imports the css
$this->beginContent('@backend/views/layouts/base.php');
?>

<main class="d-flex">
    <div class="content wrapper p-3">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<?php $this->endContent();?>