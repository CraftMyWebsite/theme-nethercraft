<?php

use CMW\Manager\Env\EnvManager;
use CMW\Model\Core\ThemeModel;
$newsList = \CMW\Model\News\NewsModel::getInstance()->getSomeNews(ThemeModel::getInstance()->fetchConfigValue('news','news_page_number_display'), 'DESC');
use CMW\Controller\Users\UsersController;
use CMW\Utils\Website;

/*TITRE ET DESCRIPTION*/
Website::setTitle(ThemeModel::getInstance()->fetchConfigValue('news','news_page_title'));
Website::setDescription('');
?>
<section class="mb-16 px-4 md:px-36 2xl:px-72 space-y-8">
    <div class="lg:grid grid-cols-2 gap-6">
        <?php foreach ($newsList as $news): ?>
        <div data-cmw-style="background:global:card_bg_color" class="flex flex-col ">
            <div class="relative h-52 overflow-hidden">
                <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>news/<?= $news->getSlug() ?>" class="rotate-news">
                    <img src="<?= $news->getImageLink() ?>" style="object-fit: cover" class="rotate-news-img top-0 left-0 absolute w-full h-full">
                </a>
            </div>
            <div class="px-6 py-4 space-y-4">
                <h4 data-cmw-style="color:global:main_color"><?= $news->getTitle() ?></h4>
                <p><?= $news->getDescription() ?></p>
                <div class="flex items-center space-x-2">
                    <img width="40px" loading="lazy" src="https://apiv2.craftmywebsite.fr/skins/2d/user=<?= $news->getAuthor()->getPseudo() ?>&headOnly=true">
                    <div class="w-full flex justify-between items-end">
                        <div>
                            <p><?= $news->getAuthor()->getPseudo() ?></p>
                            <p class="text-xs"><?= $news->getDateCreated() ?></p>
                        </div>
                        <div>
                            <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>news/<?= $news->getSlug() ?>" data-cmw-style="background:global:main_color"  class="head-button px-2 py-1 rounded-lg">Lire l'article</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>