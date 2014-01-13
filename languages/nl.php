<?php
$language = array (
  'simplesaml:error:no_source' => 'Geen authenticatie bron gedefinieerd',
  'simplesaml:error:source_not_enabled' => 'De opgegeven authenticatie bron is niet ingeschakeld op deze site',
  'simplesaml:error:source_mismatch' => 'De opgegeven authenticatie bron komt niet overeen met de server connectie',
  'simplesaml:error:class' => 'Fout tijdens het ophalen van de authenticatie bron configuratie: %s',
  'simplesaml:source:type:unknown' => 'Onbekend',
  'simplesaml:source:type:saml' => 'SAML',
  'simplesaml:source:type:cas' => 'CAS',
  'simplesaml:no_linked_account:title' => 'Geen account gekoppeld aan de authenticatie bron: %s',
  'simplesaml:no_linked_account:description' => 'Er kon geen account worden gevonden dat is gekoppeld aan je account van %s. Je kunt je account van deze site koppelen door je hieronder aan te melden of te registreren.',
  'simplesaml:settings:sources' => 'Service provider configuratie',
  'simplesaml:settings:sources:name' => 'Authenticatie bron',
  'simplesaml:settings:sources:type' => 'Type',
  'simplesaml:settings:sources:auto_create_accounts' => 'Accounts automatisch aanmaken',
  'simplesaml:settings:sources:save_attributes' => 'Authenticatie attributen opslaan',
  'simplesaml:settings:sources:force_authentication' => 'Forceer authenticatie',
  'simplesaml:settings:sources:configuration:auto_link' => 'Link accounts automatisch op basis van profiel informatie (optioneel)',
  'simplesaml:settings:sources:configuration:auto_link:description' => 'Als de externe authenticatie bron de geconfigureerde profiel informatie aanlevert, zullen beide accounts automatisch gelinkt worden.',
  'simplesaml:settings:sources:configuration:auto_link:none' => 'Automatisch linken niet toestaan',
  'simplesaml:settings:warning:configuration:sources' => 'Er zijn nog geen authenticatie bronnen geconfigureerd',
  'simplesaml:settings:idp' => 'IDentity Provider configuratie voor: %s',
  'simplesaml:settings:idp:description' => 'Hier kan worden geconfigureerd welke profiel informatie wordt vrijgegeven in het SAML authenticatie proces.',
  'simplesaml:settings:idp:show_attributes' => 'Toon de te configureren profiel velden',
  'simplesaml:settings:idp:profile_field' => 'Profiel veld',
  'simplesaml:settings:idp:attribute' => 'SAML attribuut naam',
  'simplesaml:settings:idp:attribute:description' => 'Als een attribuut naam leeg wordt gelaten zal deze niet worden vrijgegeven tijdens het SAML authenticatie proces.',
  'simplesaml:usersettings:connected' => 'Je account is gekoppeld met de authenticatie bron %s. Je kunt je op deze site aanmelden met je externe account indien je dit wilt.',
  'simplesaml:usersettings:toggle_attributes' => 'Toon de opgeslagen authenticatie attributen',
  'simplesaml:usersettings:attributes:name' => 'Naam',
  'simplesaml:usersettings:attributes:value' => 'Waarde',
  'simplesaml:usersettings:not_connected' => 'Je account is niet gekoppeld met de externe authenticatie bron %s. Als je je wilt aanmelden op deze site met je externe account, koppel dan aub beide accounts.',
  'simplesaml:usersettings:no_sources' => 'Er zijn geen authenticatie bronnen beschikbaar, vraag de beheerder om dit te configureren.',
  'simplesaml:widget:description' => 'Toont een aanmeld widget met enkel de externe authenticatie bronnen',
  'simplesaml:widget:select_source' => 'Selecteer de authenticatie bron om te tonen in de widget',
  'simplesaml:login:no_linked_account' => 'Er is geen account gekoppeld aan de authenticatie bron %s',
  'simplesaml:authorize:error:attributes' => 'Er konden geen attributen worden gevonden vanuit de authenticatie bron %s, probeer het nogmaals of neem contact op met de site beheerder',
  'simplesaml:authorize:error:external_id' => 'Er kon geen unieke identificatie worden gevonden vanuit de authenticatie bron %s, probeer het nogmaals of neem contact op met de site beheerder',
  'simplesaml:authorize:error:link' => 'Er is een onbekende fout opgetreden tijdens het koppelen met de authenticatie bron %s',
  'simplesaml:authorize:success' => 'Je heb je account succesvol gekoppeld met de authenticatie bron %s',
  'simplesaml:action:unlink:error' => 'Er is een onbekende fout opgetreden tijdens het verwijderen van de koppeling met de authenticatie bron %s',
  'simplesaml:action:unlink:success' => 'De koppeling met de authenticatie bron %s is succesvol verwijdert',
  'simplesaml:error:loggedin' => 'Deze actie kan niet worden uitgevoerd al je bent aangemeld',
  'simplesaml:forms:register:description' => 'Als je nog geen account hebt op deze site, kun je er een aanmaken door op de Registreer knop te klikken. Het kan nodig zijn om additionele informatie op te geven.',
  'simplesaml:no_linked_account:login' => 'Klik hier als je al een account hebt op deze site',
  'simplesaml:settings:simplesamlphp_path' => 'Pad naar de SimpleSAMLPHP bibliotheek',
  'simplesaml:settings:simplesamlphp_path:description' => 'Het volledige pad naar de SimpleSAMLPHP (http://simplesamlphp.org) bibliotheek zonder afsluitende slash (/)',
  'simplesaml:settings:simplesamlphp_directory' => 'Virtuele map van de SimpleSAMLPHP bibliotheek',
  'simplesaml:settings:simplesamlphp_directory:description' => 'De map waar de SimpleSAMLPHP bibliotheek te vinden is, zonder afsluitende slash (/). Bijvoorbeeld als het volledige pad %ssimplesamlphp/ is, geef dan simplesamlphp op',
  'simplesaml:settings:sources:allow_registration' => 'Registratie toestaan',
  'simplesaml:settings:sources:configuration:title' => 'Configuratie instellingen voor: %s',
  'simplesaml:settings:sources:configuration:icon' => 'URL naar een icoon voor deze connectie (optioneel)',
  'simplesaml:settings:sources:configuration:icon:description' => 'Je kunt een URL opgeven naar een icoon voor deze connectie, dit zal gebruikt worden op het aanmeldscherm en bij de gebruikers instellingen.',
  'simplesaml:settings:sources:configuration:external_id' => 'Veld met de unieke user id van de SAML connectie (optioneel)',
  'simplesaml:settings:sources:configuration:external_id:description' => 'Als je de unieke user id niet uit de attributen kunt halen, kun je hier een veld uit de AuthData opgeven welke de user id bevat.',
  'simplesaml:settings:warning:configuration:simplesamlphp' => 'Geef het pad naar de SimpleSAMLPHP bibliotheek op voor verdere configuratie mogelijkheden',
  'simplesaml:usersettings:unlink_url' => 'Klik hier op de koppeling te verwijderen',
  'simplesaml:usersettings:unlink_confirm' => 'Weet je zeker dat je de koppeling met %s wilt verwijderen',
  'simplesaml:usersettings:link_url' => 'Klik hier om beide accounts te koppelen',
  'simplesaml:widget:logged_in' => 'Welkom <b>%s</b> op de <b>%s</b> community',
  'simplesaml:action:register:error:displayname' => 'Er is geen weergave naam opgegeven, vul je naam in',
);
add_translation("nl", $language);
