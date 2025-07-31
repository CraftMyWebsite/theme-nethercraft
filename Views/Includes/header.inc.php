<?php

use CMW\Controller\Core\PackageController;
use CMW\Controller\Minecraft\MinecraftController;
use CMW\Controller\Shop\Admin\Item\ShopItemsController;
use CMW\Controller\Shop\Admin\Payment\ShopPaymentsController;
use CMW\Controller\Users\UsersSessionsController;
use CMW\Manager\Env\EnvManager;
use CMW\Controller\Users\UsersController;
use CMW\Model\Core\MenusModel;
use CMW\Model\Minecraft\MinecraftModel;
use CMW\Model\Shop\Cart\ShopCartItemModel;
use CMW\Model\Core\ThemeModel;
use CMW\Utils\Website;

if (PackageController::isInstalled("Shop")) {
    $itemInCart = ShopCartItemModel::getInstance()->countItemsByUserId(UsersSessionsController::getInstance()->getCurrentUser()?->getId(), session_id());
}

if (PackageController::isInstalled("Minecraft")) {
    $mc = new minecraftModel;
    $favExist = $mc->favExist();
    if ($favExist) {
        $minecraft = MinecraftController::pingServer($mc->getFavServer()->getServerIp(), $mc->getFavServer()->getServerPort())->getPlayersOnline();
        $minecraftStatus = MinecraftModel::getInstance()->getFavServer()->getServerStatus();
    }

}

$menus = MenusModel::getInstance();
?>

