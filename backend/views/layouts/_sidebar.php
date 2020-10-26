<?php

?>

<aside class="shadow">

  <?php echo \yii\bootstrap4\Nav::widget([
    'options' => [
      'class' => 'd-flex flex-column nav-pills'
    ],
    'items' => [
      [
        'label' => 'DashBoard',
        'url' => ['/site/index']
      ],
      [
        'label' => 'Videos',
        'url' => ['/video/index']
      ]
    ]
  ])  ?>

</aside>
