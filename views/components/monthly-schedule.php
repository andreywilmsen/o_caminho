<?php

use \yii\helpers\Html;

/** @var yii\web\View $this */

?>

    <section>
        <div id="monthly-schedule">
            <div class="schedule-general">
                <div class="schedule-title">
                    <h1>AGENDA MENSAL</h1>
                </div>
                <ul>
                    <li>Culto com vida - <span>01/01/25</span></li>
                    <li>Oração das premícias - <span>01 á 03 /01/25</span></li>
                    <li>Dia com vida - <span>02/01/25</span></li>
                    <li>Almoço comunitário - <span>04/01/25</span></li>
                </ul>
                <div class="schedule-button">
                    <?= Html::button('Saiba mais', ['class' => 'btn general-button button-schedule']) ?>
                </div>
            </div>
            <div>
                <?= Html::img('/assets/o_caminho.png', ['class' => 'image_logo']) ?>
            </div>
        </div>
    </section>
