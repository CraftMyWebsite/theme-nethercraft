<?php

use CMW\Model\Core\ThemeModel;
use CMW\Utils\Website;

Website::setTitle("Calendrier");
Website::setDescription("Découvrez nos futur événements");
?>

<section class="mb-16 px-4 md:px-36 2xl:px-72 space-y-8">
    <div data-cmw-style="background:global:card_bg_color" class="rounded-lg p-6">
        <div id='calendar'></div>
    </div>
</section>