<section class="mb-8">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-center mx-auto">
        <button data-collapse-toggle="navbar-multi-level" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden" aria-controls="navbar-multi-level" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <i class="fa-solid fa-bars fa-xl"></i>
        </button>
        <div class="hidden w-full lg:inline" id="navbar-multi-level">
            <nav class="py-4 flex flex-col lg:flex-row justify-center lg:space-x-16">
                <?php foreach ($menus->getMenus() as $menu): ?>
                <?php if ($menu->isUserAllowed()): ?>
                    <a href="<?= $menu->getUrl() ?>" id="dropdownNavbarLink" data-dropdown-offset-distance=0 data-dropdown-toggle="dropdown-<?= $menu->getId() ?>" <?= !$menu->isTargetBlank() ?: "target='_blank'" ?> class="<?php if ($menu->urlIsActive()) {echo "nav-active-a";} ?> cursor-pointer font-bold text-lg nav-a w-full lg:w-auto text-center py-2"><?= $menu->getName() ?></a>
                    <div id="dropdown-<?= $menu->getId() ?>" class="z-10 hidden w-full lg:w-44">
                        <?php foreach ($menus->getSubMenusByMenu($menu->getId()) as $subMenu): ?>
                            <?php if ($subMenu->isUserAllowed()): ?>
                            <div aria-labelledby="multiLevelDropdownButton">
                                <a href="<?= $subMenu->getUrl() ?>" id="doubleDropdownButton" data-dropdown-offset-distance=0 data-dropdown-toggle="doubleDropdown-<?= $subMenu->getId() ?>" class="text-lg font-bold block cursor-pointer nav-a text-center py-2" <?= !$subMenu->isTargetBlank() ?: "target='_blank'" ?>><?= $subMenu->getName() ?></a>
                                <?php foreach ($menus->getSubMenusByMenu($subMenu->getId()) as $subSubMenu): ?>
                                    <?php if ($subSubMenu->isUserAllowed()): ?>
                                    <div id="doubleDropdown-<?= $subMenu->getId() ?>" class="z-10 hidden w-full lg:w-44">
                                        <div aria-labelledby="doubleDropdownButton">
                                            <a href="<?= $subSubMenu->getUrl() ?>" class="text-lg block font-bold cursor-pointer nav-a text-center py-2" <?= !$subSubMenu->isTargetBlank() ?: "target='_blank'" ?>><?= $subSubMenu->getName() ?></a>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </nav>
        </div>
    </div>

    <div class="lg:grid grid-cols-5 mt-8">
        <div class="hidden lg:flex justify-end items-center col-span-2">
            <div class="flex justify-end items-center space-x-4 hyper-play-card">
                <div onclick="copyURL('<?= ThemeModel::getInstance()->fetchConfigValue('header', 'join_ip') ?>')" class="text-right cursor-pointer text-hover">
                    <span data-cmw-visible="header:show_server_status">
                        <?= $minecraftStatus === 0 ? '<span style="padding: 0 .4rem; background: #b34b0a; border-radius: 6px">Hors-Ligne</span>' : '' ?>
                        <?= $minecraftStatus === 1 ? '<span style="padding: 0 .4rem; background: #039a0b; border-radius: 6px">En ligne</span>' : '' ?>
                        <?= $minecraftStatus === -1 ? '<span style="padding: 0 .4rem; background: #a19e09; border-radius: 6px;">Maintenance</span>' : '' ?>
                    </span>
                    <p data-cmw-style="color:global:main_color" class="uppercase text-xl font-bold hyper-title">
                        <?php if ($favExist): ?>
                            <?= $minecraft ?>
                        <?php else: ?>
                            <?php if (UsersController::isAdminLogged()) : ?>
                                <span>Veuillez ajouter un serveur en favoris pour le voir apparaitre ici !</span>
                            <?php endif; ?>
                        <?php endif; ?>
                        joueurs en ligne</p>
                    <p class="uppercase text-sm" data-cmw="header:join_ip"></p>
                </div>
                <i data-cmw-style="color:global:main_color" class="cursor-pointer fa-circle-play fa-solid fa-circle-play text-5xl"></i>
            </div>
        </div>
        <div>
            <div class="text-center">
                <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>">
                    <img data-cmw-visible="header:header_active_logo" data-cmw-attr="src:header:header_img_logo" data-cmw-style="width:header:site_image_width" class="mx-auto floating" alt="logo"><br>
                    <h3 data-cmw-visible="header:header_active_title" class="floating"><?= Website::getWebsiteName() ?></h3>
                </a>
            </div>
        </div>
        <div onclick="openURL('<?= ThemeModel::getInstance()->fetchConfigValue('header','header_discord_invite_link') ?>')" class="hidden lg:flex justify-start items-center col-span-2">
            <div class="flex justify-start items-center space-x-4 hyper-card">
                <i data-cmw-style="color:global:main_color" class="fa-brands fa-discord cursor-pointer fa-circle-play text-5xl"></i>
                <div class="cursor-pointer text-hover">
                    <p data-cmw-style="color:global:main_color" class="uppercase text-xl font-bold hyper-title" ><span data-cmw="header:header_discord_members"></span> membres sur discord</p>
                    <p class="uppercase text-sm" data-cmw="header:header_discord_text"></p>
                </div>
            </div>
        </div>
    </div>

    <div class="px-4 lg:px-36 2xl:px-72 mt-8">
        <div class="lg:grid grid-cols-4 items-center">
            <div data-cmw-style="background:global:card_bg_color" class="py-4 px-6 col-span-3 rounded-lg">
                <div class="flex lg:justify-between items-center">
                    <div class="flex items-center space-x-2 lg:space-x-6">
                        <img class="hidden lg:inline mr-2" loading="lazy" alt="player head" width="80px" src="https://apiv2.craftmywebsite.fr/skins/3d/user=<?= UsersSessionsController::getInstance()->getCurrentUser()?->getPseudo() ?>&headOnly=true">
                        <div class="hidden lg:block">
                            <h4 data-cmw-style="color:global:main_color" data-cmw="header:header_welcome_title"></h4>
                            <p data-cmw="header:header_welcome_text"></p>
                        </div>
                    </div>
                    <?php if (!UsersController::isUserLogged()): ?>
                        <div class="lg:ml-auto mx-auto lg:mx-0 space-x-3">
                            <a data-cmw-style="background:global:main_color" data-cmw-visible="header:header_allow_login_button" href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>login" class="head-button rounded-lg py-2 px-4 text-lg space-x-3"><i class="fa-solid fa-user"></i><span>Connexion</span></a>
                            <a data-cmw-style="background:global:main_color" data-cmw-visible="header:header_allow_register_button" href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>register" class="head-button rounded-lg py-2 px-4 text-lg space-x-3"><i class="fa-solid fa-plus"></i><span>S'inscrire</span></a>
                        </div>
                        <?php if (PackageController::isInstalled('Shop')): ?>
                            <div>
                                <a href="<?= Website::getProtocol() ?>://<?= $_SERVER['SERVER_NAME'] ?><?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>shop/cart" style="display: inline-flex; position: relative; align-items: center; padding: .75rem;font-size: 0.875rem;line-height: 1.25rem">
                                    <i class="text-lg fa-solid fa-cart-shopping"></i>
                                    <span class="sr-only">Articles</span>
                                    <div style="display: inline-flex; position: absolute; top: -0.2rem; right: -0.2rem; justify-content: center; align-items: center;width: 1.2rem; height: 1.2rem; font-size: 0.75rem;line-height: 1rem;font-weight: 700; color: white; background: red; border-radius: 100%"><?= $itemInCart ?></div>
                                </a>
                            </div>
                        <?php endif; ?>
                    <?php else: ?>
                    <div class="inline-flex">
                        <button id="dropdownDelayButton" data-dropdown-offset-distance=0 data-dropdown-toggle="dropdownPlayer" data-dropdown-delay="10" data-dropdown-trigger="hover" data-cmw-style="background:global:main_color" class="head-button rounded-lg py-2 px-4">
                            <?= UsersSessionsController::getInstance()->getCurrentUser()->getPseudo() ?> <i class="fa-solid fa-chevron-down"></i>
                        </button>
                        <?php if (PackageController::isInstalled('Shop')): ?>
                            <div>
                                <a href="<?= Website::getProtocol() ?>://<?= $_SERVER['SERVER_NAME'] ?><?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>shop/cart" style="display: inline-flex; position: relative; align-items: center; padding: .75rem;font-size: 0.875rem;line-height: 1.25rem">
                                    <i class="text-lg fa-solid fa-cart-shopping"></i>
                                    <span class="sr-only">Articles</span>
                                    <div style="display: inline-flex; position: absolute; top: -0.2rem; right: -0.2rem; justify-content: center; align-items: center;width: 1.2rem; height: 1.2rem; font-size: 0.75rem;line-height: 1rem;font-weight: 700; color: white; background: red; border-radius: 100%"><?= $itemInCart ?></div>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>

                        <div id="dropdownPlayer" style="background-color: var(--main-color); z-index: 500;" class="hidden shadow w-full md:w-52 rounded shadow">
                            <div aria-labelledby="dropdownDelayButton" class="flex flex-col">
                                <?php if (UsersController::isAdminLogged()) : ?>
                                    <a target="_blank" href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>cmw-admin" id="dropdownPlayer" data-dropdown-offset-distance=0 data-dropdown-toggle="dropdownPlayer" class="block cursor-pointer nav-a p-2"><i class="fa-solid fa-screwdriver-wrench"></i> Administration</a>
                                <?php endif; ?>
                                <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>profile" id="dropdownPlayer" data-dropdown-offset-distance=0 data-dropdown-toggle="dropdownPlayer" class="block cursor-pointer nav-a p-2"><i class="fa-regular fa-address-card"></i> Profil</a>
                                <?php if (PackageController::isInstalled("Shop")): ?>
                                    <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>shop/settings" id="dropdownPlayer" data-dropdown-offset-distance=0 data-dropdown-toggle="dropdownPlayer" class="block cursor-pointer nav-a p-2"><i class="fa-solid fa-gears"></i> Paramètres</a>
                                    <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>shop/history" id="dropdownPlayer" data-dropdown-offset-distance=0 data-dropdown-toggle="dropdownPlayer" class="block cursor-pointer nav-a p-2"><i class="fa-solid fa-clipboard-list"></i> Commandes</a>
                                <?php endif; ?>
                                <?php if (PackageController::isInstalled('ShopExtendedToken')): ?>
                                        <a href="<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>shop/tokens"
                                           class="block cursor-pointer nav-a p-2"><?= ShopPaymentsController::getInstance()->getPaymentByVarName('extendedToken')->faIcon() ?>
                                            <?= ShopItemsController::getInstance()->getPriceTypeMethodsByVarName('extendedToken')->name() ?></a>
                                <?php endif; ?>
                                <a href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>logout" id="dropdownPlayer" data-dropdown-offset-distance=0 data-dropdown-toggle="dropdownPlayer" class="block cursor-pointer nav-a p-2 border-t"><i class="fa-solid fa-lock text-red-400"></i> Déconnexion</a>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="hidden lg:block text-center">
                <a data-cmw-attr="href:header:header_button_link" data-cmw-style="background:global:main_color" class="head-button rounded-lg p-7 text-2xl space-x-6"><i data-cmw="header:header_button_text"></i> <i data-cmw-class="header:header_button_icon" ></i></a>
            </div>
        </div>
    </div>
