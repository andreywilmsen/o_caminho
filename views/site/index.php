<?php

use \yii\helpers\Html;

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <section>
        <div id="hero" class="center-display">
            <h1>O CAMINHO</h1>
        </div>
    </section>

    <section>
        <div id="presentation-evangelism" class="center-display flex-column">
            <div id="header-evangelism" class="">
                <h1>Um lugar de <span class="highlight">recomeços</span></h1>
            </div>
            <div id="content-evangelism" class="">
                <p>Você não está sozinho. Há um caminho de volta.
                    Há um Deus que ainda chama pelo seu nome.E aqui, há uma igreja esperando por você.
                </p>
            </div>
            <div id="button-evangelism" class="">
                <?= Html::button('Recomece hoje!', ['class' => 'btn general-button']) ?>
            </div>
        </div>
    </section>

    <section>
        <div id="days-of-worship" class="center-display">
            <h1>DIAS DE CULTO</h1>
        </div>
    </section>

    <section>
        <div id="monthly-schedule" class="center-display">
            <h1>AGENDA MENSAL</h1>
        </div>
    </section>

    <section>
        <div id="day-with-life" class="center-display">
            <h1>DIA COM VIDA</h1>
        </div>
    </section>

    <section>
        <div id="latests-posts" class="center-display">
            <h1>ÚLTIMAS POSTAGENS</h1>
        </div>
    </section>

</div>