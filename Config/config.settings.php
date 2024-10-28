<?php
//<?= ThemeModel::getInstance()->fetchConfigValue('slider_title_1')
use CMW\Manager\Env\EnvManager;

$path_sub = EnvManager::getInstance()->getValue("PATH_SUBFOLDER");
$shop_link = EnvManager::getInstance()->getValue("PATH_SUBFOLDER")."shop";
return [
   /* - - - - - - - - 
       - - HEADER & GLOBAL - -
    - - - - - - - - - */
    "header_allow_register_button" => "1",
    "header_allow_login_button" => "1",
    "global_no_register_message" => "Nous somme désolé mais les inscriptions sont pour le moment désactiver.",
    "website_font" => "outfit",
    "main_color" => "#920bbe",
    "link_color" => "#858585",
    "hover_link_color" => "#481259",
    "bg_color" => "#101010",
    "card_bg_color" => "#181818",
    "card_in_card_bg_color" => "#1f1f1f",
    "footer_bg_color" => "#1f1f1f",
    "input_bg_color" => "#232323",
    "input_border_color" => "#100f0f",
    "input_text_color" => "#bbb1b1",
    "text_color" => "#e3e3e3",
    "particles_tall" => "5",
    "particles_number" => "15",
    "allow_particles" => "1",

    "header_active_title" => "1",
    "header_active_logo" => "1",
    "header_img_logo" => "Config/Default/Img/logo.png",
    "header_alert" => "0",
    "header_alert_title" => "Titre de l'alerte",
    "header_alert_text" => "NetherCraft est vraiment un super thème <3",
    "alert_text_color" => "#e3e3e3",
    "allow_floating" => "1",
    "logo_float_duration" => "5",
    "float_translate" => "-10",
    "nav_text_color" => "#b6b6b6",
    "nav_active_color" => "#ffffff",
    "header_button_text" => "BOUTIQUE",
    "header_button_icon" => "fa-solid fa-basket-shopping",
    "header_button_link" => $shop_link,
    "join_ip" => "play.nethercraft.fr",
    "header_discord_members" => "10",
    "header_discord_text" => "discord.gg/nethercraft",
    "header_discord_invite_link" => "https://discord.gg/invite/nethercraft",
    "header_welcome_title" => "Bienvenue sur NetherCraft",
    "header_welcome_text" => "Rejoignez-nous dès maintenant !",

    /* - - - - - - - - 
       - - HOME - -
    - - - - - - - - - */
    /*TITLE DESC*/
    "home_title" => "Accueil",
    /*JOIN SECTION*/
    "join_section_active" => "1",
    "join_title" => "Nous rejoindre",
    "join_icon_1" => "fa-solid fa-cube",
    "join_title_1" => "Lance ton jeu",
    "join_text_1" => "Nous autorisons les versions premium de la <b>1.18</b> à la <b>1.21</b>",
    "join_icon_2" => "fa-solid fa-plus",
    "join_title_2" => "Ajoute le serveur",
    "join_text_2" => "Rends-toi dans <b>Multijoueur</b> puis clique sur <b>Nouveau serveur</b>",
    "join_icon_3" => "fa-solid fa-keyboard",
    "join_title_3" => "Saisis l'adresse",
    "join_text_3" => "Renseigne l'adresse <b>play.nethercraft.fr</b> dans l'adresse du serveur.",
    "join_icon_4" => "fa-solid fa-hand-holding-heart",
    "join_title_4" => "Rejoins-Nous",
    "join_text_4" => "Rejoins-nous et <b>passe un bon moment</b> sur NetherCraft",
    /*NEWS SECTION*/
    "news_section_active" => "1",
    "new_img_rotate" => "3",
    "new_img_scale" => "1.3",
    "new_img_time" => "0.2",
    "first_news" => "1",
    "second_news" => "2",
    "third_news" => "3",
    /*WHAT TO DO SECTION*/
    "use_what_to_do" => "1",
    "what_to_do_text_color" => "#e3e3e3",
    "what_to_do_blur" => "3",
    "what_to_do_grid" => "4",
    "what_to_do_title" => "Que faire sur NetherCraft ?",
    "what_to_do_use_1" => "1",
    "what_to_do_img_1" => "Config/Default/Img/what_to_do_1.webp",
    "what_to_do_title_1" => "EXPLORATION",
    "what_to_do_text_1" => "Venez découvrir l'univers incroyable de NetherCraft",
    "what_to_do_link_1" => "#",
    "what_to_do_use_2" => "1",
    "what_to_do_img_2" => "Config/Default/Img/what_to_do_2.webp",
    "what_to_do_title_2" => "PVP",
    "what_to_do_text_2" => "Prouve ta valeur et deviens le plus fort de NetherCraft",
    "what_to_do_link_2" => "#",
    "what_to_do_use_3" => "1",
    "what_to_do_img_3" => "Config/Default/Img/what_to_do_3.webp",
    "what_to_do_title_3" => "SKY-BLOCK",
    "what_to_do_text_3" => "Découvre notre SkyBlock unique dans le Nether",
    "what_to_do_link_3" => "#",
    "what_to_do_use_4" => "1",
    "what_to_do_img_4" => "Config/Default/Img/what_to_do_4.webp",
    "what_to_do_title_4" => "Mini-Jeux",
    "what_to_do_text_4" => "Viens prendre ta dose de fun sur NetherCraft",
    "what_to_do_link_4" => "#",
    "what_to_do_use_5" => "0",
    "what_to_do_img_5" => "Config/Default/Img/what_to_do_1.webp",
    "what_to_do_title_5" => "EXPLORATION",
    "what_to_do_text_5" => "Venez découvrir l'univers incroyable de NetherCraft",
    "what_to_do_link_5" => "#",
    "what_to_do_use_6" => "0",
    "what_to_do_img_6" => "Config/Default/Img/what_to_do_1.webp",
    "what_to_do_title_6" => "EXPLORATION",
    "what_to_do_text_6" => "Venez découvrir l'univers incroyable de NetherCraft",
    "what_to_do_link_6" => "#",
    "what_to_do_use_7" => "0",
    "what_to_do_img_7" => "Config/Default/Img/what_to_do_1.webp",
    "what_to_do_title_7" => "EXPLORATION",
    "what_to_do_text_7" => "Venez découvrir l'univers incroyable de NetherCraft",
    "what_to_do_link_7" => "#",
    "what_to_do_use_8" => "0",
    "what_to_do_img_8" => "Config/Default/Img/what_to_do_1.webp",
    "what_to_do_title_8" => "EXPLORATION",
    "what_to_do_text_8" => "Venez découvrir l'univers incroyable de NetherCraft",
    "what_to_do_link_8" => "#",
    /*CUSTOM SECTION #1*/
    "custom_section_active_1" => "0",
    "custom_section_title_1" => "Titre personnalisé 1",
    "custom_section_content_1" => "<h1>Personnalise moi</h1> <br> <p>Comme du code HTML !</p>",
    /*CUSTOM SECTION #2*/
    "custom_section_active_2" => "0",
    "custom_section_title_2" => "Titre personnalisé 2",
    "custom_section_content_2" => "<h1>Personnalise moi</h1> <br> <p>Comme du code HTML !</p>",
    /*CUSTOM SECTION #3*/
    "custom_section_active_3" => "0",
    "custom_section_title_3" => "Titre personnalisé 3",
    "custom_section_content_3" => "<h1>Personnalise moi</h1> <br> <p>Comme du code HTML !</p>",
    /*CUSTOM SECTION #4*/
    "custom_section_active_4" => "0",
    "custom_section_title_4" => "Titre personnalisé 4",
    "custom_section_content_4" => "<h1>Personnalise moi</h1> <br> <p>Comme du code HTML !</p>",
    /* NEWSLETTER SECTION */
    'newsletter_section_active' => '1',
    'newsletter_section_title' => 'NewsLetter',
    'newsletter_section_description' => 'Abonnez-vous à notre newsletter pour ne louper aucune news !',
    'newsletter_section_button' => 'S\'abonner !',

    /* - - - - - - - - 
       - - NEWS - -
    - - - - - - - - - */
    "news_title" => "Nouveautés",
    "news_description" => "Les dernières actus !",
    "news_page_title" => "Archives des nouveautés",
    "news_page_number_display" => "20",

    /* - - - - - - - - 
       - - F.A.Q - -
    - - - - - - - - - */
    "faq_title" => "FAQ",
    "faq_description" => "Retrouvez toutes les réponses à vos questions",
    "faq_page_title" => "F.A.Q",
    "faq_question_title" => "Une question ?",
    "faq_answer_title" => "Des réponses",
    "faq_display_autor" => "1",
    "faq_display_form" => "1",

    /* - - - - - - - - 
       - - VOTES - -
    - - - - - - - - - */
    "vote_title" => "Votes",
    "vote_description" => "Votez pour le serveur et gagnez des récompenses uniques !",
    "votes_page_title" => "Voter",
    "votes_participate_title" => "Participer",
    "votes_top_10_title" => "Top 10 du mois",
    "votes_top_10_global_title" => "Top 10 global",
    "votes_display_global" => "1",

    /* - - - - - - - - 
       - - WIKI - -
    - - - - - - - - - */
    "wiki_title" => "Wiki",
    "wiki_description" => "Découvrez notre wiki !",
    "wiki_page_title" => "Wiki",
    "wiki_menu_title" => "Navigation",
    "wiki_display_categorie_icon" => "1",
    "wiki_display_article_categorie_icon" => "1",
    "wiki_display_article_icon" => "1",
    "wiki_display_creation_date" => "1",
    "wiki_display_edit_date" => "1",
    "wiki_display_autor" => "1",

    /* - - - - - - - -
       - - FORUM - -
    - - - - - - - - - */
    "forum_hover_card" => "#2a2a2a",
    "forum_title" => "Forum",
    "forum_description" => "Parcourez notre forum",
    "forum_use_widgets" => "1",
    "forum_widgets_show_stats" => "1",
    "forum_widgets_title_stats" => "Stats du forum",
    "forum_widgets_show_member" => "1",
    "forum_widgets_text_member" => "Membres totaux :",
    "forum_widgets_show_messages" => "1",
    "forum_widgets_text_messages" => "Messages totaux :",
    "forum_widgets_show_topics" => "1",
    "forum_widgets_text_topics" => "Nombres de topics :",
    "forum_widgets_show_discord" => "1",
    "forum_widgets_content_id" => "(Paramètres serveur > Widget > ID serveur)",
    "forum_widgets_show_custom" => "1",
    "forum_widgets_custom_title" => "Widget personnaliser",
    "forum_widgets_custom_text" => "<p>Bonjour !</p>",

    "forum_breadcrumb_home" => "Accueil",
    "forum_btn_create_topic_icon" => "fa-solid fa-pen-to-square",
    "forum_btn_create_topic" => "Créer un topic",

    "forum_sub_forum" => "Sous-Forums",
    "forum_topics" => "Topics",
    "forum_message" => "Messages",
    "forum_last_message" => "Dernier messages",
    "forum_display" => "Affichages",
    "forum_response" => "Réponses",

    "forum_nobody_send_message_img" => "Config/Default/Img/Forum/nobody.png",
    "forum_nobody_send_message_text" => "Aucun message",

    /* - - - - - - - - 
       - - FOOTER - -
    - - - - - - - - - */
    "footer_use_logo" => "1",
    "footer_use_title" => "1",

    "footer_year" => "2023",
    "footer_open_link_new_tab" => "1",

    "footer_link_facebook" => "#",
    "footer_icon_facebook" => "fa-brands fa-facebook",
    "footer_active_facebook" => "1",

    "footer_link_twitter" => "#",
    "footer_icon_twitter" => "fa-brands fa-square-twitter",
    "footer_active_twitter" => "1",

    "footer_link_instagram" => "#",
    "footer_icon_instagram" => "fa-brands fa-instagram",
    "footer_active_instagram" => "1",

    "footer_link_discord" => "#",
    "footer_icon_discord" => "fa-brands fa-discord",
    "footer_active_discord" => "1",

    "footer_title_condition" => "Conditions",
    "footer_desc_condition_use" => "CGU",
    "footer_desc_condition_sale" => "CGV",
    "footer_active_condition" => "1",
];