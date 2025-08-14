<?php

use \yii\helpers\Html;

/** @var yii\web\View $this */

$this->title = 'O CAMINHO';
?>
<div class="site-index">

    <!-- HERO SECTION -->
    <?= $this->render('../components/hero.php'); ?>

    <!-- PRESENTATION-EVANGELISM SECTION -->
    <?= $this->render('../components/presentation-evangelism.php'); ?>

    <!-- DAYS OF WORSHIP SECTION -->
    <?= $this->render('../components/days-of-worship.php'); ?>

    <!-- MONTHLY SCHEDULE SECTION -->
    <?= $this->render('../components/monthly-schedule.php'); ?>

    <!-- DAY WITH LIFE SECTION -->
    <?= $this->render('../components/day-with-life.php'); ?>

    <!-- LATESTS POSTS -->
    <?= $this->render('../components/latests-posts.php'); ?>

</div>