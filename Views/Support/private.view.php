<?php

use CMW\Manager\Env\EnvManager;
use CMW\Model\Core\ThemeModel;
use CMW\Model\Support\SupportResponsesModel;
use CMW\Utils\Website;

/* @var CMW\Entity\Support\SupportEntity[] $privateSupport */

Website::setTitle("Support");
Website::setDescription("Consultez les réponses de nos experts.");
?>

<section class="py-8 px-8 md:px-28 2xl:px-72">
    <div class="mb-4 text-center">
        <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>support" class="head-button font-medium text-sm rounded px-2 py-1">Retourner au support</a>
    </div>
    <div data-cmw-style="background:global:card_bg_color" class="rounded-lg col-span-2 h-fit p-4">
        <div class="page-title-divider text-center pt-1 w-full">
            <h2 data-cmw-style="color:global:main_color"class=" text-xl uppercase">Mes demandes</h2>
        </div>
        <div class="mt-4">
            <div class="lg:grid grid-cols-3 gap-6 lg:space-x-0 space-x-4">
                <?php foreach ($privateSupport as $support): ?>
                <a href="<?= $support->getUrl() ?>">
                    <div style="background: var(--card-in-card-bg-color);" class=" lg:mb-4">
                        <h6 class="p-1" data-cmw-style="background-color:global:main_color"><?= mb_strimwidth($support->getQuestion(), 0, 30, '...') ?></h6>
                        <div class="px-2 py-2">
                            <p>Confidentialité : <?= $support->getIsPublicFormatted() ?></p>
                            <p>Statut : <?= $support->getStatusFormatted() ?></p>
                            <p>Date : <?= $support->getCreated() ?></p>
                            <p>Réponses : <?= SupportResponsesModel::getInstance()->countResponses($support->getId()) ?></p>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>