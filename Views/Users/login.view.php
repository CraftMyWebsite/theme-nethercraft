<?php

use CMW\Manager\Env\EnvManager;
use CMW\Model\Core\ThemeModel;
use CMW\Controller\Core\SecurityController;
use CMW\Manager\Security\SecurityManager;
use CMW\Utils\Website;

/* @var \CMW\Interface\Users\IUsersOAuth[] $oAuths */

Website::setTitle("Connexion");
Website::setDescription("Connectez-vous sur " . Website::getWebsiteName());
?>

<div class="mx-auto relative w-full max-w-md h-full mb-4">
    <div class="">
        <div class="py-6 px-6 lg:px-8">
            <form class="space-y-6" action="" method="post">
                <?php SecurityManager::getInstance()->insertHiddenToken() ?>
                <input hidden name="previousRoute" type="text" value="<?= $_SERVER['HTTP_REFERER'] ?>">
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium">Mail</label>
                    <input name="login_email" type="email" class="input-focus bg-gray-50 border border-gray-300  text-sm rounded-lg block w-full p-2.5" placeholder="mail@craftmywebsite.fr" required>
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium ">Mot de passe</label>
                    <div class="flex">
                        <input type="password" name="login_password" id="passwordInput" placeholder="••••••••" class="input-focus bg-gray-50 border border-gray-300 text-sm rounded-l-lg block w-full p-2.5" required>
                        <div onclick="showPassword()" data-cmw-style="background-color:global:main_color" class="cursor-pointer p-2.5 text-sm font-medium rounded-r-lg"><i class="fa fa-eye-slash" aria-hidden="true"></i></div>
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="login_keep_connect" name="login_keep_connect" type="checkbox" value="" class="input-focus w-4 h-4 bg-gray-50 rounded border border-gray-300">
                        </div>
                        <label for="login_keep_connect" class="ml-2 text-sm font-medium ">Se souvenir de moi</label>
                    </div>
                    <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>login/forgot" class="text-sm text-blue-700">Mot de passe oublié ?</a>
                </div>
                <div class="flex justify-center mt-2">
                    <?php SecurityController::getPublicData(); ?>
                </div>
                <button type="submit" data-cmw-style="background:global:main_color" class="head-button w-full rounded text-sm px-5 py-2.5 text-center">Connexion</button>
            </form>
            <div class="flex flex-no-wrap justify-center items-center py-4">
                <div class="px-10 w-auto">
                    <p class="font-medium">Se connecter avec</p>
                </div>
            </div>
            <div class="px-4 py-2 justify-center text-center w-full sm:w-auto">
                <div class="flex-wrap inline-flex space-x-3">
                    <?php foreach ($oAuths as $oAuth): ?>
                        <a href="oauth/<?= $oAuth->methodIdentifier() ?>" class="hover:text-blue-600"
                           aria-label="<?= $oAuth->methodeName() ?>">
                            <img src="<?= $oAuth->methodeIconLink() ?>"
                                 alt="<?= $oAuth->methodeName() ?>" width="32" height="32"/>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
function showPassword() {
  var x = document.getElementById("passwordInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>