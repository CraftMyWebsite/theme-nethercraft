<?php

use CMW\Controller\Core\CoreController;
use CMW\Manager\Env\EnvManager;
use CMW\Manager\Uploads\ImagesManager;
use CMW\Manager\Views\View;
use CMW\Model\Core\ThemeModel;
use CMW\Utils\Website;

/* @var \CMW\Controller\Core\CoreController $core */
/* @var string $title */
/* @var string $description */
/* @var array $includes */

$siteName = Website::getWebsiteName();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta property="og:title" content=<?= $siteName ?>>
    <meta property="og:site_name" content="<?= $siteName ?>">
    <meta property="og:description" content="<?= Website::getDescription() ?>">
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="<?= EnvManager::getInstance()->getValue('PATH_URL') ?>">

    <title><?= Website::getTitle() ?></title>
    <meta name="description" content="<?= Website::getDescription() ?>">

    <meta name="author" content="CraftMyWebsite, <?= $siteName ?>">
    <meta name="publisher" content="<?= $siteName ?>">
    <meta name="copyright" content="CraftMyWebsite, <?= $siteName ?>">
    <meta name="robots" content="follow, index, all"/>


    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Nethercraft/Assets/Css/style.css">
    <link rel="stylesheet" href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Admin/Resources/Vendors/Fontawesome-free/Css/fa-all.min.css">

    <?= ImagesManager::getFaviconInclude() ?>

    <?php
    View::loadInclude($includes, "styles");
    ?>


</head>

<script>let intervalCar = <?= ThemeModel::getInstance()->fetchConfigValue('slider_interval')?></script>

