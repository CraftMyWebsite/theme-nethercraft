<?php

use CMW\Manager\Env\EnvManager;
use CMW\Model\Core\ThemeModel;
use CMW\Controller\Core\SecurityController;
use CMW\Manager\Security\SecurityManager;
use CMW\Controller\Users\UsersController;
use CMW\Utils\Website;

/*Check installed package*/
use CMW\Controller\Core\PackageController;
/*NEWS BASIC NEED*/
use CMW\Model\News\NewsModel;
if (PackageController::isInstalled("News")) {
    /* @var \CMW\Entity\News\NewsEntity $firstNews */
    $firstNews = NewsModel::getInstance()->getNewsById(ThemeModel::getInstance()->getInstance()->fetchConfigValue('first_news'));
    $secondNews = NewsModel::getInstance()->getNewsById(ThemeModel::getInstance()->getInstance()->fetchConfigValue('second_news'));
    $thirdNews = NewsModel::getInstance()->getNewsById(ThemeModel::getInstance()->getInstance()->fetchConfigValue('third_news'));
}

/*CONTACT BASIC NEDD*/
use CMW\Model\Contact\ContactModel;


/*TITRE ET DESCRIPTION*/
Website::setTitle(ThemeModel::getInstance()->getInstance()->fetchConfigValue('home_title'));
Website::setDescription(Website::getWebsiteDescription());
?>

