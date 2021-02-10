<?php

/* @var $model  \common\models\Video*/

use yii\helpers\StringHelper;
use yii\helpers\Url;

?>

<div class="media">
  <a href="<?php echo Url::to(['/video/update', 'id' => $model->video_id]) ?>">
    <div class="embed-responsive embed-responsive-16by9 mr-2" style="width: 120px">
      <video 
        class="embed-responsive-item" 
        poster = "<?= $model->getThumbnailLink() ?>"
        src="<?php echo $model->getVideoLink()?>" 
      >
      </video>
    </div>
  </a>
  <div class="media-body">
    <h6 class="mt-0"><?= $model->title ?></h6>
    <?php echo StringHelper::truncateWords($model->description, 5) ?>  
  </div>
</div>