<?php


use CMW\Manager\Env\EnvManager;
use CMW\Manager\Security\SecurityManager;
use CMW\Model\Core\ThemeModel;
use CMW\Utils\Website;
Website::setTitle("Double facteur");
Website::setDescription("Activer le double facteur");

?>

<div class="mx-auto relative p-4 w-full max-w-md h-full md:h-auto mb-6">
    <div class="">
        <div class="py-6 px-6 lg:px-8">
            <form class="space-y-6" action="<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') . 'login/validate/tfa' ?>" method="post">
                <?php (new SecurityManager())->insertHiddenToken() ?>
                <div>
                    <label for="code" class="block mb-2 text-sm font-medium">Code d'authentification</label>
                    <input id="code" name="code" type="text" class="input-focus border border-gray-300 text-sm rounded-lg block w-full p-2.5" placeholder="123456" required>
                </div>
                <button type="submit" class="head-button w-full rounded text-sm px-5 py-2.5 text-center">Connexion</button>
            </form>
        </div>
    </div>
</div>
