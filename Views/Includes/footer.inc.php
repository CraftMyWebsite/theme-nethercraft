
<?php use CMW\Controller\Core\CoreController;
use CMW\Manager\Env\EnvManager;
use CMW\Manager\Views\View;
use CMW\Model\Core\ThemeModel;
use CMW\Utils\Website;

/** @var CoreController $core */
?>


</body>

<span data-cmw-visible="global:allow_particles" id="particles"></span>
<footer data-cmw-style="background-color:global:footer_bg_color;color:global:text_color" class="mt-auto">
    <div class="px-4 py-6 md:px-36 2xl:px-72">
        <div class="md:grid grid-cols-3 mb-4 items-center">
            <div>
                <h3 class="">
                    <img data-cmw-visible="footer:footer_use_logo" class="hidden md:inline mr-2" alt="logo" width="120px" data-cmw-attr="src:header:header_img_logo">
                    <span data-cmw-visible="footer:footer_use_title"><?= Website::getWebsiteName() ?></span>
                </h3>
            </div>
            <div data-cmw-visible="footer:footer_active_condition" class="text-center">
                <p class="font-bold mb-2" data-cmw="footer:footer_title_condition"></p>
                <p><a class="head-a" href="<?= EnvManager::getInstance()->getValue("PATH_SUBFOLDER") ?>all_terms" data-cmw="footer:footer_desc_condition_use"></a></p>
            </div>
        <div class="text-center">
            <p class="font-bold mb-2">Liens utiles</p>
            <div class="flex-wrap inline-flex space-x-3">
                <a data-cmw-visible="footer:footer_active_facebook" data-cmw-attr="href:footer:footer_link_facebook" <?php if(ThemeModel::getInstance()->fetchConfigValue('footer','footer_open_link_new_tab')): ?>target="_blank"<?php endif; ?> class="head-a">
                    <i data-cmw-class="footer:footer_icon_facebook" class="fa-xl"></i>
                </a>
                <a data-cmw-visible="footer:footer_active_x" data-cmw-attr="href:footer:footer_link_x" <?php if(ThemeModel::getInstance()->fetchConfigValue('footer','footer_open_link_new_tab')): ?>target="_blank"<?php endif; ?> class="head-a">
                    <i data-cmw-class="footer:footer_icon_x" class="fa-xl"></i>
                </a>
                <a data-cmw-visible="footer:footer_active_instagram" data-cmw-attr="href:footer:footer_link_instagram" <?php if(ThemeModel::getInstance()->fetchConfigValue('footer', 'footer_open_link_new_tab')): ?>target="_blank"<?php endif; ?> class="head-a">
                    <i data-cmw-class="footer:footer_icon_instagram" class="fa-xl"></i>
                </a>
                <a data-cmw-visible="footer:footer_active_discord" data-cmw-attr="href:footer:footer_link_discord" <?php if(ThemeModel::getInstance()->fetchConfigValue('footer','footer_open_link_new_tab')): ?>target="_blank"<?php endif; ?> class="head-a">
                    <i data-cmw-class="footer:footer_icon_discord" class="fa-xl "></i>
                </a>
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
    const numberOfParticles = <?= ThemeModel::getInstance()->fetchConfigValue('global', 'particles_number') ?>;
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