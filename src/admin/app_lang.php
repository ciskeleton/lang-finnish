<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'Komponentit';
$lang['admin_content'] = 'Sisältö';
$lang['admin_database_backup'] = 'Tietokannan varmuuskopiot';
$lang['admin_extensions'] = 'Laajennukset';
$lang['admin_firewall'] = 'Palomuuri';
$lang['admin_help'] = 'Apua';
$lang['admin_languages'] = 'Kielet';
$lang['admin_logs'] = 'Järjestelmälokit';
$lang['admin_media'] = 'Mediakirjasto';
$lang['admin_modules'] = 'Moduulit';
$lang['admin_plugins'] = 'Lisäosat';
$lang['admin_reports'] = 'Toimintaloki';
$lang['admin_settings'] = 'Järjestelmäasetukset';
$lang['admin_sysinfo'] = 'Järjestelmätiedot';
$lang['admin_system'] = 'Järjestelmä';
$lang['admin_system_firewall'] = 'Järjestelmän palomuuri';
$lang['admin_themes'] = 'Teemat';
$lang['admin_updates'] = 'Järjestelmäpäivitykset';
$lang['admin_users'] = 'Käyttäjät';
$lang['admin_view_site'] = 'Näytä sivusto';
$lang['per_page'] = 'Sivua kohden';

