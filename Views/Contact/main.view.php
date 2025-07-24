<?php

use CMW\Controller\Core\SecurityController;
use CMW\Manager\Security\SecurityManager;
use CMW\Model\Core\ThemeModel;
use CMW\Utils\Website;

Website::setTitle("Contactez-nous");
Website::setDescription("Contactez-nous dès maintenant");
?>

<section class="mb-16 px-4 md:px-36 2xl:px-72 space-y-8">
    <div data-cmw-style="background:global:card_bg_color" class="rounded-lg p-6">
        <form action="" method="post" class="rounded-md p-8">
            <?php SecurityManager::getInstance()->insertHiddenToken() ?>
            <div class="lg:grid grid-cols-2">
                <div class="px-4 w-full">
                    <label for="email-address-icon" class="block mb-2 text-sm font-medium">Votre mail :</label>
                    <input type="email" name="email" id="email-address-icon" class="input-focus border border-gray-300 text-sm rounded block w-full p-2.5" placeholder="votre@mail.com" required>
                </div>
                <div class="px-4 w-full">
                    <label for="name" class="block mb-2 text-sm font-medium">Votre pseudo :</label>
                    <input type="text" name="name" id="name" class="input-focus border border-gray-300 text-sm rounded block w-full p-2.5" placeholder="SuperGamer99" required>
                </div>
            </div>
            <div class="px-4 w-full mt-2">
                <label for="object" class="block mb-2 text-sm font-medium">Sujet :</label>
                <input type="text" name="object" id="object" class="input-focus border border-gray-300text-sm rounded block w-full p-2.5" placeholder="J'aimerais voir avec vous ..." required>
            </div>
            <div class="px-4 w-full mt-2">
                <label for="message" class="block mb-2 text-sm font-medium">Votre message :</label>
                <textarea minlength="50"  id="message" name="content" rows="4" class="input-focus block p-2.5 w-full text-sm rounded border border-gray-300" placeholder="Bonjour," required></textarea>
            </div>
            <div class="flex justify-center mt-4">
                <?php SecurityController::getPublicData(); ?>
            </div>
            <div class="text-center mt-4">
                <button type="submit" class="head-button font-medium rounded px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2">Soumettre <i class="fa-solid fa-paper-plane"></i></button>
            </div>
        </form>
    </div>
</section>