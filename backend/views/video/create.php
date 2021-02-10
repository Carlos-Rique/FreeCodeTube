<?php

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Video */

$this->title = 'Create Video';
$this->params['breadcrumbs'][] = ['label' => 'Videos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="video-create">

  <h1><?= Html::encode($this->title) ?></h1>

  <div class="d-flex flex-column justify-content-center align-items-center">
      <div class="upload-icon">
        <i class="fas fa-upload"></i>
      </div>

      <br>

      <p class="m-2">Drag and drop a file you want to be upload</p>
      <p class="text-muted">Your video will be private until you publish it</p>


      <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data']
      ]) ?>

      <?php echo $form->errorSummary($model);?>

        <span class="btn btn-primary btn-file">
              Select file
              <input type="file" name="video" id="videoFile">
        </span>

      <?php ActiveForm::end() ?>
  </div>

</div>