<section class="mb-16 px-4 md:px-36 2xl:px-72 space-y-8">
    <!-- Personnalisé 1 -->
    <?php if(ThemeModel::getInstance()->fetchConfigValue('custom_section_active_1')): ?>
    <div style="background: var(--card-bg-color);" class="hidden px-8 py-4">
        <div class="text-center w-full">
            <h4 style="color: var(--main-color)"><?= ThemeModel::getInstance()->fetchConfigValue('custom_section_title_1') ?></h4>
        </div>
        <div>
            <?= ThemeModel::getInstance()->fetchConfigValue('custom_section_content_1') ?>
        </div>
    </div>
    <?php endif; ?>

    <!-- Personnalisé 2 -->
    <?php if(ThemeModel::getInstance()->fetchConfigValue('custom_section_active_2')): ?>
    <div style="background: var(--card-bg-color);" class="hidden px-8 py-4">
        <div class="text-center w-full">
            <h4 style="color: var(--main-color)"><?= ThemeModel::getInstance()->fetchConfigValue('custom_section_title_2') ?></h4>
        </div>
        <div>
            <?= ThemeModel::getInstance()->fetchConfigValue('custom_section_content_2') ?>
        </div>
    </div>
    <?php endif; ?>

    <?php if (PackageController::isInstalled("News")): ?>
    <div>
        <?php if(ThemeModel::getInstance()->fetchConfigValue('news_section_active')): ?>
            <?php if ($firstNews != null): ?>
                <div>
                    <div style="background: var(--card-bg-color);" class="flex flex-row ">
                        <div class="relative w-[60%] overflow-hidden">
                            <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>news/<?= $firstNews->getSlug() ?>" class="rotate-news">
                                <img src="<?= $firstNews->getImageLink() ?>" style="object-fit: cover" class="rotate-news-img absolute w-full h-full">
                            </a>
                        </div>
                        <div class="w-[40%] px-6 pt-6 pb-10 space-y-4">
                            <h4 style="color: var(--main-color)"><?= $firstNews->getTitle() ?></h4>
                            <p><?= $firstNews->getDescription() ?></p>
                            <div class="flex items-center space-x-2">
                                <img width="40px" loading="lazy" src="https://apiv2.craftmywebsite.fr/skins/2d/user=<?= $firstNews->getAuthor()->getPseudo() ?>&headOnly=true">
                                <div class="w-full flex justify-between items-end">
                                    <div>
                                        <p><?= $firstNews->getAuthor()->getPseudo() ?></p>
                                        <p class="text-xs"><?= $firstNews->getDateCreated() ?></p>
                                    </div>
                                    <div>
                                        <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>news/<?= $firstNews->getSlug() ?>" class="head-button px-2 py-1 rounded-lg">Lire l'article</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($secondNews != null): ?>
                <div class="lg:grid grid-cols-2 gap-6">
                <div style="background: var(--card-bg-color);" class="flex flex-col ">
                    <div class="relative h-52 overflow-hidden">
                        <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>news/<?= $secondNews->getSlug() ?>" class="rotate-news">
                            <img src="<?= $secondNews->getImageLink() ?>" style="object-fit: cover" class="rotate-news-img top-0 left-0 absolute w-full h-full">
                        </a>
                    </div>
                    <div class="px-6 py-4 space-y-4">
                        <h4 style="color: var(--main-color)"><?= $secondNews->getTitle() ?></h4>
                        <p><?= $secondNews->getDescription() ?></p>
                        <div class="flex items-center space-x-2">
                            <img width="40px" loading="lazy" src="https://apiv2.craftmywebsite.fr/skins/2d/user=<?= $secondNews->getAuthor()->getPseudo() ?>&headOnly=true">
                            <div class="w-full flex justify-between items-end">
                                <div>
                                    <p><?= $secondNews->getAuthor()->getPseudo() ?></p>
                                    <p class="text-xs"><?= $secondNews->getDateCreated() ?></p>
                                </div>
                                <div>
                                    <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>news/<?= $secondNews->getSlug() ?>" class="head-button px-2 py-1 rounded-lg">Lire l'article</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($thirdNews != null): ?>
                <div style="background: var(--card-bg-color);" class="flex flex-col ">
                    <div class="relative h-52 overflow-hidden">
                        <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>news/<?= $thirdNews->getSlug() ?>" class="rotate-news">
                            <img src="<?= $thirdNews->getImageLink() ?>" style="object-fit: cover" class="rotate-news-img top-0 left-0 absolute w-full h-full">
                        </a>
                    </div>
                    <div class="px-6 py-4 space-y-4">
                        <h4 style="color: var(--main-color)"><?= $thirdNews->getTitle() ?></h4>
                        <p><?= $thirdNews->getDescription() ?></p>
                        <div class="flex items-center space-x-2">
                            <img width="40px" loading="lazy" src="https://apiv2.craftmywebsite.fr/skins/2d/user=<?= $thirdNews->getAuthor()->getPseudo() ?>&headOnly=true">
                            <div class="w-full flex justify-between items-end">
                                <div>
                                    <p><?= $thirdNews->getAuthor()->getPseudo() ?></p>
                                    <p class="text-xs"><?= $thirdNews->getDateCreated() ?></p>
                                </div>
                                <div>
                                    <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>news/<?= $thirdNews->getSlug() ?>" class="head-button px-2 py-1 rounded-lg">Lire l'article</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>

    <?php endif; ?>

    <?php if(ThemeModel::getInstance()->fetchConfigValue('use_what_to_do')): ?>
        <div class="py-4">
            <div class="text-center w-full">
                <h4 style="color: var(--main-color)"><?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_title') ?></h4>
            </div>
            <div class="lg:grid grid-cols-<?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_grid') ?> gap-6 mt-4">
                <?php if(ThemeModel::getInstance()->fetchConfigValue('what_to_do_use_1')): ?>
                <a href="<?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_link_1') ?>" style="--url-image-what-to-do: var(--what-to-do-img-1); color: var(--what-to-do-text-color)" class="head-button what-to-do w-full">
                    <div class="py-44 z-50 relative text-center">
                        <h4 class="uppercase"><?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_title_1') ?></h4>
                        <p class="px-6"><?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_text_1') ?></p>
                    </div>
                </a>
                <?php endif; ?>
                <?php if(ThemeModel::getInstance()->fetchConfigValue('what_to_do_use_2')): ?>
                <a href="<?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_link_2') ?>" style="--url-image-what-to-do: var(--what-to-do-img-2); color: var(--what-to-do-text-color)" class="head-button what-to-do w-full">
                    <div class="py-44 z-50 relative text-center">
                        <h4 class="uppercase"><?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_title_2') ?></h4>
                        <p class="px-6"><?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_text_2') ?></p>
                    </div>
                </a>
                <?php endif; ?>
                <?php if(ThemeModel::getInstance()->fetchConfigValue('what_to_do_use_3')): ?>
                <a href="<?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_link_3') ?>" style="--url-image-what-to-do: var(--what-to-do-img-3); color: var(--what-to-do-text-color)" class="head-button what-to-do w-full">
                    <div class="py-44 z-50 relative text-center">
                        <h4 class="uppercase"><?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_title_3') ?></h4>
                        <p class="px-6"><?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_text_3') ?></p>
                    </div>
                </a>
                <?php endif; ?>
                <?php if(ThemeModel::getInstance()->fetchConfigValue('what_to_do_use_4')): ?>
                <a href="<?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_link_4') ?>" style="--url-image-what-to-do: var(--what-to-do-img-4); color: var(--what-to-do-text-color)" class="head-button what-to-do w-full">
                    <div class="py-44 z-50 relative text-center">
                        <h4 class="uppercase"><?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_title_4') ?></h4>
                        <p class="px-6"><?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_text_4') ?></p>
                    </div>
                </a>
                <?php endif; ?>
                <?php if(ThemeModel::getInstance()->fetchConfigValue('what_to_do_use_5')): ?>
                <a href="<?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_link_5') ?>" style="--url-image-what-to-do: var(--what-to-do-img-5); color: var(--what-to-do-text-color)" class="head-button what-to-do w-full">
                    <div class="py-44 z-50 relative text-center">
                        <h4 class="uppercase"><?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_title_5') ?></h4>
                        <p class="px-6"><?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_text_5') ?></p>
                    </div>
                </a>
                <?php endif; ?>
                <?php if(ThemeModel::getInstance()->fetchConfigValue('what_to_do_use_6')): ?>
                <a href="<?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_link_6') ?>" style="--url-image-what-to-do: var(--what-to-do-img-6); color: var(--what-to-do-text-color)" class="head-button what-to-do w-full">
                    <div class="py-44 z-50 relative text-center">
                        <h4 class="uppercase"><?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_title_6') ?></h4>
                        <p class="px-6"><?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_text_6') ?></p>
                    </div>
                </a>
                <?php endif; ?>
                <?php if(ThemeModel::getInstance()->fetchConfigValue('what_to_do_use_7')): ?>
                <a href="<?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_link_7') ?>" style="--url-image-what-to-do: var(--what-to-do-img-7); color: var(--what-to-do-text-color)" class="head-button what-to-do w-full">
                    <div class="py-44 z-50 relative text-center">
                        <h4 class="uppercase"><?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_title_7') ?></h4>
                        <p class="px-6"><?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_text_7') ?></p>
                    </div>
                </a>
                <?php endif; ?>
                <?php if(ThemeModel::getInstance()->fetchConfigValue('what_to_do_use_8')): ?>
                <a href="<?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_link_8') ?>" style="--url-image-what-to-do: var(--what-to-do-img-8); color: var(--what-to-do-text-color)" class="head-button what-to-do w-full">
                    <div class="py-44 z-50 relative text-center">
                        <h4 class="uppercase"><?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_title_8') ?></h4>
                        <p class="px-6"><?= ThemeModel::getInstance()->fetchConfigValue('what_to_do_text_8') ?></p>
                    </div>
                </a>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if(ThemeModel::getInstance()->fetchConfigValue('join_section_active')): ?>
    <div  class="px-8 py-4">
        <div class="text-center w-full">
            <h4 style="color: var(--main-color)"><?= ThemeModel::getInstance()->fetchConfigValue('join_title') ?></h4>
        </div>
        <div class="mt-16">
            <div class="lg:grid grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="floating">
                        <div style="background-color: var(--main-color);" class="round-icon-step mx-auto">
                            <i class="<?= ThemeModel::getInstance()->fetchConfigValue('join_icon_1') ?> fa-2xl"></i>
                        </div>
                    </div>
                    <h4 class="mt-4 border-b py-1"><?= ThemeModel::getInstance()->fetchConfigValue('join_title_1') ?></h4>
                    <?= ThemeModel::getInstance()->fetchConfigValue('join_text_1') ?>
                </div>
                <div class="text-center">
                    <div class="floating">
                        <div style="background-color: var(--main-color);" class="round-icon-step mx-auto">
                            <i class="<?= ThemeModel::getInstance()->fetchConfigValue('join_icon_2') ?> fa-2xl"></i>
                        </div>
                    </div>
                    <h4 class="mt-4 border-b py-1"><?= ThemeModel::getInstance()->fetchConfigValue('join_title_2') ?></h4>
                    <?= ThemeModel::getInstance()->fetchConfigValue('join_text_2') ?>
                </div>
                <div class="text-center">
                    <div class="floating">
                        <div style="background-color: var(--main-color);" class="round-icon-step mx-auto">
                            <i class="<?= ThemeModel::getInstance()->fetchConfigValue('join_icon_3') ?> fa-2xl"></i>
                        </div>
                    </div>
                    <h4 class="mt-4 border-b py-1"><?= ThemeModel::getInstance()->fetchConfigValue('join_title_3') ?></h4>
                    <?= ThemeModel::getInstance()->fetchConfigValue('join_text_3') ?>
                </div>
                <div class="text-center">
                    <div class="floating">
                        <div style="background-color: var(--main-color);" class="round-icon-step mx-auto">
                            <i class="<?= ThemeModel::getInstance()->fetchConfigValue('join_icon_4') ?> fa-2xl"></i>
                        </div>
                    </div>
                    <h4 class="mt-4 border-b py-1"><?= ThemeModel::getInstance()->fetchConfigValue('join_title_4') ?></h4>
                    <?= ThemeModel::getInstance()->fetchConfigValue('join_text_4') ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <!-- Personnalisé 3 -->
    <?php if(ThemeModel::getInstance()->fetchConfigValue('custom_section_active_3')): ?>
        <div style="background: var(--card-bg-color);" class="hidden px-8 py-4">
            <div class="text-center w-full">
                <h4 style="color: var(--main-color)"><?= ThemeModel::getInstance()->fetchConfigValue('custom_section_title_3') ?></h4>
            </div>
            <div>
                <?= ThemeModel::getInstance()->fetchConfigValue('custom_section_content_3') ?>
            </div>
        </div>
    <?php endif; ?>

    <!-- Personnalisé 4 -->
    <?php if(ThemeModel::getInstance()->fetchConfigValue('custom_section_active_4')): ?>
        <div style="background: var(--card-bg-color);" class="hidden px-8 py-4">
            <div class="text-center w-full">
                <h4 style="color: var(--main-color)"><?= ThemeModel::getInstance()->fetchConfigValue('custom_section_title_4') ?></h4>
            </div>
            <div>
                <?= ThemeModel::getInstance()->fetchConfigValue('custom_section_content_4') ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if (PackageController::isInstalled('Newsletter')): ?>
        <?php if (ThemeModel::getInstance()->fetchConfigValue('newsletter_section_active')): ?>
        <div  class="px-8 py-4 mt-16">
            <div class="text-center w-full">
                <h4 style="color: var(--main-color)"><?= ThemeModel::getInstance()->fetchConfigValue('newsletter_section_title') ?></h4>
            </div>
            <div class="">
                <form action="newsletter" method="post" class="">
                    <?php SecurityManager::getInstance()->insertHiddenToken() ?>
                    <?= ThemeModel::getInstance()->fetchConfigValue('newsletter_section_description') ?>
                    <div class=" w-full">
                        <input type="email" name="newsletter_users_mail" id="email-address-icon" class="input-focus bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded block w-full p-2.5" placeholder="votre@mail.com" required>
                    </div>
                    <div class="flex justify-center mt-4">
                        <?php SecurityController::getPublicData(); ?>
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" style="background-color: var(--bg-pixcraft); color: var(--nav-color-pixcraft-hover)" class="head-button px-2 py-1 rounded-lg"><?= ThemeModel::getInstance()->fetchConfigValue('newsletter_section_button') ?></button>
                    </div>
                </form>
            </div>
        </div>
        <?php endif; ?>
    <?php endif; ?>
</section>

