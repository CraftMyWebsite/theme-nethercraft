<?php
use CMW\Manager\Env\EnvManager;
use CMW\Manager\Theme\Editor\Entities\EditorMenu;
use CMW\Manager\Theme\Editor\Entities\EditorRangeOptions;
use CMW\Manager\Theme\Editor\Entities\EditorSelectOptions;
use CMW\Manager\Theme\Editor\Entities\EditorType;
use CMW\Manager\Theme\Editor\Entities\EditorValue;

$shop_link = EnvManager::getInstance()->getValue("PATH_SUBFOLDER")."shop";
$newsOptions = [];

if (\CMW\Controller\Core\PackageController::isInstalled('news')) {
    foreach (\CMW\Model\News\NewsModel::getInstance()->getNews(1) as $news) {
        $newsOptions[] = new EditorSelectOptions(
            value: $news->getNewsId(),
            text: $news->getTitle() . ' - ' . $news->getDateCreatedFormatted()
        );
    }
}


return [
    new EditorMenu(
        title: 'En tête',
        key: 'header',
        scope: null,
        requiredPackage: null,
        values: [
            new EditorValue(
                title: 'Afficher les titre',
                themeKey: 'header_active_title',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Afficher le logo',
                themeKey: 'header_active_logo',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Titre de bienvenue',
                themeKey: 'header_welcome_title',
                defaultValue: 'Bienvenue sur NetherCraft',
                type: EditorType::TEXT
            ),
            new EditorValue(
                title: 'Texte de bienvenue',
                themeKey: 'header_welcome_text',
                defaultValue: 'Rejoignez-nous dès maintenant !',
                type: EditorType::TEXT
            ),
            new EditorValue(
                title: 'Logo',
                themeKey: 'header_img_logo',
                defaultValue: 'Config/Default/Img/logo.png',
                type: EditorType::IMAGE
            ),
            new EditorValue(
                title: 'Taille du logo',
                themeKey: 'site_image_width',
                defaultValue: '130',
                type: EditorType::RANGE,
                rangeOptions: [
                    new EditorRangeOptions(min: 0, max: 500,step: 1,suffix: 'px')
                ]
            ),
            new EditorValue(
                title: 'Logo flottant',
                themeKey: 'allow_floating',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Durée du flottement',
                themeKey: 'logo_float_duration',
                defaultValue: '5',
                type: EditorType::NUMBER,
            ),
            new EditorValue(
                title: 'Transition du flottement',
                themeKey: 'float_translate',
                defaultValue: '-10',
                type: EditorType::NUMBER,
            ),

            new EditorValue(
                title: 'Texte du bouton',
                themeKey: 'header_button_text',
                defaultValue: 'BOUTIQUE',
                type: EditorType::TEXT
            ),
            new EditorValue(
                title: 'Icon du bouton',
                themeKey: 'header_button_icon',
                defaultValue: 'fa-solid fa-basket-shopping',
                type: EditorType::FONTAWESOMEPICKER
            ),
            new EditorValue(
                title: 'Lien du bouton',
                themeKey: 'header_button_link',
                defaultValue: $shop_link,
                type: EditorType::TEXT
            ),
            new EditorValue(
                title: 'IP du serveur',
                themeKey: 'join_ip',
                defaultValue: 'play.nethercraft.fr',
                type: EditorType::TEXT
            ),
            new EditorValue(
                title: 'Afficher l\'état du serveur',
                themeKey: 'show_server_status',
                defaultValue: '0',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Nombre de membres Discord',
                themeKey: 'header_discord_members',
                defaultValue: '23',
                type: EditorType::NUMBER,
            ),
            new EditorValue(
                title: 'Texte lien Discord',
                themeKey: 'header_discord_text',
                defaultValue: 'discord.gg/nethercraft',
                type: EditorType::TEXT
            ),
            new EditorValue(
                title: 'Discord Invite Link',
                themeKey: 'header_discord_invite_link',
                defaultValue: 'https://discord.gg/invite/nethercraft',
                type: EditorType::TEXT
            ),
            new EditorValue(
                title: 'Autoriser les enregistrement',
                themeKey: 'header_allow_register_button',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Autoriser les connexions',
                themeKey: 'header_allow_login_button',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Message d\'enregistrement interdit',
                themeKey: 'global_no_register_message',
                defaultValue: 'Nous somme désolé mais les inscriptions sont pour le moment désactiver.',
                type: EditorType::TEXT
            ),
        ]
    ),
    new EditorMenu(
        title: 'Bandeau d\'alerte',
        key: 'alert',
        scope: null,
        requiredPackage: null,
        values: [
            new EditorValue(
                title: 'Activer',
                themeKey: 'header_alert',
                defaultValue: '0',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Titre de l\'alerte',
                themeKey: 'header_alert_title',
                defaultValue: 'Titre',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Texte de l\'alerte',
                themeKey: 'header_alert_text',
                defaultValue: 'NetherCraft est vraiment un super thème <3',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Couleur du texte',
                themeKey: 'alert_text_color',
                defaultValue: '#e3e3e3',
                type: EditorType::COLOR,
            ),
        ]
    ),
    new EditorMenu(
        title: 'Couleurs & Typo',
        key: 'global',
        scope: null,
        requiredPackage: null,
        values: [
            new EditorValue(
                title: 'Police d\'écriture',
                themeKey: 'website_font',
                defaultValue: 'font-outfit',
                type: EditorType::SELECT,
                selectOptions: [
                    new EditorSelectOptions(value: 'font-angkor', text: 'Angkor'),
                    new EditorSelectOptions(value: 'font-ibmplexsans', text: 'ibmplexsans'),
                    new EditorSelectOptions(value: 'font-kanit', text: 'kanit'),
                    new EditorSelectOptions(value: 'font-lora', text: 'lora'),
                    new EditorSelectOptions(value: 'font-madimione', text: 'madimione'),
                    new EditorSelectOptions(value: 'font-ojuju', text: 'ojuju'),
                    new EditorSelectOptions(value: 'font-opensans', text: 'opensans'),
                    new EditorSelectOptions(value: 'font-playfairdisplay', text: 'playfairdisplay'),
                    new EditorSelectOptions(value: 'font-robotocondensed', text: 'robotocondensed'),
                    new EditorSelectOptions(value: 'font-robotomono', text: 'robotomono'),
                    new EditorSelectOptions(value: 'font-robotoslab', text: 'robotoslab'),
                    new EditorSelectOptions(value: 'font-rubik', text: 'rubik'),
                    new EditorSelectOptions(value: 'font-ubuntu', text: 'ubuntu'),
                    new EditorSelectOptions(value: 'font-roboto', text: 'roboto'),
                    new EditorSelectOptions(value: 'font-unbounded', text: 'unbounded'),
                    new EditorSelectOptions(value: 'font-montserrat', text: 'montserrat'),
                    new EditorSelectOptions(value: 'font-paytone', text: 'paytone'),
                    new EditorSelectOptions(value: 'font-sora', text: 'sora'),
                    new EditorSelectOptions(value: 'font-outfit', text: 'outfit'),
                    new EditorSelectOptions(value: 'font-alata', text: 'alata'),
                    new EditorSelectOptions(value: 'font-titan', text: 'titan'),
                    new EditorSelectOptions(value: 'font-pressstart', text: 'pressstart'),
                ]
            ),
            new EditorValue(
                title: 'Couleur principale',
                themeKey: 'main_color',
                defaultValue: '#920bbe',
                type: EditorType::COLOR,
            ),
            new EditorValue(
                title: 'Couleur des URLs',
                themeKey: 'link_color',
                defaultValue: '#858585',
                type: EditorType::COLOR,
            ),
            new EditorValue(
                title: 'Couleur des URLs (hover)',
                themeKey: 'hover_link_color',
                defaultValue: '#481259',
                type: EditorType::COLOR,
            ),
            new EditorValue(
                title: 'Couleur du fond',
                themeKey: 'bg_color',
                defaultValue: '#101010',
                type: EditorType::COLOR,
            ),
            new EditorValue(
                title: 'Couleur des cartes',
                themeKey: 'card_bg_color',
                defaultValue: '#181818',
                type: EditorType::COLOR,
            ),
            new EditorValue(
                title: 'Couleur des cartes interne',
                themeKey: 'card_in_card_bg_color',
                defaultValue: '#1f1f1f',
                type: EditorType::COLOR,
            ),
            new EditorValue(
                title: 'Couleur du footer',
                themeKey: 'footer_bg_color',
                defaultValue: '#1f1f1f',
                type: EditorType::COLOR,
            ),
            new EditorValue(
                title: 'Couleur des champs textes',
                themeKey: 'input_bg_color',
                defaultValue: '#232323',
                type: EditorType::COLOR,
            ),
            new EditorValue(
                title: 'Couleur des champs textes (bordure)',
                themeKey: 'input_border_color',
                defaultValue: '#100f0f',
                type: EditorType::COLOR,
            ),
            new EditorValue(
                title: 'Couleur des textes des champs textes',
                themeKey: 'input_text_color',
                defaultValue: '#bbb1b1',
                type: EditorType::COLOR,
            ),
            new EditorValue(
                title: 'Couleur du texte',
                themeKey: 'text_color',
                defaultValue: '#e3e3e3',
                type: EditorType::COLOR,
            ),
            new EditorValue(
                title: 'Couleur du menu',
                themeKey: 'nav_text_color',
                defaultValue: '#b6b6b6',
                type: EditorType::COLOR,
            ),
            new EditorValue(
                title: 'Couleur du menu (actif)',
                themeKey: 'nav_active_color',
                defaultValue: '#ffffff',
                type: EditorType::COLOR,
            ),
            new EditorValue(
                title: 'Activer les particules',
                themeKey: 'allow_particles',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Taille des particules',
                themeKey: 'particles_tall',
                defaultValue: '5',
                type: EditorType::RANGE,
                rangeOptions: [
                    new EditorRangeOptions(min: 0, max: 15,step: 1)
                ]
            ),
            new EditorValue(
                title: 'Quantité de particules',
                themeKey: 'particles_number',
                defaultValue: '15',
                type: EditorType::RANGE,
                rangeOptions: [
                    new EditorRangeOptions(min: 0, max: 100,step: 1)
                ]
            ),
        ]
    ),
    new EditorMenu(
        title: 'Accueil - News',
        key: 'home-news',
        scope: null,
        requiredPackage: 'news',
        values: [
            new EditorValue(
                title: 'Activer la section',
                themeKey: 'news_section_active',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Rotation',
                themeKey: 'new_img_rotate',
                defaultValue: '3',
                type: EditorType::RANGE,
                rangeOptions: [
                    new EditorRangeOptions(min: 1, max: 10,step: 1)
                ]
            ),
            new EditorValue(
                title: 'Rotation scale',
                themeKey: 'new_img_scale',
                defaultValue: '1.3',
                type: EditorType::RANGE,
                rangeOptions: [
                    new EditorRangeOptions(min: 0, max: 5,step: 0.1)
                ]
            ),
            new EditorValue(
                title: 'Rotation duration',
                themeKey: 'new_img_time',
                defaultValue: '0.2',
                type: EditorType::RANGE,
                rangeOptions: [
                    new EditorRangeOptions(min: 0, max: 5,step: 0.1)
                ]
            ),
            new EditorValue(
                title: '1 ere News',
                themeKey: 'first_news',
                defaultValue: '1',
                type: EditorType::SELECT,
                selectOptions: $newsOptions
            ),
            new EditorValue(
                title: '2 eme News',
                themeKey: 'second_news',
                defaultValue: '1',
                type: EditorType::SELECT,
                selectOptions: $newsOptions
            ),
            new EditorValue(
                title: '3 eme News',
                themeKey: 'third_news',
                defaultValue: '1',
                type: EditorType::SELECT,
                selectOptions: $newsOptions
            ),
        ]
    ),
    new EditorMenu(
        title: 'Accueil - Que faire ?',
        key: 'home-wtd',
        scope: null,
        requiredPackage: null,
        values: [
            new EditorValue(
                title: 'Activer',
                themeKey: 'use_what_to_do',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Titre',
                themeKey: 'what_to_do_title',
                defaultValue: 'Que faire sur NetherCraft ?',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Couleur des textes',
                themeKey: 'what_to_do_text_color',
                defaultValue: '#e3e3e3',
                type: EditorType::COLOR,
            ),
            new EditorValue(
                title: 'Effet de flou',
                themeKey: 'what_to_do_blur',
                defaultValue: '3',
                type: EditorType::RANGE,
                rangeOptions: [
                    new EditorRangeOptions(min: 0, max: 50,step: 1)
                ]
            ),
            new EditorValue(
                title: 'Grillage',
                themeKey: 'what_to_do_grid',
                defaultValue: '4',
                type: EditorType::RANGE,
                rangeOptions: [
                    new EditorRangeOptions(min: 2, max: 8,step: 1,prefix: 'grid-cols-')
                ]
            ),
            new EditorValue(
                title: 'Activer WTD 1',
                themeKey: 'what_to_do_use_1',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'WTD 1 image',
                themeKey: 'what_to_do_img_1',
                defaultValue: 'Config/Default/Img/what_to_do_1.webp',
                type: EditorType::IMAGE
            ),
            new EditorValue(
                title: 'WTD 1 Titre',
                themeKey: 'what_to_do_title_1',
                defaultValue: 'EXPLORATION',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'WTD 1 Texte',
                themeKey: 'what_to_do_text_1',
                defaultValue: 'Venez découvrir l\'univers incroyable de NetherCraft',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'WTD 1 URL',
                themeKey: 'what_to_do_link_1',
                defaultValue: '#',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Activer WTD 2',
                themeKey: 'what_to_do_use_2',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'WTD 2 image',
                themeKey: 'what_to_do_img_2',
                defaultValue: 'Config/Default/Img/what_to_do_2.webp',
                type: EditorType::IMAGE
            ),
            new EditorValue(
                title: 'WTD 2 Titre',
                themeKey: 'what_to_do_title_2',
                defaultValue: 'PVP',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'WTD 2 Texte',
                themeKey: 'what_to_do_text_2',
                defaultValue: 'Prouve ta valeur et deviens le plus fort de NetherCraft',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'WTD 2 URL',
                themeKey: 'what_to_do_link_2',
                defaultValue: '#',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Activer WTD 3',
                themeKey: 'what_to_do_use_3',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'WTD 3 image',
                themeKey: 'what_to_do_img_3',
                defaultValue: 'Config/Default/Img/what_to_do_3.webp',
                type: EditorType::IMAGE
            ),
            new EditorValue(
                title: 'WTD 3 Titre',
                themeKey: 'what_to_do_title_3',
                defaultValue: 'SKY-BLOCK',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'WTD 3 Texte',
                themeKey: 'what_to_do_text_3',
                defaultValue: 'Découvre notre SkyBlock unique dans le Nether',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'WTD 3 URL',
                themeKey: 'what_to_do_link_3',
                defaultValue: '#',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Activer WTD 4',
                themeKey: 'what_to_do_use_4',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'WTD 4 image',
                themeKey: 'what_to_do_img_4',
                defaultValue: 'Config/Default/Img/what_to_do_4.webp',
                type: EditorType::IMAGE
            ),
            new EditorValue(
                title: 'WTD 4 Titre',
                themeKey: 'what_to_do_title_4',
                defaultValue: 'Mini-Jeux',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'WTD 4 Texte',
                themeKey: 'what_to_do_text_4',
                defaultValue: 'Viens prendre ta dose de fun sur NetherCraft',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'WTD 4 URL',
                themeKey: 'what_to_do_link_4',
                defaultValue: '#',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Activer WTD 5',
                themeKey: 'what_to_do_use_5',
                defaultValue: '0',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'WTD 5 image',
                themeKey: 'what_to_do_img_5',
                defaultValue: 'Config/Default/Img/what_to_do_1.webp',
                type: EditorType::IMAGE
            ),
            new EditorValue(
                title: 'WTD 5 Titre',
                themeKey: 'what_to_do_title_5',
                defaultValue: 'EXPLORATION',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'WTD 5 Texte',
                themeKey: 'what_to_do_text_5',
                defaultValue: 'Venez découvrir l\'univers incroyable de NetherCraft',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'WTD 5 URL',
                themeKey: 'what_to_do_link_5',
                defaultValue: '#',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Activer WTD 6',
                themeKey: 'what_to_do_use_6',
                defaultValue: '0',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'WTD 6 image',
                themeKey: 'what_to_do_img_6',
                defaultValue: 'Config/Default/Img/what_to_do_1.webp',
                type: EditorType::IMAGE
            ),
            new EditorValue(
                title: 'WTD 6 Titre',
                themeKey: 'what_to_do_title_6',
                defaultValue: 'EXPLORATION',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'WTD 6 Texte',
                themeKey: 'what_to_do_text_6',
                defaultValue: 'Venez découvrir l\'univers incroyable de NetherCraft',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'WTD 6 URL',
                themeKey: 'what_to_do_link_6',
                defaultValue: '#',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Activer WTD 7',
                themeKey: 'what_to_do_use_7',
                defaultValue: '0',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'WTD 7 image',
                themeKey: 'what_to_do_img_7',
                defaultValue: 'Config/Default/Img/what_to_do_1.webp',
                type: EditorType::IMAGE
            ),
            new EditorValue(
                title: 'WTD 7 Titre',
                themeKey: 'what_to_do_title_7',
                defaultValue: 'EXPLORATION',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'WTD 7 Texte',
                themeKey: 'what_to_do_text_7',
                defaultValue: 'Venez découvrir l\'univers incroyable de NetherCraft',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'WTD 7 URL',
                themeKey: 'what_to_do_link_7',
                defaultValue: '#',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Activer WTD 8',
                themeKey: 'what_to_do_use_8',
                defaultValue: '0',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'WTD 8 image',
                themeKey: 'what_to_do_img_8',
                defaultValue: 'Config/Default/Img/what_to_do_1.webp',
                type: EditorType::IMAGE
            ),
            new EditorValue(
                title: 'WTD 8 Titre',
                themeKey: 'what_to_do_title_8',
                defaultValue: 'EXPLORATION',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'WTD 8 Texte',
                themeKey: 'what_to_do_text_8',
                defaultValue: 'Venez découvrir l\'univers incroyable de NetherCraft',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'WTD 8 URL',
                themeKey: 'what_to_do_link_8',
                defaultValue: '#',
                type: EditorType::TEXT,
            ),
        ]
    ),
    new EditorMenu(
        title: 'Accueil - Rejoindre',
        key: 'home-join',
        scope: null,
        requiredPackage: null,
        values: [
            new EditorValue(
                title: 'Activer',
                themeKey: 'join_section_active',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Titre de la section',
                themeKey: 'join_title',
                defaultValue: 'Nous rejoindre',
                type: EditorType::TEXT
            ),
            new EditorValue(
                title: 'Rejoindre 1 : Icon',
                themeKey: 'join_icon_1',
                defaultValue: 'fa-solid fa-cube',
                type: EditorType::FONTAWESOMEPICKER,
            ),
            new EditorValue(
                title: 'Rejoindre 1 : Titre',
                themeKey: 'join_title_1',
                defaultValue: 'Lance ton jeu',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Rejoindre 1 : Text',
                themeKey: 'join_text_1',
                defaultValue: 'Nous autorisons les versions premium de la <b>1.18</b> à la <b>1.21</b>',
                type: EditorType::HTML,
            ),
            new EditorValue(
                title: 'Rejoindre 2 : Icon',
                themeKey: 'join_icon_2',
                defaultValue: 'fa-solid fa-plus',
                type: EditorType::FONTAWESOMEPICKER,
            ),
            new EditorValue(
                title: 'Rejoindre 2 : Titre',
                themeKey: 'join_title_2',
                defaultValue: 'Ajoute le serveur',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Rejoindre 2 : Text',
                themeKey: 'join_text_2',
                defaultValue: 'Rends-toi dans <b>Multijoueur</b> puis clique sur <b>Nouveau serveur</b>',
                type: EditorType::HTML,
            ),
            new EditorValue(
                title: 'Rejoindre 3 : Icon',
                themeKey: 'join_icon_3',
                defaultValue: 'fa-solid fa-keyboard',
                type: EditorType::FONTAWESOMEPICKER,
            ),
            new EditorValue(
                title: 'Rejoindre 3 : Titre',
                themeKey: 'join_title_3',
                defaultValue: 'Saisis l\'adresse',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Rejoindre 3 : Text',
                themeKey: 'join_text_3',
                defaultValue: "Ajoute play.nethercraft.fr",
                type: EditorType::HTML,
            ),
            new EditorValue(
                title: 'Rejoindre 4 : Icon',
                themeKey: 'join_icon_4',
                defaultValue: 'fa-solid fa-hand-holding-heart',
                type: EditorType::FONTAWESOMEPICKER,
            ),
            new EditorValue(
                title: 'Rejoindre 4 : Titre',
                themeKey: 'join_title_4',
                defaultValue: 'Rejoins-Nous',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Rejoindre 4 : Text',
                themeKey: 'join_text_4',
                defaultValue: 'Rejoins-nous et passe un bon moment sur NetherCraft',
                type: EditorType::HTML,
            ),
        ]
    ),
    new EditorMenu(
        title: 'Accueil - Newsletter',
        key: 'home-newsletter',
        scope: null,
        requiredPackage: 'newsletter',
        values: [
            new EditorValue(
                title: 'Activer la section',
                themeKey: 'newsletter_section_active',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Titre',
                themeKey: 'newsletter_section_title',
                defaultValue: 'NewsLetter',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Description',
                themeKey: 'newsletter_section_description',
                defaultValue: 'Abonnez-vous à notre newsletter pour ne louper aucune news !',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Bouton',
                themeKey: 'newsletter_section_button',
                defaultValue: 'S\'abonner !',
                type: EditorType::TEXT,
            ),
        ]
    ),
    new EditorMenu(
        title: 'Accueil - Custom',
        key: 'home-custom',
        scope: null,
        requiredPackage: null,
        values: [
            new EditorValue(
                title: 'Activer la section 1',
                themeKey: 'custom_section_active_1',
                defaultValue: '0',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Titre de la section 1',
                themeKey: 'custom_section_title_1',
                defaultValue: 'Titre personnalisé 1',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Contenue de la section 1',
                themeKey: 'custom_section_content_1',
                defaultValue: '<h1>Personnalise moi</h1> <br> <p>Comme du code HTML !</p>',
                type: EditorType::HTML,
            ),
            new EditorValue(
                title: 'Activer la section 2',
                themeKey: 'custom_section_active_2',
                defaultValue: '0',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Titre de la section 2',
                themeKey: 'custom_section_title_2',
                defaultValue: 'Titre personnalisé 2',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Contenue de la section 2',
                themeKey: 'custom_section_content_2',
                defaultValue: '<h1>Personnalise moi</h1> <br> <p>Comme du code HTML !</p>',
                type: EditorType::HTML,
            ),
            new EditorValue(
                title: 'Activer la section 3',
                themeKey: 'custom_section_active_3',
                defaultValue: '0',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Titre de la section 3',
                themeKey: 'custom_section_title_3',
                defaultValue: 'Titre personnalisé 3',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Contenue de la section 3',
                themeKey: 'custom_section_content_3',
                defaultValue: '<h1>Personnalise moi</h1> <br> <p>Comme du code HTML !</p>',
                type: EditorType::HTML,
            ),
            new EditorValue(
                title: 'Activer la section 4',
                themeKey: 'custom_section_active_4',
                defaultValue: '0',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Titre de la section 4',
                themeKey: 'custom_section_title_4',
                defaultValue: 'Titre personnalisé 4',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Contenue de la section 4',
                themeKey: 'custom_section_content_4',
                defaultValue: '<h1>Personnalise moi</h1> <br> <p>Comme du code HTML !</p>',
                type: EditorType::HTML,
            ),
        ]
    ),
    new EditorMenu(
        title: 'Nouveautés',
        key: 'news',
        scope: 'news',
        requiredPackage: 'news',
        values: [
            new EditorValue(
                title: 'Titre de la page',
                themeKey: 'news_page_title',
                defaultValue: 'Les dernières actus !',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'News à afficher',
                themeKey: 'news_page_number_display',
                defaultValue: '20',
                type: EditorType::NUMBER,
            ),
        ]
    ),
    new EditorMenu(
        title: 'F.A.Q',
        key: 'faq',
        scope: 'faq',
        requiredPackage: 'faq',
        values: [
            new EditorValue(
                title: 'Titre de la page',
                themeKey: 'faq_page_title',
                defaultValue: 'F.A.Q',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Titre Questions',
                themeKey: 'faq_question_title',
                defaultValue: 'Une question ?',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Titre Réponses',
                themeKey: 'faq_answer_title',
                defaultValue: 'Des réponses',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Afficher l\'auteur',
                themeKey: 'faq_display_autor',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Afficher le formulaire de contact',
                themeKey: 'faq_display_form',
                defaultValue: '0',
                type: EditorType::BOOLEAN,
            ),
        ]
    ),
    new EditorMenu(
        title: 'Votes',
        key: 'votes',
        scope: 'vote',
        requiredPackage: 'votes',
        values: [
            new EditorValue(
                title: 'Titre de la page',
                themeKey: 'votes_page_title',
                defaultValue: 'Voter',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Titre Participer',
                themeKey: 'votes_participate_title',
                defaultValue: 'Participer',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Afficher les votes globaux',
                themeKey: 'votes_display_global',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
        ]
    ),
    new EditorMenu(
        title: 'Wiki',
        key: 'wiki',
        scope: 'wiki',
        requiredPackage: 'wiki',
        values: [
            new EditorValue(
                title: 'Titre de la page',
                themeKey: 'wiki_page_title',
                defaultValue: 'Wiki',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Titre Participer',
                themeKey: 'wiki_menu_title',
                defaultValue: 'Navigation',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Afficher les icons des cats',
                themeKey: 'wiki_display_categorie_icon',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Afficher les icons des articles',
                themeKey: 'wiki_display_article_categorie_icon',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Afficher les icons des articles',
                themeKey: 'wiki_display_article_icon',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Afficher la date du wiki',
                themeKey: 'wiki_display_creation_date',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Afficher la date d\'édition',
                themeKey: 'wiki_display_edit_date',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Afficher l\'auteur',
                themeKey: 'wiki_display_autor',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
        ]
    ),
    new EditorMenu(
        title: 'Forum',
        key: 'forum',
        scope: 'forum',
        requiredPackage: 'forum',
        values: [
            new EditorValue(
                title: 'Activer le widget',
                themeKey: 'forum_use_widgets',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Widget - Stats',
                themeKey: 'forum_widgets_show_stats',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Widget - Stats : Titre',
                themeKey: 'forum_widgets_title_stats',
                defaultValue: 'Stats du forum',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Widget - Membres',
                themeKey: 'forum_widgets_show_member',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Widget - Membres : Titre',
                themeKey: 'forum_widgets_text_member',
                defaultValue: 'Membres totaux :',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Widget - Messages',
                themeKey: 'forum_widgets_show_messages',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Widget - Messages : Titre',
                themeKey: 'forum_widgets_text_messages',
                defaultValue: 'Messages totaux :',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Widget - Topics',
                themeKey: 'forum_widgets_show_topics',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Widget - Topics : Titre',
                themeKey: 'forum_widgets_text_topics',
                defaultValue: 'Nombres de topics :',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Widget - Discord',
                themeKey: 'forum_widgets_show_discord',
                defaultValue: '0',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Widget - Discord : API',
                themeKey: 'forum_widgets_content_id',
                defaultValue: '(Paramètres serveur > Widget > ID serveur)',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Widget - Custom',
                themeKey: 'forum_widgets_show_custom',
                defaultValue: '0',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Widget - Custom : Titre',
                themeKey: 'forum_widgets_custom_title',
                defaultValue: 'Widget personnaliser',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Widget - Custom : Contenue',
                themeKey: 'forum_widgets_custom_text',
                defaultValue: '<p>Bonjour !</p>',
                type: EditorType::HTML,
            ),
            new EditorValue(
                title: 'Menu Accueil',
                themeKey: 'forum_breadcrumb_home',
                defaultValue: 'Accueil',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Icon bouton création topic',
                themeKey: 'forum_btn_create_topic_icon',
                defaultValue: 'fa-solid fa-pen-to-square',
                type: EditorType::FONTAWESOMEPICKER,
            ),
            new EditorValue(
                title: 'Texte bouton création topic',
                themeKey: 'forum_btn_create_topic',
                defaultValue: 'Créer un topic',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Titre page sous-forum',
                themeKey: 'forum_sub_forum',
                defaultValue: 'Sous-Forums',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Titre page topics',
                themeKey: 'forum_topics',
                defaultValue: 'Topics',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Forum vide : Message',
                themeKey: 'forum_nobody_send_message_text',
                defaultValue: 'Aucun message',
                type: EditorType::TEXT,
            ),
        ]
    ),
    new EditorMenu(
        title: 'Footer',
        key: 'footer',
        scope: null,
        requiredPackage: null,
        values: [
            new EditorValue(
                title: 'Logo',
                themeKey: 'footer_use_logo',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Nom du site',
                themeKey: 'footer_use_title',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Liens dans un nouvel onglet',
                themeKey: 'footer_open_link_new_tab',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Facebook : Activer',
                themeKey: 'footer_active_facebook',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Facebook : Url',
                themeKey: 'footer_link_facebook',
                defaultValue: '#',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Facebook : Icon',
                themeKey: 'footer_icon_facebook',
                defaultValue: 'fa-brands fa-facebook',
                type: EditorType::FONTAWESOMEPICKER,
            ),
            new EditorValue(
                title: 'X : Activer',
                themeKey: 'footer_active_x',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'X : Url',
                themeKey: 'footer_link_x',
                defaultValue: '#',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'X : Icon',
                themeKey: 'footer_icon_x',
                defaultValue: 'fa-brands fa-square-x-twitter',
                type: EditorType::FONTAWESOMEPICKER,
            ),
            new EditorValue(
                title: 'Instagram : Activer',
                themeKey: 'footer_active_instagram',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Instagram : Url',
                themeKey: 'footer_link_instagram',
                defaultValue: '#',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Instagram : Icon',
                themeKey: 'footer_icon_instagram',
                defaultValue: 'fa-brands fa-instagram',
                type: EditorType::FONTAWESOMEPICKER,
            ),
            new EditorValue(
                title: 'Discord : Activer',
                themeKey: 'footer_active_discord',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Discord : Url',
                themeKey: 'footer_link_discord',
                defaultValue: '#',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'Discord : Icon',
                themeKey: 'footer_icon_discord',
                defaultValue: 'fa-brands fa-discord',
                type: EditorType::FONTAWESOMEPICKER,
            ),
            new EditorValue(
                title: 'Afficher les CGU/CGV',
                themeKey: 'footer_active_condition',
                defaultValue: '1',
                type: EditorType::BOOLEAN,
            ),
            new EditorValue(
                title: 'Titre conditions',
                themeKey: 'footer_title_condition',
                defaultValue: 'Conditions',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'CGU',
                themeKey: 'footer_desc_condition_use',
                defaultValue: 'CGU',
                type: EditorType::TEXT,
            ),
            new EditorValue(
                title: 'CGV',
                themeKey: 'footer_desc_condition_sale',
                defaultValue: 'CGV',
                type: EditorType::TEXT,
            ),
        ]
    ),
];