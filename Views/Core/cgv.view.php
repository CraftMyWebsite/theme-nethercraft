<?php
use CMW\Model\Contact\ContactModel;
use CMW\Model\Core\ThemeModel;
use CMW\Utils\Website;

/*TITRE ET DESCRIPTION*/
Website::setTitle("CGV");
Website::setDescription("Condition de vente");
?>
<section class="mb-16 px-4 md:px-36 2xl:px-72 space-y-8">
    <div style="background: var(--card-bg-color);" class="rounded-lg p-6 col-span-3 h-fit">
        <h4 style="color: var(--main-color)" class="text-center"><?= ThemeModel::getInstance()->fetchConfigValue('footer_desc_condition_sale') ?></h4>
        <p><?= $cgv->getContent() ?></p>
        <div class="my-4 border border-gray-800"></div>
        <p>Écrit par <b><?= $cgv->getLastEditor()->getPseudo() ?></b>, mis à jour le <?= $cgv->getUpdate() ?></p>
    </div>
</section>