<?php

use CMW\Controller\Core\SecurityController;
use CMW\Manager\Env\EnvManager;
use CMW\Manager\Security\SecurityManager;
use CMW\Model\Core\ThemeModel;
use CMW\Model\Support\SupportSettingsModel;
use CMW\Utils\Website;

/* @var CMW\Entity\Support\SupportEntity $support */
/* @var CMW\Entity\Support\SupportResponseEntity[] $responses */

Website::setTitle("Support");
Website::setDescription("Consultez les réponses de nos experts.");
?>
<section class="mb-16 px-8 md:px-28 2xl:px-72">
    <div class="mb-4 text-center">
        <div class="flex justify-between">
            <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>support" data-cmw-style="background:global:main_color" class="head-button font-medium text-sm rounded px-2 py-1">< Retourner au support</a>
            <?php if ($support->getStatus() !== "2"): ?>
                <a href="<?= $support->getCloseUrl() ?>" data-cmw-style="background:global:main_color" class="head-button font-medium text-sm rounded px-2 py-1">Cloturer</a>
            <?php endif; ?>
        </div>
    </div>
    <div data-cmw-style="background:global:card_bg_color" class="rounded-lg col-span-2 h-fit p-4">
        <div class="p-6">
            <div class="flex flex-wrap justify-between items-center">
                <p>Auteur : <?= $support->getUser()->getPseudo() ?></p>
                <p>État : <?= $support->getStatusFormatted() ?></p>
                <p>Visibilité : <?= $support->getIsPublicFormatted() ?></p>
                <p>Date : <?= $support->getCreated() ?></p>
            </div>
            <div class="space-y-3 lg:mb-4 mt-4">
                <h4 class="p-1 text-center" style="background: var(--main-color);">Demande</h4>
                <div style="background: var(--card-in-card-bg-color);" class="px-4 py-2 rounded-lg ">
                    <div class=" md:grid md:grid-cols-5 py-4 pr-4 mb-4">
                        <div class="">
                            <img class="hidden lg:block mx-auto rounded-lg" height="30%" width="30%" src="https://apiv2.craftmywebsite.fr/skins/3d/user=<?= $support->getUser()->getPseudo() ?>&headOnly=true" alt="...">
                        </div>
                        <div class="col-span-4 px-4 md:px-0">
                            <div class="flex justify-between">
                            </div>
                            <div><?= $support->getQuestion() ?></div>
                        </div>
                    </div>
                </div>
                <h4 class="p-1 text-center" style="background: var(--main-color);">Réponses</h4>
                <?php foreach ($responses as $response): ?>
                <div style="background: var(--card-in-card-bg-color);" class="px-4 py-2 rounded-lg ">
                    <div class="rounded-lg md:grid md:grid-cols-5 py-4 pr-4 mb-4">
                        <div class="">
                            <img class="hidden lg:block mx-auto rounded-lg " height="30%" width="30%" src="https://apiv2.craftmywebsite.fr/skins/3d/user=<?= $response->getUser()->getPseudo() ?>&headOnly=true" alt="...">
                        </div>
                        <div class="col-span-4 px-4 md:px-0">
                            <div class="flex justify-between">
                                <p class="font-bold"><?= $response->getUser()->getPseudo() ?> :</p>
                                <?php if ($response->getIsStaff()): ?><p class="bg-lime-600 text-white font-medium inline-block px-2 py-1 rounded-sm text-xs"><?= $response->getIsStaffFormatted() ?></p><?php endif; ?>
                            </div>
                            <div><?= $response->getResponse() ?></div>
                            <p>le: <?= $response->getCreated() ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php if ($support->getStatus() !== "2"): ?>
                <form class="space-y-6 mt-4" action="" method="post">
                    <?php SecurityManager::getInstance()->insertHiddenToken() ?>
                    <div class="mb-4">
                        <label for="support_response_content" class="block mb-2 text-sm font-bold text-gray-900">Votre réponse :</label>
                        <textarea minlength="20" id="support_response_content" name="support_response_content" rows="4"
                                  class="input-focus block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300"
                                  placeholder="Vous pouvez ..."></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" data-cmw-style="background:global:main_color" class="head-button font-medium rounded px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2">Répondre <i class="fa-solid fa-comment"></i></button>
                    </div>
                </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>