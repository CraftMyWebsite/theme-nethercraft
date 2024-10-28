<?php

/* @var \CMW\Entity\SimpleCookies\SimpleCookiesSettingsEntity $content */

use CMW\Utils\Website;

Website::setTitle('Cookies');
Website::setDescription('Découvrez pourquoi on à besoin de cookies !');
?>

<section class="mb-16 px-4 md:px-36 2xl:px-72 space-y-8">
    <div style="background: var(--card-bg-color);" class="rounded-lg p-6">
        <?= $content ?>
    </div>
</section>