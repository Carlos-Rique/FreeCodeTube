<?php
/** @var $model \common\models\Video */

use yii\helpers\Url;
use yii\i18n\Formatter;

?>

<div class="card m-3" style="width: 14rem;">
  <a href="<?php echo Url::to(['/video/view', 'id' => $model->video_id])?>">
    <div class="embed-responsive embed-responsive-16by9 mb-3">
        <video 
        class="embed-responsive-item" 
        poster = "<?= $model->getThumbnailLink() ?>"
        src="<?php echo $model->getVideoLink()?>"
        >
        </video>
    </div>
  </a>
  <div class="card-body p-2">
    <h5 class="card-title m-0"><?= $model->title?></h5>
    <p class="text-muted card-text m-0 "><?= \common\helpers\Html::channelLink($model->createdBy) ?></p>  
    <p class="text-muted card-text m-0 ">
      <?= $model->getViews()->count() ?> views . 
      <?= Yii::$app->formatter->asRelativeTime($model->created_at) ?>
    </p>  
  </div>
</div>