// Generic Messages
$lang['admin_footer_thankyou'] = 'Kiitos luomisesta <a href="%s" target="_blank">%s</a>.';
$lang['admin_items_active_count'] = '=0{Ei aktiivisia kohteita.} other{<b>#</b> / <b>%s</b> kohdetta on aktiivisia.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install_error_com'] = 'Asennus epäonnistui: %s';
$lang['admin_install_location_app'] = 'Vain tämä sovellus';
$lang['admin_install_location_core'] = 'Kaikki sovellukset';
$lang['admin_install_location_select'] = '&#151; Valitse sijainti &#151;';
$lang['admin_install_update_confirm'] = 'Haluatko varmasti päivittää tämän paketin?';
$lang['admin_install_update_error'] = 'Paketin päivittäminen epäonnistui.';
$lang['admin_install_update_skip_confirm'] = 'Haluatko varmasti ohittaa tämän päivityksen?';
$lang['admin_install_update_skip_error'] = 'Tämän päivityksen ohittaminen epäonnistui.';
$lang['admin_install_update_skip_success'] = 'Päivitys ohitettiin onnistuneesti.';
$lang['admin_install_update_success'] = 'Paketti päivitettiin onnistuneesti.';
$lang['admin_install_upload_tip'] = 'Asenna paketti lataamalla sen <b>.zip</b>-tiedosto tähän.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'Vanhojen varmuuskopiotiedostojen siivous epäonnistui.';
$lang['admin_database_backup_clean_success'] = '%d varmuuskopiotiedostoa poistettu. %d levytilaa vapautettu.';
$lang['admin_database_backup_create'] = 'Luo Varmuuskopio';
$lang['admin_database_backup_create_confirm'] = 'Oletko varma, että haluat luoda varmuuskopion nyt?';
$lang['admin_database_backup_create_error'] = 'Varmuuskopiotiedoston luonti epäonnistui. Varmista, että kansio <b>%s</b> on kirjoitettavissa.';
$lang['admin_database_backup_create_success'] = 'Tietokannan varmuuskopiotiedosto <b>%s</b> luotu onnistuneesti.';
$lang['admin_database_backup_delete_confirm'] = 'Oletko varma, että haluat poistaa nämä varmuuskopiotiedostot?';
$lang['admin_database_backup_delete_error'] = 'Valittujen varmuuskopiotiedostojen poistaminen epäonnistui.';
$lang['admin_database_backup_delete_success'] = 'Varmuuskopiot poistettu onnistuneesti.';
$lang['admin_database_backup_download_error'] = 'Valitun tiedoston lataaminen epäonnistui.';
$lang['admin_database_backup_download_success'] = 'Varmuuskopio ladattu onnistuneesti.';
$lang['admin_database_backup_lock_confirm'] = 'Oletko varma, että haluat lukita nämä varmuuskopiotiedostot?';
$lang['admin_database_backup_lock_error'] = 'Valittujen varmuuskopioiden lukitseminen epäonnistui.';
$lang['admin_database_backup_lock_success'] = 'Varmuuskopiotiedostot lukittu onnistuneesti.';
$lang['admin_database_backup_locked_error'] = 'Lukittujen varmuuskopioiden poistaminen epäonnistui.';
$lang['admin_database_backup_missing_error'] = 'Varmuuskopiotiedostoa ei löytynyt.';
$lang['admin_database_backup_unlock_confirm'] = 'Oletko varma, että haluat avata nämä varmuuskopiotiedostot?';
$lang['admin_database_backup_unlock_error'] = 'Valittujen varmuuskopioiden avaaminen epäonnistui.';
$lang['admin_database_backup_unlock_success'] = 'Varmuuskopiotiedostot avattu onnistuneesti.';
$lang['admin_database_prune'] = 'Siivoa';
$lang['admin_database_prune_confirm'] = 'Oletko varma, että haluat siivota tietokannan? Varmuuskopio luodaan ennen suoritusta.';
$lang['admin_database_prune_error'] = 'Tietokannan siivous epäonnistui.';
$lang['admin_database_prune_next'] = 'Seuraava siivous: <b>%s</b>';
$lang['admin_database_prune_success'] = 'Tietokanta siivottu onnistuneesti.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'Poista lokit';
$lang['admin_logs_delete_confirm'] = 'Oletko varma, että haluat poistaa valitut lokitiedostot?';
$lang['admin_logs_delete_error'] = 'Lokitiedostojen poistaminen epäonnistui.';
$lang['admin_logs_delete_success'] = 'Lokitiedostot poistettu onnistuneesti.';
$lang['admin_logs_error_disabled'] = 'Lokitus ei ole tällä hetkellä käytössä.';
$lang['admin_logs_error_empty'] = 'Lokitiedostoja ei löytynyt.';
$lang['admin_logs_error_missing'] = 'Joko lokitiedostoa ei löytynyt tai se oli tyhjä.';
$lang['admin_logs_tip'] = 'Lokitus voi luoda hyvin nopeasti suuria tiedostoja. Tuotanto sivustoilla, mieti vanhojen lokitiedostojen poistamista.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'Oletko varma, että haluat poistaa valitut sähköpostit?';
$lang['admin_emails_delete_error'] = 'Valittujen sähköpostien poistaminen epäonnistui.';
$lang['admin_emails_delete_success'] = 'Valitut sähköpostit poistettu onnistuneesti.';
$lang['admin_emails_email_from'] = 'Lähettäjä';
$lang['admin_emails_mail_queue'] = 'Sähköpostijono';
$lang['admin_emails_mailer'] = 'Massasähköposti';
$lang['admin_emails_search'] = 'Etsi sähköposteja aiheen tai sisällön perusteella...';
$lang['admin_emails_send_error'] = 'Sähköpostin lisääminen jonoon epäonnistui. Yritä uudelleen.';
$lang['admin_emails_send_none'] = 'Yhtään käyttäjää ei vastaa valituihin kriteereihin.';
$lang['admin_emails_send_success'] = 'Sähköposti lisätty jonoon ja lähetetään pian.';
$lang['admin_emails_send_to_banned'] = 'Lähetä estetyille käyttäjille.';
$lang['admin_emails_send_to_deleted'] = 'Lähetä poistetuille käyttäjille.';
$lang['admin_emails_send_to_disabled'] = 'Lähetä passiivisille käyttäjille.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'Lisää käyttäjä';
$lang['admin_users_all_users'] = 'Kaikki käyttäjät';
$lang['admin_users_ban_confirm'] = 'Haluatko varmasti estää valitut käyttäjät?';
$lang['admin_users_ban_error'] = 'Valittuja käyttäjiä ei voitu estää.';
$lang['admin_users_ban_success'] = 'Valitut käyttäjät on estetty onnistuneesti.';
$lang['admin_users_delete_confirm'] = 'Haluatko varmasti poistaa valitut käyttäjät?';
$lang['admin_users_delete_error'] = 'Valittuja käyttäjiä ei voitu poistaa.';
$lang['admin_users_delete_success'] = 'Valitut käyttäjät on poistettu onnistuneesti.';
$lang['admin_users_disable_confirm'] = 'Haluatko varmasti poistaa valitut käyttäjät käytöstä?';
$lang['admin_users_disable_error'] = 'Valittuja käyttäjiä ei voitu poistaa käytöstä.';
$lang['admin_users_disable_success'] = 'Valitut käyttäjät on poistettu käytöstä onnistuneesti.';
$lang['admin_users_edit'] = 'Muokkaa käyttäjää';
$lang['admin_users_edit_error'] = 'Käyttäjän päivittäminen epäonnistui.';
$lang['admin_users_edit_success'] = 'Käyttäjä päivitetty onnistuneesti.';
$lang['admin_users_enable_confirm'] = 'Haluatko varmasti ottaa valitut käyttäjät käyttöön?';
$lang['admin_users_enable_error'] = 'Valittuja käyttäjiä ei voitu ottaa käyttöön.';
$lang['admin_users_enable_success'] = 'Valitut käyttäjät on otettu käyttöön onnistuneesti.';
$lang['admin_users_groups'] = 'Ryhmät';
$lang['admin_users_lock_confirm'] = 'Oletko varma, että haluat lukita valitut käyttäjät?';
$lang['admin_users_lock_error'] = 'Valittujen käyttäjien lukitseminen epäonnistui.';
$lang['admin_users_lock_success'] = 'Valitut käyttäjät lukittu onnistuneesti.';
$lang['admin_users_logged'] = 'Kirjautuneet käyttäjät';
$lang['admin_users_manage'] = 'Hallitse käyttäjiä';
$lang['admin_users_remove_confirm'] = 'Haluatko varmasti poistaa valitut käyttäjät ja kaikki heidän tietonsa pysyvästi?';
$lang['admin_users_remove_error'] = 'Valittuja käyttäjiä ja kaikkia heidän tietojaan ei voitu poistaa pysyvästi.';
$lang['admin_users_remove_success'] = 'Valitut käyttäjät ja kaikki heidän tietonsa on poistettu onnistuneesti.';
$lang['admin_users_restore_confirm'] = 'Haluatko varmasti palauttaa valitut käyttäjät?';
$lang['admin_users_restore_error'] = 'Valittuja käyttäjiä ei voitu palauttaa.';
$lang['admin_users_restore_success'] = 'Valitut käyttäjät on palautettu onnistuneesti.';
$lang['admin_users_search'] = 'Hae nimen, käyttäjätunnuksen tai sähköpostin perusteella...';
$lang['admin_users_unban_confirm'] = 'Haluatko varmasti poistaa valittujen käyttäjien eston?';
$lang['admin_users_unban_error'] = 'Valittujen käyttäjien estoa ei voitu poistaa.';
$lang['admin_users_unban_success'] = 'Valittujen käyttäjien esto on poistettu onnistuneesti.';
$lang['admin_users_unlock_confirm'] = 'Oletko varma, että haluat avata valittujen käyttäjien lukituksen?';
$lang['admin_users_unlock_error'] = 'Valittujen käyttäjien lukituksen avaaminen epäonnistui.';
$lang['admin_users_unlock_success'] = 'Valittujen käyttäjien lukitus avattu onnistuneesti.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'Tyhjennä lokit';
$lang['admin_reports_clear_confirm'] = 'Oletko varma, että haluat tyhjentää toimintalokiin?';
$lang['admin_reports_clear_error'] = 'Toimintalokiin tyhjentäminen epäonnistui.';
$lang['admin_reports_clear_success'] = 'Toimintaloki tyhjennetty onnistuneesti.';
$lang['admin_reports_latest_actions'] = 'Viimeisimmät toiminnot';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'Oletko varma, että haluat poistaa valitut tiedostot?';
$lang['admin_media_delete_error'] = 'Tiedostojen poistaminen epäonnistui.';
$lang['admin_media_delete_success'] = 'Tiedostot poistettu onnistuneesti.';
$lang['admin_media_file_delete_error'] = 'Tiedoston poistaminen epäonnistui.';
$lang['admin_media_file_delete_success'] = 'Tiedosto poistettu onnistuneesti.';
$lang['admin_media_file_update_error'] = 'Tiedoston päivittäminen epäonnistui.';
$lang['admin_media_file_update_success'] = 'Tiedosto päivitetty onnistuneesti.';
$lang['admin_media_search'] = 'Hae nimen, kuvauksen tai tiedostonimen mukaan...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{Ei aktiivisia moduuleja.} other{<b>#</b> / <b>%s</b> moduulia on aktiivisia.}';
$lang['admin_modules_add'] = 'Lisää moduuli';
$lang['admin_modules_delete_confirm'] = 'Oletko varma, että haluat poistaa moduulin: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'Moduulin poistaminen epäonnistui.';
$lang['admin_modules_delete_error_active'] = 'Aktiivisia moduuleja ei voi poistaa.';
$lang['admin_modules_delete_success'] = 'Moduuli poistettu onnistuneesti.';
$lang['admin_modules_disable_all_confirm'] = 'Oletko varma, että haluat poistaa käytöstä kaikki moduulit?';
$lang['admin_modules_disable_all_error'] = 'Kaikkien moduulien poistaminen käytöstä epäonnistui.';
$lang['admin_modules_disable_all_success'] = 'Kaikki moduulit poistettu käytöstä onnistuneesti.';
$lang['admin_modules_disable_confirm'] = 'Oletko varma, että haluat poistaa käytöstä moduulin: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'Moduulin deaktivointi epäonnistui.';
$lang['admin_modules_disable_success'] = 'Moduuli deaktivoitu onnistuneesti.';
$lang['admin_modules_enable_all_confirm'] = 'Oletko varma, että haluat ottaa käyttöön kaikki moduulit?';
$lang['admin_modules_enable_all_error'] = 'Kaikkien moduulien käyttöönotto epäonnistui.';
$lang['admin_modules_enable_all_success'] = 'Kaikki moduulit otettu käyttöön onnistuneesti.';
$lang['admin_modules_enable_confirm'] = 'Oletko varma, että haluat ottaa käyttöön moduulin: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'Moduulin aktivointi epäonnistui.';
$lang['admin_modules_enable_success'] = 'Moduuli aktivoitu onnistuneesti.';
$lang['admin_modules_global'] = 'Yleinen moduuli (jaettu)';
$lang['admin_modules_install_confirm'] = 'Haluatko varmasti asentaa moduulin: <b>%s</b>?';
$lang['admin_modules_install_error'] = 'Moduulin asennus epäonnistui.';
$lang['admin_modules_install_success'] = 'Moduuli asennettiin onnistuneesti.';
$lang['admin_modules_install_tip'] = 'Moduulit lisäävät uusia ominaisuuksia ja toiminnallisuutta sivustollesi. Selaa saatavilla olevia moduuleja <a href="%s" target="_blank" rel="noopener">moduulihakemistossa</a> tai lataa yksi <b>.zip</b>-pakettina.';
$lang['admin_modules_update_confirm'] = 'Haluatko varmasti päivittää tämän moduulin?';
$lang['admin_modules_update_error'] = 'Moduulin päivittäminen epäonnistui.';
$lang['admin_modules_update_success'] = 'Moduuli päivitettiin onnistuneesti.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{Ei aktiivisia lisäosia.} other{<b>#</b> / <b>%s</b> lisäosaa on aktiivisia.}';
$lang['admin_plugins_add'] = 'Lisää lisäosa';
$lang['admin_plugins_delete_confirm'] = 'Oletko varma, että haluat poistaa lisäosa: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'Lisäosa poistaminen epäonnistui.';
$lang['admin_plugins_delete_error_active'] = 'Aktiivisia laajennuksia ei voi poistaa.';
$lang['admin_plugins_delete_success'] = 'Lisäosa poistettu onnistuneesti.';
$lang['admin_plugins_disable_all_confirm'] = 'Oletko varma, että haluat poistaa käytöstä kaikki lisäosat?';
$lang['admin_plugins_disable_all_error'] = 'Kaikkien lisäosat poistaminen käytöstä epäonnistui.';
$lang['admin_plugins_disable_all_success'] = 'Kaikki lisäosat poistettu käytöstä onnistuneesti.';
$lang['admin_plugins_disable_confirm'] = 'Oletko varma, että haluat poistaa käytöstä lisäosa: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'Lisäosa deaktivointi epäonnistui.';
$lang['admin_plugins_disable_success'] = 'Lisäosa deaktivoitu onnistuneesti.';
$lang['admin_plugins_enable_all_confirm'] = 'Oletko varma, että haluat ottaa käyttöön kaikki lisäosa?';
$lang['admin_plugins_enable_all_error'] = 'Kaikkien lisäosa käyttöönotto epäonnistui.';
$lang['admin_plugins_enable_all_success'] = 'Kaikki lisäosa otettu käyttöön onnistuneesti.';
$lang['admin_plugins_enable_confirm'] = 'Oletko varma, että haluat ottaa käyttöön lisäosa: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'Lisäosa aktivointi epäonnistui.';
$lang['admin_plugins_enable_success'] = 'Lisäosa aktivoitu onnistuneesti.';
$lang['admin_plugins_global'] = 'Yleinen laajennus (jaettu)';
$lang['admin_plugins_install_confirm'] = 'Haluatko varmasti asentaa laajennuksen: <b>%s</b>?';
$lang['admin_plugins_install_error'] = 'Laajennuksen asennus epäonnistui.';
$lang['admin_plugins_install_success'] = 'Laajennus asennettiin onnistuneesti.';
$lang['admin_plugins_install_tip'] = 'Lisäosa laajentavat olemassa olevia ominaisuuksia lisävaihtoehdoilla tai integraatioilla. Asenna <a href="%s" target="_blank" rel="noopener">lisäosa</a> tai lataa <b>.zip</b>-tiedosto.';
$lang['admin_plugins_update_confirm'] = 'Haluatko varmasti päivittää tämän laajennuksen?';
$lang['admin_plugins_update_error'] = 'Laajennuksen päivittäminen epäonnistui.';
$lang['admin_plugins_update_success'] = 'Laajennus päivitettiin onnistuneesti.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'Lisää teema';
$lang['admin_themes_delete_confirm'] = 'Oletko varma, että haluat poistaa teeman: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'Teeman poistaminen epäonnistui.';
$lang['admin_themes_delete_error_active'] = 'Et voi poistaa tällä hetkellä aktiivista teemaa.';
$lang['admin_themes_delete_success'] = 'Teema poistettu onnistuneesti.';
$lang['admin_themes_disable_confirm'] = 'Haluatko varmasti poistaa teeman käytöstä: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'Teeman poistaminen käytöstä epäonnistui.';
$lang['admin_themes_disable_error_active'] = 'Aktiivista teemaa ei voi poistaa käytöstä.';
$lang['admin_themes_disable_success'] = 'Teema poistettiin käytöstä onnistuneesti.';
$lang['admin_themes_enable_confirm'] = 'Oletko varma, että haluat ottaa käyttöön teeman: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'Teeman aktivointi epäonnistui.';
$lang['admin_themes_enable_success'] = 'Teema aktivoitu onnistuneesti.';
$lang['admin_themes_install_confirm'] = 'Haluatko varmasti asentaa teeman: <b>%s</b>?';
$lang['admin_themes_install_error'] = 'Teeman asennus epäonnistui.';
$lang['admin_themes_install_success'] = 'Teema asennettiin onnistuneesti.';
$lang['admin_themes_install_tip'] = 'Teemat muuttavat sivustosi ulkoasua ja asettelua. Valitse <a href="%s" target="_blank" rel="noopener">teemakirjastosta</a> tai lataa <b>.zip</b>-tiedosto asentaaksesi oman.';
$lang['admin_themes_none_tip'] = 'Tämä sovellus toimii ilman teemaa. Asenna teema mukauttaaksesi julkista käyttöliittymää.';
$lang['admin_themes_update_confirm'] = 'Haluatko varmasti päivittää tämän teeman?';
$lang['admin_themes_update_error'] = 'Teeman päivittäminen epäonnistui.';
$lang['admin_themes_update_success'] = 'Teema päivitettiin onnistuneesti.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'Valikot';
$lang['admin_menus_assign_error'] = 'Valikkosijaintien päivittäminen epäonnistui.';
$lang['admin_menus_assign_success'] = 'Valikkosijannit päivitetty onnistuneesti.';
$lang['admin_menus_header'] = 'Saatavilla on <b>%s</b> valikkopaikkaa.';
$lang['admin_menus_location'] = 'Sijainti';
$lang['admin_menus_locations'] = 'Valikkosijannit';
$lang['admin_menus_manage'] = 'Hallitse valikoita';
$lang['admin_menus_menu'] = 'Määritetty valikko';
$lang['admin_menus_none'] = '&#151; Ei mitään &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'Lisää kieli';
$lang['admin_languages_default_confirm'] = 'Oletko varma, että haluat tehdä tästä kielestä sivuston oletuskielen?';
$lang['admin_languages_default_error'] = 'Oletuskielen vaihtaminen epäonnistui.';
$lang['admin_languages_default_error_nochange'] = 'Tämä kieli on jo oletuskieli.';
$lang['admin_languages_default_success'] = 'Oletuskieli vaihdettu onnistuneesti.';
$lang['admin_languages_delete_confirm'] = 'Haluatko varmasti poistaa kielen: <b>%s</b>?';
$lang['admin_languages_delete_error'] = 'Kielen poistaminen epäonnistui.';
$lang['admin_languages_delete_error_active'] = 'Aktiivisia kieliä ei voi poistaa.';
$lang['admin_languages_delete_error_default'] = 'Oletuskieltä ei voi poistaa.';
$lang['admin_languages_delete_success'] = 'Kieli poistettiin onnistuneesti.';
$lang['admin_languages_disable_all_confirm'] = 'Oletko varma, että haluat poistaa käytöstä kaikki kielet?';
$lang['admin_languages_disable_all_error'] = 'Kaikkien kielten poistaminen käytöstä epäonnistui.';
$lang['admin_languages_disable_all_success'] = 'Kaikki kielet poistettu käytöstä onnistuneesti.';
$lang['admin_languages_disable_confirm'] = 'Oletko varma, että haluat poistaa käytöstä kielen: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'Kielen poistaminen käytöstä epäonnistui.';
$lang['admin_languages_disable_error_default'] = 'Oletuskieltä ei voi poistaa käytöstä.';
$lang['admin_languages_disable_error_nochange'] = 'Tämä kieli on jo poistettu käytöstä.';
$lang['admin_languages_disable_success'] = 'Kieli poistettu käytöstä onnistuneesti.';
$lang['admin_languages_enable_all_confirm'] = 'Oletko varma, että haluat ottaa käyttöön kaikki kielet?';
$lang['admin_languages_enable_all_error'] = 'Kaikkien kielten käyttöönotto epäonnistui.';
$lang['admin_languages_enable_all_success'] = 'Kaikki kielet otettu käyttöön onnistuneesti.';
$lang['admin_languages_enable_confirm'] = 'Oletko varma, että haluat ottaa käyttöön kielen: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'Kielen käyttöönotto epäonnistui.';
$lang['admin_languages_enable_error_nochange'] = 'Tämä kieli on jo käytössä.';
$lang['admin_languages_enable_success'] = 'Kieli otettu käyttöön onnistuneesti.';
$lang['admin_languages_install_confirm'] = 'Haluatko varmasti asentaa kielen: <b>%s</b>?';
$lang['admin_languages_install_error'] = 'Kielen asennus epäonnistui.';
$lang['admin_languages_install_success'] = 'Kieli asennettiin onnistuneesti.';
$lang['admin_languages_install_tip'] = 'Kielet lisäävät käännöksiä sivustosi käyttöliittymälle ja sisällölle. Selaa saatavilla olevia kieliä <a href="%s" target="_blank" rel="noopener">kielihakemistossa</a> tai lataa <b>.zip</b>-paketti asentaaksesi oman kielesi.';
$lang['admin_languages_tip'] = 'Ota käyttöön, poista käytöstä ja aseta sivuston oletuskieli. Käytössä olevat kielet ovat sivuston vierailijoiden saatavilla.';
$lang['admin_languages_update_confirm'] = 'Haluatko varmasti päivittää tämän kielen?';
$lang['admin_languages_update_error'] = 'Kielen päivittäminen epäonnistui.';
$lang['admin_languages_update_success'] = 'Kieli päivitettiin onnistuneesti.';