</section>

    <section data-cmw-visible="alert:header_alert" class="mb-6 px-4 md:px-36 2xl:px-72">
        <div data-cmw-style="color:alert:alert_text_color;background:global:main_color" class="px-4 py-2 rounded-lg text-center">
            <h4 data-cmw="alert:header_alert_title"></h4>
            <p data-cmw="alert:header_alert_text"></p>
        </div>
    </section>

<link rel="stylesheet"
      href="<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') . 'Admin/Resources/Vendors/Izitoast/iziToast.min.css' ?>">
<script src="<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') . 'Admin/Resources/Vendors/Izitoast/iziToast.min.js' ?>"></script>

<script>
    function openURL(url) {
        open(url)
    }

    function copyURL(url) {
        navigator.clipboard.writeText(url)
        iziToast.show(
            {
                titleSize: '14',
                messageSize: '12',
                icon: 'fa-solid fa-check',
                title: "<?= Website::getWebsiteName() ?>",
                message: "Adresse du serveur copié !",
                color: "#20b23a",
                iconColor: '#ffffff',
                titleColor: '#ffffff',
                messageColor: '#ffffff',
                balloon: false,
                close: true,
                pauseOnHover: true,
                position: 'topCenter',
                timeout: 4000,
                animateInside: false,
                progressBar: true,
                transitionIn: 'fadeInDown',
                transitionOut: 'fadeOut',
            });
    }

    document.addEventListener('DOMContentLoaded', function() {
        const playText = document.querySelector('.hyper-play-card .text-sm'); // Assurez-vous que c'est le bon sélecteur pour votre texte
        const originalText = playText.textContent;
        const container = document.querySelector('.hyper-play-card'); // Sélecteur pour la div conteneur

        container.addEventListener('mouseover', function() {
            playText.textContent = "Clique pour copier";
        });

        container.addEventListener('mouseout', function() {
            playText.textContent = originalText;
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const playText = document.querySelector('.hyper-card .text-sm'); // Assurez-vous que c'est le bon sélecteur pour votre texte
        const originalText = playText.textContent;
        const container = document.querySelector('.hyper-card'); // Sélecteur pour la div conteneur

        container.addEventListener('mouseover', function() {
            playText.textContent = "Clique pour rejoindre";
        });

        container.addEventListener('mouseout', function() {
            playText.textContent = originalText;
        });
    });
</script>