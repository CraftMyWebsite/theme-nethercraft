<?php

/* @var \CMW\Entity\Core\MaintenanceEntity $maintenance */

/*TITRE ET DESCRIPTION*/

use CMW\Model\Core\ThemeModel;
use CMW\Utils\Website;

Website::setTitle("Maintenance");
Website::setDescription("Maintenance en cours sur le site");
?>

<?php if($maintenance->isEnable()): ?>
<section class="mb-6 px-4 md:px-36 2xl:px-72">
    <div style="background: var(--main-color); color: var(--alert-text-color)" class="px-4 py-4 rounded-lg text-center">
        <h4><?= $maintenance->getTitle() ?></h4>
        <p><?= $maintenance->getDescription() ?></p>
        <p>Fin de la maintenance prévu le <?= $maintenance->getTargetDateFormatted() ?></p>
    </div>
</section>
<?php endif; ?>