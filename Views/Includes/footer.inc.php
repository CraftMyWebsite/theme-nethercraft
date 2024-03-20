
<?php use CMW\Controller\Core\CoreController;
use CMW\Manager\Env\EnvManager;
use CMW\Manager\Views\View;
use CMW\Model\Core\ThemeModel;
use CMW\Utils\Website;

/** @var CoreController $core */
?>


</body>

<footer id="particles" style="background-color: var(--footer-bg-color); color: var(--text-color)" class="mt-auto">
    <div class="px-4 py-6 md:px-36 2xl:px-72">
        <div class="md:grid grid-cols-3 mb-4 items-center">
            <div>
                <h3 class="font-<?= ThemeModel::getInstance()->fetchConfigValue('website_secondary_font') ?>">
                    <?php if (ThemeModel::getInstance()->fetchConfigValue('footer_use_logo')): ?>
                        <img class="hidden md:inline mr-2" alt="logo" width="120px" src="<?= ThemeModel::getInstance()->fetchImageLink("header_img_logo") ?>">
                    <?php endif; ?>
                    <?php if (ThemeModel::getInstance()->fetchConfigValue('footer_use_title')): ?>
                        <?= Website::getWebsiteName() ?>
                    <?php endif; ?>
                </h3>
            </div>


        <?php if(ThemeModel::getInstance()->fetchConfigValue('footer_active_condition')): ?>
            <div class="text-center">
                <p class="font-bold mb-2"><?= ThemeModel::getInstance()->fetchConfigValue('footer_title_condition') ?></p>
                <p><a class="head-a" href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>cgu"><?= ThemeModel::getInstance()->fetchConfigValue('footer_desc_condition_use') ?></a> /
                    <a class="head-a" href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>cgv"><?= ThemeModel::getInstance()->fetchConfigValue('footer_desc_condition_sale') ?></a></p>
            </div>
        <?php endif; ?>
        <div class="text-center">
            <p class="font-bold mb-2">Liens utiles</p>
            <div class="flex-wrap inline-flex space-x-3">
                <?php if(ThemeModel::getInstance()->fetchConfigValue('footer_active_facebook')): ?>
                <a href="<?= ThemeModel::getInstance()->fetchConfigValue('footer_link_facebook') ?>" <?php if(ThemeModel::getInstance()->fetchConfigValue('footer_open_link_new_tab')): ?>target="_blank"<?php endif; ?> class="head-a">
                    <i class="fa-xl <?= ThemeModel::getInstance()->fetchConfigValue('footer_icon_facebook') ?>"></i>
                </a>
                <?php endif; ?>
                <?php if(ThemeModel::getInstance()->fetchConfigValue('footer_active_twitter')): ?>
                <a href="<?= ThemeModel::getInstance()->fetchConfigValue('footer_link_twitter') ?>" <?php if(ThemeModel::getInstance()->fetchConfigValue('footer_open_link_new_tab')): ?>target="_blank"<?php endif; ?> class="head-a">
                    <i class="fa-xl <?= ThemeModel::getInstance()->fetchConfigValue('footer_icon_twitter') ?>"></i>
                </a>
                <?php endif; ?>
                <?php if(ThemeModel::getInstance()->fetchConfigValue('footer_active_instagram')): ?>
                <a href="<?= ThemeModel::getInstance()->fetchConfigValue('footer_link_instagram') ?>" <?php if(ThemeModel::getInstance()->fetchConfigValue('footer_open_link_new_tab')): ?>target="_blank"<?php endif; ?> class="head-a">
                    <i class="fa-xl <?= ThemeModel::getInstance()->fetchConfigValue('footer_icon_instagram') ?>"></i>
                </a>
                <?php endif; ?>
                <?php if(ThemeModel::getInstance()->fetchConfigValue('footer_active_discord')): ?>
                <a href="<?= ThemeModel::getInstance()->fetchConfigValue('footer_link_discord') ?>" <?php if(ThemeModel::getInstance()->fetchConfigValue('footer_open_link_new_tab')): ?>target="_blank"<?php endif; ?> class="head-a">
                    <i class="fa-xl <?= ThemeModel::getInstance()->fetchConfigValue('footer_icon_discord') ?>"></i>
                </a>
                <?php endif; ?>
            </div>
            </div>
        </div>
    </div>
    <p class="text-xs text-center text-gray-500">Copyright © <?= date("Y") ?> Par <a class="text-blue-700" href="https://craftmywebsite.fr" target="_blank">CraftMyWebsite</a> pour <span class="text-white"><?= Website::getWebsiteName() ?></span></p>
    <p class="hidden">Credit thème : Z0mblard</p>
</footer>
</html>

<script>
    const particlesContainer = document.getElementById('particles');
    const numberOfParticles = 15;
    for (let i = 0; i < numberOfParticles; i++) {
        let particle = document.createElement('div');
        particle.classList.add('particle');
        particle.style.left = `${Math.random() * 100}%`;
        particle.style.animationDuration = `${Math.random() * 3 + 2}s`;
        particle.style.animationDelay = `${Math.random() * 5}s`;
        particlesContainer.appendChild(particle);
    }
</script>

<script src="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>Public/Themes/Nethercraft/Assets/Js/flowbite.js"></script>