<style>
    @font-face {  font-family: angkor;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Nethercraft/Assets/Webfonts/Angkor-Regular.ttf");  }
    @font-face {  font-family: ibmplexsans;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Nethercraft/Assets/Webfonts/IBMPlexSans-Regular.ttf");  }
    @font-face {  font-family: kanit;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Nethercraft/Assets/Webfonts/Kanit-Regular.ttf");  }
    @font-face {  font-family: lora;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Nethercraft/Assets/Webfonts/Lora-Regular.ttf");  }
    @font-face {  font-family: madimione;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Nethercraft/Assets/Webfonts/MadimiOne-Regular.ttf");  }
    @font-face {  font-family: ojuju;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Nethercraft/Assets/Webfonts/Ojuju-Regular.ttf");  }
    @font-face {  font-family: opensans;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Nethercraft/Assets/Webfonts/OpenSans-Regular.ttf");  }
    @font-face {  font-family: playfairdisplay;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Nethercraft/Assets/Webfonts/PlayfairDisplay-Regular.ttf");  }
    @font-face {  font-family: robotocondensed;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Nethercraft/Assets/Webfonts/RobotoCondensed-Regular.ttf");  }
    @font-face {  font-family: robotomono;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Nethercraft/Assets/Webfonts/RobotoMono-Regular.ttf");  }
    @font-face {  font-family: robotoslab;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Nethercraft/Assets/Webfonts/RobotoSlab-Regular.ttf");  }
    @font-face {  font-family: rubik;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Nethercraft/Assets/Webfonts/Rubik-Regular.ttf");  }
    @font-face {  font-family: ubuntu;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Nethercraft/Assets/Webfonts/Ubuntu-Regular.ttf");  }
    @font-face {  font-family: roboto;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Nethercraft/Assets/Webfonts/Roboto-Regular.ttf");  }
    @font-face {  font-family: unbounded;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Nethercraft/Assets/Webfonts/Unbounded-Regular.ttf");  }
    @font-face {  font-family: montserrat;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Nethercraft/Assets/Webfonts/Montserrat-Regular.ttf");  }
    @font-face {  font-family: paytone;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Nethercraft/Assets/Webfonts/PaytoneOne-Regular.ttf");  }
    @font-face {  font-family: sora;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Nethercraft/Assets/Webfonts/Sora-Regular.ttf");  }
    @font-face {  font-family: outfit;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Nethercraft/Assets/Webfonts/Outfit-Regular.ttf");  }
    @font-face {  font-family: alata;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Nethercraft/Assets/Webfonts/Alata-Regular.ttf");  }
    @font-face {  font-family: titan;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Nethercraft/Assets/Webfonts/TitanOne-Regular.ttf");  }
    @font-face {  font-family: pressstart;  src:url("<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Nethercraft/Assets/Webfonts/PressStart2P-Regular.ttf");  }


    :root {
        --what-to-do-text-color: <?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_text_color') ?>;
        --what-to-do-blur: <?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_blur') ?>px;
        --what-to-do-img-1: url(<?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_img_1') ?>);
        --what-to-do-img-2: url(<?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_img_2') ?>);
        --what-to-do-img-3: url(<?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_img_3') ?>);
        --what-to-do-img-4: url(<?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_img_4') ?>);
        --what-to-do-img-5: url(<?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_img_5') ?>);
        --what-to-do-img-6: url(<?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_img_6') ?>);
        --what-to-do-img-7: url(<?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_img_7') ?>);
        --what-to-do-img-8: url(<?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_img_8') ?>);
        --main-color: <?= ThemeModel::getInstance()->fetchConfigValue('main_color') ?>;
        --link-color: <?= ThemeModel::getInstance()->fetchConfigValue('link_color') ?>;
        --hover-link-color: <?= ThemeModel::getInstance()->fetchConfigValue('hover_link_color') ?>;
        --bg-color : <?= ThemeModel::getInstance()->fetchConfigValue('bg_color') ?>;
        --card-bg-color : <?= ThemeModel::getInstance()->fetchConfigValue('card_bg_color') ?>;
        --card-in-card-bg-color : <?= ThemeModel::getInstance()->fetchConfigValue('card_in_card_bg_color') ?>;
        --forum-hover-card : <?= ThemeModel::getInstance()->fetchConfigValue('forum_hover_card') ?>;
        --footer-bg-color : <?= ThemeModel::getInstance()->fetchConfigValue('footer_bg_color') ?>;
        --input-bg-color : <?= ThemeModel::getInstance()->fetchConfigValue('input_bg_color') ?>;
        --input-border-color : <?= ThemeModel::getInstance()->fetchConfigValue('input_border_color') ?>;
        --input-text-color : <?= ThemeModel::getInstance()->fetchConfigValue('input_text_color') ?>;
        --text-color : <?= ThemeModel::getInstance()->fetchConfigValue('text_color') ?>;
        --particles-tall : <?= ThemeModel::getInstance()->fetchConfigValue('particles_tall') ?>px;
        --logo-float-duration : <?= ThemeModel::getInstance()->fetchConfigValue('logo_float_duration') ?>s;
        --nav-text-color : <?= ThemeModel::getInstance()->fetchConfigValue('nav_text_color') ?>;
        --nav-active-color : <?= ThemeModel::getInstance()->fetchConfigValue('nav_active_color') ?>
        --flotant-translate : <?= ThemeModel::getInstance()->fetchConfigValue('float_translate') ?>px;
        --alert-text-color: <?= ThemeModel::getInstance()->fetchConfigValue('alert_text_color') ?>;
        --new-img-rotate : <?= ThemeModel::getInstance()->fetchConfigValue('new_img_rotate') ?>deg;
        --new-img-scale : <?= ThemeModel::getInstance()->fetchConfigValue('new_img_scale') ?>;
        --new-img-time : <?= ThemeModel::getInstance()->fetchConfigValue('new_img_time') ?>s;
    }

    ::-webkit-scrollbar {
        width: 12px;

    }
    ::-webkit-scrollbar-thumb {
        background: var(--main-color);
        border: var(--bg-color) solid 1px;
    }
    ::-webkit-scrollbar-track {
        background: var(--bg-color);
    }

    ::-webkit-scrollbar-thumb:hover {
        background: var(--main-color);
    }

    .a-base {
        color: var(--link-color);
    }

    .a-base:hover {
        text-shadow: 0 0 8px var(--hover-link-color);
        color: var(--hover-link-color);
    }

    .a-forum {
        color: var(--link-color);
    }

    .a-forum:hover {
        text-shadow: 0 0 8px var(--hover-link-color);
        color: var(--text-color);
    }

    .hover-topic-forum {
        background-color: var(--card-in-card-bg-color);
    }

    .hover-topic-forum:hover {
        background-color: var(--forum-hover-card);
    }

    .mini-card {
        background-color: var(--main-color);
    }

    .overlay {
        position: absolute;
        background: linear-gradient(to bottom, var(--main-color) 0%,var(--bg-color) 100%);
        height: 50vh;
        top: 0;
        left: 0;
        width: 100%;
        margin: 0;
        z-index: -5;
    }

    .what-to-do {
        position: relative;
    }

    .what-to-do::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background-image: var(--url-image-what-to-do);
        filter: blur(var(--what-to-do-blur));
        z-index: 10;
    }

    .wiki-a:hover {
        text-shadow: 0 0 8px var(--main-color);
        transform: translateX(3px);
        transition: transform 0.3s ease, text-shadow 0.3s ease;
    }

    .input-focus {
        background-color: var(--input-bg-color);
        border-color: var(--input-border-color);
        color: var(--input-text-color);
    }

    .input-focus:focus {
        border-color: var(--main-color);
        box-shadow: 0 0 5px var(--main-color);
    }

    .input-focus:checked {
        background-color: var(--main-color);
    }

    .head-button {
        background-color: var(--main-color);
    }

    .head-button:hover {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 0 30px var(--main-color);
    }

    .hyper-play-card:hover .fa-circle-play {
        text-shadow: 0 0 8px var(--main-color);
        transform: translateY(-3px);
        transition: transform 0.3s ease, text-shadow 0.3s ease;
    }

    .hyper-play-card:hover .hyper-title {
        text-shadow: 0 0 8px var(--main-color);
        transform: translateY(-3px);
        transition: transform 0.3s ease, text-shadow 0.3s ease;
    }

    .hyper-card:hover .fa-circle-play {
        text-shadow: 0 0 8px var(--main-color);
        transform: translateY(-3px);
        transition: transform 0.3s ease, text-shadow 0.3s ease;
    }

    .hyper-card:hover .hyper-title {
        text-shadow: 0 0 8px var(--main-color);
        transform: translateY(-3px);
        transition: transform 0.3s ease, text-shadow 0.3s ease;
    }

    .particle {
        position: fixed;
        z-index: 20;
        bottom: 0;
        background: var(--main-color);
        width: var(--particles-tall);
        height: var(--particles-tall);
        border-radius: 50%;
        animation: floatUp 5s linear infinite;
        opacity: 0;
    }

    .round-icon-step {
        background: var(--main-color);
        width: 100px;
        height: 100px;
        font-size: 20px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .nav-a {
        color: var(--nav-text-color);
    }

    .nav-a:hover {
        color: var(--nav-active-color);
    }

    .nav-active-a {
        position: relative;
        display: inline-block;
        color: var(--nav-active-color);
        z-index: 30;
    }

    @keyframes floatUp {
        0% {
            bottom: 0;
            opacity: 1;
        }
        100% {
            bottom: 100%;
            opacity: 0;
        }
    }

    @keyframes floatAnimation {
        0% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(var(--flotant-translate));
        }
        100% {
            transform: translateY(0px);
        }
    }

    .floating {
        animation: floatAnimation var(--logo-float-duration) ease-in-out infinite;
    }

    .rotate-news-img {
        transition: transform var(--new-img-time) ease-in-out; /* Transition douce pour l'effet */
    }

    .rotate-news:hover .rotate-news-img {
        transform: rotate(var(--new-img-rotate)) scale(var(--new-img-scale));
    }
</style>

<body style="background-color: var(--bg-color); color: var(--text-color)" class=" font-<?= ThemeModel::getInstance()->fetchConfigValue('website_font') ?> flex flex-col min-h-screen">
<div class="overlay">
</div>
<?php
View::loadInclude($includes, "beforeScript");
echo CoreController::getInstance()->cmwWarn();
?>
