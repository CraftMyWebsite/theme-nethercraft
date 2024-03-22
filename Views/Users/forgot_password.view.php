<?php

use CMW\Controller\Core\SecurityController;
use CMW\Manager\Env\EnvManager;
use CMW\Manager\Lang\LangManager;
use CMW\Manager\Security\SecurityManager;
use CMW\Model\Core\ThemeModel;
use CMW\Utils\Website;

/*TITRE ET DESCRIPTION*/
Website::setTitle("Mot de passe oublié");
Website::setDescription("C'est pas très bien d'oublié son mot de passe ...");
?>

<div class="mx-auto relative p-4 w-full max-w-md h-full md:h-auto mb-6">
    <div class="">
        <div class="py-6 px-6 lg:px-8">
            <form class="space-y-6" action="" method="post">
                <?php (new SecurityManager())->insertHiddenToken() ?>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium">Mail</label>
                    <input id="email" name="mail" type="email" class="input-focus border border-gray-300 text-sm rounded-lg block w-full p-2.5" placeholder="mail@craftmywebsite.fr" required>
                </div>
                <div class="flex justify-center">
                    <?php SecurityController::getPublicData(); ?>
                </div>
                <button type="submit" class="head-button w-full rounded text-sm px-5 py-2.5 text-center">Réinitialiser mon mot de passe</button>
            </form>
        </div>
    </div>
</div>
