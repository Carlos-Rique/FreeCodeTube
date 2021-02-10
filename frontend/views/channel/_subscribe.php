<?php
/* @var $error string */
use yii\helpers\Html;
use yii\helpers\Url;

?>

<?php if (isset($error)): ?>
<div class="alert alert-danger">
        <?= nl2br(Html::encode($error)) ?>
</div>
<?php endif; ?>

<a 
  class="btn <?php echo $channel->isSubscribed(Yii::$app->user->id) ?
  'btn-secondary' : 'btn-danger' ?>"  
  href="<?php echo Url::to(['channel/subscribe', 'username' => $channel->username])?>"
  data-method = "post" data-pjax = "1">
    Subscribe <i class="far fa-bell"></i>
</a> <?= $channel->getSubscribers()->count(); ?>