/**
 * ---------------------------------------------------------------
 * Package Driver & Installation Messages
 * ---------------------------------------------------------------
 * Language lines for package installation, download, backup, and validation.
 */
$lang['package_already_exists'] = 'Paketti on jo olemassa.';
$lang['package_archive_download_failed'] = 'Pakettiarkiston lataaminen epäonnistui.';
$lang['package_backup_create_error'] = 'Paketin varmuuskopion luominen epäonnistui.';
$lang['package_backup_dir_failed'] = 'Varmuuskopiokansion luominen epäonnistui: %s';
$lang['package_backup_missing'] = 'Varmuuskopiotiedostoa ei ole olemassa.';
$lang['package_backup_path_error'] = 'Varmuuskopiotiedoston polkua ei voitu selvittää.';
$lang['package_backup_request_invalid'] = 'Virheellinen varmuuskopiopyyntö.';
$lang['package_backup_restore_error'] = 'Paketin varmuuskopion palauttaminen epäonnistui.';
$lang['package_catalog_type_unknown'] = 'Tuntematon luettelotyyppi.';
$lang['package_checksum_error'] = 'Paketin tarkistussumman (checksum) todennus epäonnistui.';
$lang['package_copy_files_error'] = 'Pakettitiedostojen kopiointi kohteeseen epäonnistui.';
$lang['package_copy_updates_error'] = 'Päivitystiedostojen kopiointi kohteeseen epäonnistui.';
$lang['package_dest_dir_failed'] = 'Kohdekansion luominen epäonnistui: %s';
$lang['package_destination_error'] = 'Paketin kohdetta ei voitu selvittää.';
$lang['package_download_dir_failed'] = 'Latauskansion luominen epäonnistui: %s';
$lang['package_download_empty'] = 'Paketin lataus palautti tyhjän vastauksen.';
$lang['package_download_request_invalid'] = 'Virheellinen paketin latauspyyntö.';
$lang['package_extract_failed'] = 'ZIP-tiedoston purkaminen epäonnistui: %s';
$lang['package_invalid_lang_files'] = 'Virheellinen kieli — vaaditut sovelluksen kielitiedostot puuttuvat.';
$lang['package_invalid_lang_structure'] = 'Virheellinen kieli — admin- ja/tai ci3-hakemistot puuttuvat.';
$lang['package_invalid_missing_info'] = 'Virheellinen %s: "info.php" puuttuu.';
$lang['package_invalid_module_structure'] = 'Virheellinen moduuli — vaaditut config- ja/tai controllers-hakemistot puuttuvat.';
$lang['package_invalid_plugin_boot'] = 'Virheellinen lisäosa (plugin) — "boot.php" puuttuu.';
$lang['package_invalid_plugin_contents'] = 'Virheellinen lisäosa (plugin) — lisäosat eivät saa sisältää kontrolleja tai näkymiä (views).';
$lang['package_invalid_theme_boot'] = 'Virheellinen teema — "boot.php" puuttuu.';
$lang['package_invalid_theme_views'] = 'Virheellinen teema — views-hakemisto puuttuu.';
$lang['package_no_root_dir'] = 'Paketti ei sisällä juurihakemistoa.';
$lang['package_not_downloadable'] = 'Pakettia ei voi ladata julkisesti.';
$lang['package_not_in_registry'] = 'Paketti ei ole saatavilla julkisessa rekisterissä.';
$lang['package_request_invalid'] = 'Virheellinen pakettipyyntö.';
$lang['package_rollback_request_invalid'] = 'Virheellinen palautuspyyntö (rollback).';
$lang['package_root_mismatch'] = 'Pakettiarkiston juurihakemisto ei vastaa kohdetta %s';
$lang['package_single_root_required'] = 'Paketin on sisällettävä tarkalleen yksi juurihakemisto.';
$lang['package_source_error'] = 'Paketin lähdettä ei voitu selvittää.';
$lang['package_system_core_restricted'] = 'Järjestelmäkomponentteja ei voi asentaa paketteina.';
$lang['package_temp_dir_failed'] = 'Väliaikaiskansion luominen epäonnistui: %s';
$lang['package_type_unknown'] = 'Tuntematon pakettityyppi.';
$lang['package_update_request_invalid'] = 'Virheellinen paketin päivityspyyntö.';
$lang['package_update_root_mismatch'] = 'Päivitysarkiston juurihakemisto ei vastaa kohdetta %s.';
$lang['package_upload_dir_failed'] = 'Lähetyskansion luominen epäonnistui: %s';
$lang['package_url_invalid'] = 'Virheellinen paketin jakelu-URL.';
$lang['package_write_failed'] = 'Paketin kirjoittaminen kohteeseen %s epäonnistui';
$lang['package_zip_not_found'] = 'Paketin ZIP-tiedostoa ei löydy: %s';

