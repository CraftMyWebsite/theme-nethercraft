<?php

use CMW\Manager\Env\EnvManager;
use CMW\Model\Core\ThemeModel;
use CMW\Utils\Website;

Website::setTitle(ThemeModel::getInstance()->fetchConfigValue('wiki','wiki_page_title'));
Website::setDescription('');
?>
<section class="mb-16 px-4 md:px-36 2xl:px-72 space-y-8">
    <div class="lg:grid grid-cols-4 gap-6">
        <div data-cmw-style="background:global:card_bg_color" class="rounded-lg py-6 px-4 space-y-3 h-fit">
            <h4 data-cmw-style="color:global:main_color" class="text-center" data-cmw="wiki:wiki_menu_title"></h4>
                    <?php foreach ($categories as $categorie): ?>
                <div class="flex flex-col space-y-1">
                    <p class="uppercase font-bold">
                        <i data-cmw-visible="wiki:wiki_display_categorie_icon" class="<?= $categorie->getIcon() ?>"></i> <?= $categorie->getName() ?></p>
                    <?php foreach ($categorie?->getArticles() as $menuArticle): ?>
                    <a href="<?=   EnvManager::getInstance()->getValue("PATH_SUBFOLDER") . "wiki/" . $categorie->getSlug() . "/" . $menuArticle->getSlug() ?>" class="wiki-a ml-3"><i data-cmw-visible="wiki:wiki_display_article_categorie_icon" class="<?= $menuArticle->getIcon() ?>"></i> <?= $menuArticle->getTitle() ?></a>
                        <?php endforeach; ?>
                </div>
                    <?php endforeach; ?>
        </div>
        <div data-cmw-style="background:global:card_bg_color" class="rounded-lg p-6 col-span-3 h-fit">
            <?php if($article !== null): ?>
            <h4 data-cmw-style="color:global:main_color" class="text-center"><i data-cmw-visible="wiki:wiki_display_article_icon" class="<?= $article->getIcon() ?>"></i> <?= $article->getTitle() ?></h4>
            <?= $article->getContent() ?>
            <hr>
            <div class="flex flex-wrap justify-between items-center mt-2">
                <p data-cmw-visible="wiki:wiki_display_creation_date" class="text-xs">Crée le : <?= $article->getDateCreate() ?></p>
                <p data-cmw-visible="wiki:wiki_display_autor" class="text-xs py-1 px-2 bg-gray-300"><?= $article->getAuthor()->getPseudo() ?></p>
                <p data-cmw-visible="wiki:wiki_display_edit_date" class="text-xs">Modifié le : <?= $article->getDateUpdate() ?></p>
            </div>
            <?php elseif($firstArticle === null): ?>
            <h4 data-cmw-style="color:global:main_color" class="text-center">Aucun article</h4>
            Nos administrateurs travaille dessus !
            <hr>
            <div class="flex flex-wrap justify-between items-center mt-2">
                <p data-cmw-visible="wiki:wiki_display_creation_date" class="text-xs">Crée le : Jamais</p>
                <p data-cmw-visible="wiki:wiki_display_autor" class="text-xs py-1 px-2 bg-gray-300">Personne</p>
                <p data-cmw-visible="wiki:wiki_display_edit_date" class="text-xs">Modifié le : Jamais</p>
            </div>
            <?php else: ?>
            <h4 data-cmw-style="color:global:main_color" class="text-center"><i data-cmw-visible="wiki:wiki_display_article_icon" class="<?= $firstArticle->getIcon() ?>"></i> <?= $firstArticle->getTitle() ?></h4>
                <?= $firstArticle->getContent() ?>
            <hr>
            <div class="flex flex-wrap justify-between items-center mt-2">
                <p data-cmw-visible="wiki:wiki_display_creation_date" class="text-xs">Crée le : <?= $firstArticle->getDateCreate() ?></p>
                <p data-cmw-visible="wiki:wiki_display_autor" class="text-xs py-1 px-2 bg-gray-300"><?= $firstArticle->getAuthor()->getPseudo() ?></p>
                <p data-cmw-visible="wiki:wiki_display_edit_date" class="text-xs">Modifié le : <?= $firstArticle->getDateUpdate() ?></p>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>