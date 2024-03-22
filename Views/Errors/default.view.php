<?php

use CMW\Manager\Env\EnvManager;
use CMW\Model\Core\ThemeModel;
use CMW\Utils\Website;

Website::setTitle("Erreur");
Website::setDescription("Erreur");
?>
<section class="mb-6 px-4 md:px-36 2xl:px-72">
    <div style="background: var(--main-color); color: var(--alert-text-color)" class="px-4 py-16 rounded-lg text-center">
        <h4>Whouuupsss</h4>
        <p>Il semblerais qu'il y ai un problème !</p>
        <p>Contactez l'administrateur du site pour lui indiquer cette erreur !</p>
        <p>Si vous êtes l'administrateur et que vous rencontrez des difficultés contactez le support de CraftMyWebsite.</p>
        <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>" style="background-color: var(--bg-pixcraft); color: var(--nav-color-pixcraft-hover)" class="font-medium rounded px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2">Retourner à l'accueil</a>
    </div>
</section>