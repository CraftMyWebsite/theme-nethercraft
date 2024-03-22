<?php

/* @var \CMW\Entity\Pages\PageEntity $page */
/* @var \CMW\Model\Pages\PagesModel $pages */
/* @var \CMW\Controller\CoreController $core */
/* @var \CMW\Controller\Menus\MenusController $menu */
use CMW\Model\Core\ThemeModel;
use CMW\Utils\Website;

Website::setTitle(ucfirst($page->getTitle()));
Website::setDescription(ucfirst($page->getTitle()));
?>

<section class="mb-16 px-4 md:px-36 2xl:px-72 space-y-8">
    <div style="background: var(--card-bg-color);" class="rounded-lg p-6">
        <?= $page->getConverted() ?>
    </div>
</section>