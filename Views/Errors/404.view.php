<?php

use CMW\Manager\Env\EnvManager;
use CMW\Model\Core\ThemeModel;
use CMW\Utils\Website;

Website::setTitle("Page introuvable");
Website::setDescription("Erreur 404");

?>
<section class="mb-6 px-4 md:px-36 2xl:px-72">
    <div style="background: var(--main-color); color: var(--alert-text-color)" class="px-4 py-16 rounded-lg text-center">
        <h4>Whouuupsss</h4>
        <p>Erreur 404, page introuvable</p>
        <p>Vous pouvez toujours <a class="a-base" href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>">retrourner à l'accueil</a>.</p>
    </div>
</section>