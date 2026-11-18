<?php

/**
 * System emails language lines.
 *
 * @package     CiSkeleton\Core
 * @subpackage  Language
 * @category    Core
 *
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

// ====================================================================
// SYSTEM NOTIFICATIONS
// ====================================================================

// ----------------------------------------------------------------
// Update Available
// ----------------------------------------------------------------

$lang['emails_updates_available_subject'] = 'Järjestelmäpäivityksiä saatavilla';
$lang['emails_updates_available_message'] = <<<EOT
Hei,

{site_anchor} -sivustolle on havaittu uusia järjestelmäpäivityksiä.

Nämä päivitykset voivat sisältää tietoturvakorjauksia, suorituskyvyn parannuksia tai uusia ominaisuuksia.
Suosittelemme tarkistamaan ne mahdollisimman pian.

Voit tarkistaa ja hallita käytettävissä olevia päivityksiä hallintapaneelista:
{link}

Jos olet jo tarkistanut tai asentanut päivitykset, sinun ei tarvitse tehdä mitään.

Tämä on {site_name}:n lähettämä automaattinen järjestelmäviesti.
Älä vastaa tähän sähköpostiin.

-- {site_name}
EOT;

// ====================================================================
// USER ACCOUNTS
// ====================================================================

// ----------------------------------------------------------------
// Account Activation Request
// ----------------------------------------------------------------

$lang['emails_account_activation_request_subject'] = 'Tilin aktivointi';
$lang['emails_account_activation_request_message'] = <<<EOT
Hei {name},

Kiitos rekisteröitymisestäsi {site_anchor}-sivustolle. Tilisi on luotu, mutta se tulee aktivoida ennen kuin voit käyttää sitä.

Aktivoidaksesi tilisi, klikkaa seuraavaa linkkiä tai kopioi ja liitä se selaimeesi:
{link}

Ystävällisin terveisin,
-- {site_name}-tiimi.
EOT;

// ----------------------------------------------------------------
// Resend Account Activation Link
// ----------------------------------------------------------------

$lang['emails_account_activation_resend_subject'] = 'Uusi aktivointilinkki';
$lang['emails_account_activation_resend_message'] = <<<EOT
Hei {name},

Olet äskettäin pyytänyt uutta aktivointilinkkiä {site_anchor}-sivustolla, koska tilisi ei ollut aktiivinen.
Aktivoidaksesi tilisi, klikkaa seuraavaa linkkiä tai kopioi ja liitä se selaimeesi:
{link}

Jos et pyytänyt tätä, ei tarvita lisätoimenpiteitä.

Tämä toimenpide pyydettiin tästä IP-osoitteesta: {ip_link}.

Ystävällisin terveisin,
-- {site_name}-tiimi.
EOT;

// ----------------------------------------------------------------
// Account Activation Successful
// ----------------------------------------------------------------

$lang['emails_account_activation_success_subject'] = 'Tili aktivoitu';
$lang['emails_account_activation_success_message'] = <<<EOT
Hei {name},

Tilisi {site_anchor}-sivustolla on aktivoitu onnistuneesti. Voit nyt <a href="{login_url}" target="_blank" rel="noopener">kirjautua sisään</a> milloin tahansa.

Toivomme, että nautit oleskelustasi.

Ystävällisin terveisin,
-- {site_name}-tiimi.
EOT;

// ----------------------------------------------------------------
// Pending Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_pending_subject'] = 'Tili odottaa hyväksyntää';
$lang['emails_account_approval_pending_message'] = <<<EOT
Hei {name},

Kiitos, kun liityit {site_anchor}-sivustolle. Tilisi on luotu, mutta sen on hyväksyttävä ylläpitäjän toimesta, ennen kuin se aktivoituu.
Pahoittelemme tätä lisävaihetta - se on puhtaasti turvallisuussyistä.

Saat vahvistussähköpostin, kun tilisi on hyväksytty.

Toivomme, että nautit oleskelustasi.

Ystävällisin terveisin,
-- {site_name}-tiimi.
EOT;

// ----------------------------------------------------------------
// Successful Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_success_subject'] = 'Tili hyväksytty';
$lang['emails_account_approval_success_message'] = <<<EOT
Hei {name},

Hyviä uutisia! Tilisi {site_anchor}-sivustolla on juuri hyväksytty.

Voit nyt kirjautua sisään ja aloittaa tilisi käytön heti:
{link}

Olemme iloisia, että olet mukana.

Ystävällisin terveisin,
-- {site_name}-tiimi.
EOT;

// ----------------------------------------------------------------
// Account Restoration
// ----------------------------------------------------------------

$lang['emails_account_restored_subject'] = 'Tili palautettu';
$lang['emails_account_restored_message'] = <<<EOT
Hei {name},

Tämä sähköposti vahvistaa, että tilisi {site_anchor}-sivustolla on palautettu onnistuneesti.

Tervetuloa takaisin! Toivomme, että nautit oleskelustasi tällä kertaa.

Ystävällisin terveisin,
-- {site_name}-tiimi.
EOT;

// ----------------------------------------------------------------
// Welcome Message
// ----------------------------------------------------------------

$lang['emails_account_welcome_subject'] = 'Tervetuloa sivustolle {site_name}';
$lang['emails_account_welcome_message'] = <<<EOT
Hei {name},

Useimmilla ihmisillä on todella pitkiä tervetuliaisähköpostisarjoja sen jälkeen, kun olet rekisteröitynyt sivustolleen.

Hyviä uutisia: me emme ole kuin useimmat ihmiset.
Mutta haluamme silti toivottaa sinut tervetulleeksi ja kiittää sinua siitä, että olet liittynyt {site_anchor}-sivustolle.

Toivomme, että nautit oleskelustasi. Ystävällisin terveisin,

-- {site_name}-tiimi.
EOT;

// ----------------------------------------------------------------
// Email Change Request
// ----------------------------------------------------------------

$lang['emails_email_change_request_subject'] = 'Pyyntö sähköpostiosoitteen vaihtamiseksi';
$lang['emails_email_change_request_message'] = <<<EOT
Hei {name},

Olet saanut tämän sähköpostin, koska olemme saaneet pyynnön sähköpostiosoitteen muuttamisesta tilillesi {site_anchor}-sivustolla.

Klikkaa seuraavaa linkkiä tai kopioi ja liitä se selaimeesi, jos haluat jatkaa:
{link}

Jos et ole pyytänyt sähköpostiosoitteen muutosta, lisätoimenpiteitä ei tarvita.

Tämä toimenpide pyydettiin tästä IP-osoitteesta: {ip_link}.

Ystävällisin terveisin,
-- {site_name}-tiimi.
EOT;

// ----------------------------------------------------------------
// Successful Email Change
// ----------------------------------------------------------------

$lang['emails_email_change_success_subject'] = 'Sähköpostiosoite vaihdettu';
$lang['emails_email_change_success_message'] = <<<EOT
Hei {name},

Tämä sähköposti vahvistaa, että {site_anchor}-sivustolla käyttämäsi sähköpostiosoite on onnistuneesti vaihdettu.

Jos et suorittanut tätä toimenpidettä, ota meihin yhteyttä mahdollisimman pian, jotta voimme ratkaista tämän ongelman.

Tämä toimenpide suoritettiin tästä IP-osoitteesta: {ip_link}.

Ystävällisin terveisin,
-- {site_name}-tiimi.
EOT;

// ----------------------------------------------------------------
// Login Alert: Failure
// ----------------------------------------------------------------

$lang['emails_login_alert_failure_subject'] = 'Hälytys epäonnistuneesta kirjautumisesta';
$lang['emails_login_alert_failure_message'] = <<<EOT
Hei {name},

Joku on yrittänyt kirjautua {site_name}-tilillesi väärällä salasanalla.

Palvelinpäivämäärä: {date}
Laite: {browser}, {platform}
IP-osoite: {ip_link}

Jos se et ollut sinä, älä huoli - kirjautumisyritys epäonnistui.

Jos se oli sinä, mutta et muista salasanaasi, klikkaa alla olevaa linkkiä palauttaaksesi sen:
{reset_link}

Jos sinulla on ongelmia kirjautumisessa, ota yhteyttä tiimiimme tai pyydä kertakirjautumislinkkiä.

-- {site_name}-tiimi.
EOT;

// ----------------------------------------------------------------
// Login Alert: Success
// ----------------------------------------------------------------

$lang['emails_login_alert_success_subject'] = 'Ilmoitus onnistuneesta kirjautumisesta';
$lang['emails_login_alert_success_message'] = <<<EOT
Hei {name},

Lähetämme sinulle tämän sähköpostin onnistuneen {site_name}-tilillesi kirjautumisen jälkeen.

Palvelimen päiväys: {date}
Laite: {browser}, {platform}
IP-osoite: {ip_link}

Jos olit sinä, voit turvallisesti jättää tämän sähköpostin huomiotta.

Jos et ollut sinä, vaihda salasanasi välittömästi tilisi turvaamiseksi.

Ota yhteyttä tukeemme, jos tarvitset apua.

-- {site_name}-tiimi.
EOT;

// ----------------------------------------------------------------
// One-Click Login Link
// ----------------------------------------------------------------

$lang['emails_login_magic_link_subject'] = 'Pikakirjautumislinkki';
$lang['emails_login_magic_link_message'] = <<<EOT
Hei {name},

Tässä on maaginen linkkisi {site_name}-tilillesi kirjautumiseen.

Klikkaa alla olevaa linkkiä kirjautuaksesi sisään:
{link}

Linkki vanhenee: {time}

Jos et pyytänyt tätä linkkiä, voit jättää tämän sähköpostin huomiotta.

Ystävällisin terveisin,
-- {site_name}-tiimi.
EOT;

// ----------------------------------------------------------------
// Login: Two-Factor Authentication Code
// ----------------------------------------------------------------

$lang['emails_login_two_factor_code_subject'] = 'Kaksivaiheinen tunnistautuminen';
$lang['emails_login_two_factor_code_message'] = <<<EOT
Hei {name},

Kaksivaiheisen tunnistautumisen koodisi on: <strong>{code}</strong>

Voit aina poistaa kaksivaiheisen tunnistautumisen käytöstä tilisi asetuksista.

Tämä toimenpide suoritettiin tästä IP-osoitteesta: {ip_link}.

Ystävällisin terveisin,
-- {site_name}-tiimi.
EOT;

// ----------------------------------------------------------------
// Password Change Request
// ----------------------------------------------------------------

$lang['emails_password_change_request_subject'] = 'Salasanan palautuspyyntö';
$lang['emails_password_change_request_message'] = <<<EOT
Hei {name},

Saat tämän sähköpostin, koska olemme saaneet pyynnön salasanan palauttamisesta {site_name}-tilillesi.

Napsauta seuraavaa linkkiä tai kopioi ja liitä se selaimeesi, jos haluat jatkaa:
{link}

Jos et pyytänyt salasanan palautusta, ei tarvita lisätoimenpiteitä.

Tämä toimenpide pyydettiin tästä IP-osoitteesta: {ip_link}.

Ystävällisin terveisin,
-- {site_name}-tiimi.
EOT;

// ----------------------------------------------------------------
// Password Change Successful
// ----------------------------------------------------------------

$lang['emails_password_change_success_subject'] = 'Salasana vaihdettu';
$lang['emails_password_change_success_message'] = <<<EOT
Hei {name},

Tämä sähköposti vahvistaa, että salasanasi {site_name}-sivustolla on onnistuneesti vaihdettu. Voit nyt <a href="{login_url}" target="_blank" rel="noopener">kirjautua sisään</a> uudella salasanallasi.

Jos et suorittanut tätä toimenpidettä, ota meihin yhteyttä mahdollisimman pian ongelman ratkaisemiseksi.

Tämä toimenpide suoritettiin tästä IP-osoitteesta: {ip_link}.

Ystävällisin terveisin,
-- {site_name}-tiimi.
EOT;
