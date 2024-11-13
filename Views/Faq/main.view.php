<?php 
use CMW\Controller\Core\SecurityController;
use CMW\Manager\Security\SecurityManager;
use CMW\Model\Contact\ContactModel;
use CMW\Model\Core\ThemeModel;
use CMW\Utils\Website;

/*TITRE ET DESCRIPTION*/
Website::setTitle(ThemeModel::getInstance()->fetchConfigValue('faq_title'));
Website::setDescription(ThemeModel::getInstance()->fetchConfigValue('faq_description'));
?>

<section class="mb-16 px-4 md:px-36 2xl:px-72 space-y-8">
    <div class="<?php if(ThemeModel::getInstance()->fetchConfigValue('faq_display_form')): {echo "lg:grid grid-cols-3 gap-6";} endif ?>">
        <?php if(ThemeModel::getInstance()->fetchConfigValue('faq_display_form')): ?>
        <div style="background: var(--card-bg-color);" class="rounded-lg py-6 px-4 space-y-3 h-fit">
            <h4 style="color: var(--main-color)" class="text-center"><?= ThemeModel::getInstance()->fetchConfigValue('faq_question_title') ?></h4>
            <form action="contact" method="post">
                <?php SecurityManager::getInstance()->insertHiddenToken() ?>
                <div class="px-4 w-full mt-2">
                    <label for="email-address-icon" class="block mb-2 text-sm font-medium">Votre mail :</label>
                    <input type="email" name="email" id="email-address-icon" class="input-focus border border-gray-300 text-sm rounded block w-full p-2.5" placeholder="votre@mail.com" required>
                </div>
                <div class="px-4 w-full mt-2">
                    <label for="name" class="block mb-2 text-sm font-medium">Votre pseudo :</label>
                    <input type="text" name="name" id="name" class="input-focus border border-gray-300 text-sm rounded block w-full p-2.5" placeholder="SuperGamer99" required>
                </div>
                <div class="px-4 w-full mt-2">
                    <label for="object" class="block mb-2 text-sm font-medium">Sujet :</label>
                    <input type="text" name="object" id="object" class="input-focus border border-gray-300text-sm rounded block w-full p-2.5" placeholder="J'aimerais savoir ..." required>
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
        <?php endif; ?>
        <div style="background: var(--card-bg-color);" class="rounded-lg p-6 col-span-2 h-fit space-y-4">
            <h4 style="color: var(--main-color)" class="text-center"><?= ThemeModel::getInstance()->fetchConfigValue('faq_answer_title') ?></h4>
            <?php foreach ($faqList as $faq) : ?>
            <div class="border rounded-lg px-4 py-2 border-gray-600">
                <div class="flex justify-between">
                    <p class="text-lg"><?= $faq->getQuestion() ?></p>
                    <?php if(ThemeModel::getInstance()->fetchConfigValue('faq_display_autor')): ?>
                        <div class="mini-card px-1"><?= $faq->getAuthor()->getPseudo() ?></div>
                    <?php endif; ?>
                </div>
                <i><?= $faq->getResponse() ?></i>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>