/**
 * ---------------------------------------------------------------
 * Updates Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'Uusia päivityksiä saatavilla!';
$lang['update_backup_error'] = 'Olemassa olevan paketin varmuuskopion luominen epäonnistui. Päivitys keskeytettiin.';
$lang['update_check_disabled'] = 'Automaattiset päivitystarkistukset on poistettu käytöstä. Ota ne käyttöön nähdäksesi päivitykset.';
$lang['update_check_error'] = 'Päivitystarkistusta ei voida suorittaa tällä hetkellä.';
$lang['update_check_success'] = 'Päivitystarkistus suoritettu onnistuneesti.';
$lang['update_install_error'] = 'Paketin asennus epäonnistui. Edellinen versio säilytettiin.';
$lang['update_install_success'] = 'Paketti päivitetty onnistuneesti uusimpaan versioon.';
$lang['update_interval_3days'] = 'Joka 3. päivä';
$lang['update_interval_biweekly'] = 'Joka 2. viikko';
$lang['update_interval_daily'] = 'Joka päivä';
$lang['update_interval_monthly'] = 'Kerran kuukaudessa';
$lang['update_interval_weekly'] = 'Kerran viikossa';
$lang['update_not_available'] = 'Verkkosivustosi on ajan tasalla.';
$lang['update_rollback_confirm'] = 'Haluatko varmasti palauttaa edellisen version?';
$lang['update_rollback_error'] = 'Edellisen version palauttaminen epäonnistui. Manuaalinen toimenpide saattaa olla tarpeen.';
$lang['update_rollback_success'] = 'Edellinen versio palautettu onnistuneesti.';
$lang['updates_available'] = 'Saatavilla olevat päivitykset';
$lang['updates_check_now'] = 'Tarkista nyt';
$lang['updates_check_now_confirm'] = 'Haluatko varmasti tarkistaa päivitykset nyt?';
$lang['updates_current_version'] = 'Nykyinen versio';
$lang['updates_enable'] = 'Ota päivitykset käyttöön';
$lang['updates_last_check'] = 'Viimeisin tarkistus: %s';
$lang['updates_latest_version'] = 'Uusin versio';
$lang['updates_next_check'] = 'Seuraava ajastettu tarkistus: %s';
$lang['updates_previous_version'] = 'Edellinen versio';
$lang['updates_recent'] = 'Äskettäin päivitetty';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'Määritetyn IP-osoitteen estäminen epäonnistui.';
$lang['admin_firewall_ban_success'] = 'IP-osoite on estetty onnistuneesti.';
$lang['admin_firewall_block_ip'] = 'Estä IP-osoite';
$lang['admin_firewall_delete_confirm'] = 'Oletko varma, että haluat poistaa eston valituilta IP-osoitteilta?';
$lang['admin_firewall_delete_error'] = 'Valittujen IP-osoitteiden eston poistaminen epäonnistui.';
$lang['admin_firewall_delete_success'] = 'Valittujen IP-osoitteiden esto on poistettu onnistuneesti.';
$lang['admin_firewall_duration'] = 'Eston kesto';
$lang['admin_firewall_permanent'] = 'Pysyvä';
$lang['admin_firewall_reason'] = 'Eston syy';
$lang['admin_firewall_tip'] = 'Tarkastele ja hallitse palomuurin estämiä IP-osoitteita, jotka on estetty toistuvien rikkomusten tai epäilyttävän toiminnan vuoksi.';

// Settings
$lang['404_ban_duration'] = '404-estojen kesto';
$lang['404_threshold'] = '404-virheiden raja';
$lang['uri_ban_duration'] = 'URI-eston kesto';
$lang['uri_strike_threshold'] = 'URI-raja';
