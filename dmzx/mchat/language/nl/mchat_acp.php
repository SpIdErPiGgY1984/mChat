<?php

/**
 *
 * @package phpBB Extension - mChat
 * @copyright (c) 2016 dmzx - http://www.dmzx-web.net
 * @copyright (c) 2016 kasimi - https://kasimi.net
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, [
	// ACP Configuration sections
	'MCHAT_SETTINGS_INDEX'							=> 'Index pagina instellingen',
	'MCHAT_SETTINGS_CUSTOM'							=> 'Aangepaste pagina instellingen',
	'MCHAT_SETTINGS_ARCHIVE'						=> 'Archief pagina instellingen',
	'MCHAT_SETTINGS_POSTS'							=> 'Nieuwe posten instellingen',
	'MCHAT_SETTINGS_MESSAGES'						=> 'Bericht instellingen',
	'MCHAT_SETTINGS_PRUNE'							=> 'Opkuis instellingen (instelbaar voor oprichters alleen)',
	'MCHAT_SETTINGS_LOG'							=> 'Log instellingen (alleen instelbaar voor oprichters)',
	'MCHAT_SETTINGS_STATS'							=> 'Wie is aan het chatten instellingen',

	'MCHAT_GLOBALUSERSETTINGS_EXPLAIN'				=> 'Instellingen waarvoor een gebruiker <strong>geen</strong> permissies heeft om aan te passen worden geconfigureerd zoals hieronder.<br>Nieuwe gebruikers accounts zullen oorspronkelijke instellingen hebben zoals hieronder geconfigureerd.<br><br>Ga naar <em>mChat in de gebruikerspaneel</em> tab van de gebruikers permissie sectie om aangepaste permissies in te stellen.<br>Ga naar het <em>Voorkeuren</em> formulier in de <em>gebruikers beheer</em> tab om de status te bekijken van elke gebruiker zijn/haar instellingen.',
	'MCHAT_GLOBALUSERSETTINGS_OVERWRITE'			=> 'Overschrijf instellingen voor alle gebruikers',
	'MCHAT_GLOBALUSERSETTINGS_OVERWRITE_EXPLAIN'	=> 'Pas de instellingen aan zoals bovenaan aangegeven bij <em>alle</em> gebruikers accounts.',
	'MCHAT_GLOBALUSERSETTINGS_OVERWRITE_CONFIRM'	=> 'Bevestig het overschrijven van de mChat instellingen voor alle gebruikers',

	'MCHAT_ACP_USER_PREFS_EXPLAIN'					=> 'Hieronder ziet u alle mChat voorkeuren van de geselecteerde gebruiker. Instellingen waarvoor de geselecteerde gebruiker geen permissie heeft om aan te passen zijn uitgeschakeld. Deze instellingen kunnen aangepast worden in de <em>Globale gebruiker instellingen</em> in de mChat configuratie sectie.',

	// ACP settings
	'MCHAT_ACP_CHARACTERS'							=> 'karakters',
	'MCHAT_ACP_MESSAGES'							=> 'berichten',
	'MCHAT_ACP_SECONDS'								=> 'seconden',
	'MCHAT_ACP_HOURS'								=> 'uren',
	'MCHAT_ACP_DAYS'								=> 'dagen',
	'MCHAT_ACP_WEEKS'								=> 'weken',
	'MCHAT_ACP_GLOBALSETTINGS_TITLE'				=> 'mChat Globale instellingen',
	'MCHAT_ACP_GLOBALUSERSETTINGS_TITLE'			=> 'mChat Globale gebruikers instellingen',
	'MCHAT_VERSION'									=> 'Versie',
	'MCHAT_RULES'									=> 'Regels',
	'MCHAT_RULES_EXPLAIN'							=> 'Vul de forum regels hier in. HTML code is toegestaan. <em>Er is een limiet van 255 karakters.</em><br>Dit bericht kan vertaald worden: Bewerk de MCHAT_RULES_MESSAGE taal code in /ext/dmzx/mchat/language/XX/mchat.php.',
	'MCHAT_CONFIG_SAVED'							=> 'mChat configuratie werd geüpdatet',
	'MCHAT_AVATARS'									=> 'Toon avatars',
	'MCHAT_AVATARS_EXPLAIN'							=> 'Indien ingesteld op ja zullen verkleinde gebruiker avatars getoond worden',
	'MCHAT_INDEX'									=> 'Toon mChat op de index pagina',
	'MCHAT_INDEX_HEIGHT'							=> 'Index pagina hoogte',
	'MCHAT_INDEX_HEIGHT_EXPLAIN'					=> 'De hoogste van de chat in pixel op de index pagina.<br><em>Er is een limiet van 50 tot 1000. Standaard waarde is 250.</em>',
	'MCHAT_TOP_OF_FORUM'							=> 'Boven',
	'MCHAT_BOTTOM_OF_FORUM'							=> 'Onder',
	'MCHAT_REFRESH'									=> 'Vernieuwing interval',
	'MCHAT_REFRESH_EXPLAIN'							=> 'Aantal seconden voordat de chat vernieuwd.<br><em>Er is een limiet van 5 tot 60 seconden. Standaard waarde is 10.</em>',
	'MCHAT_LIVE_UPDATES'							=> 'Live updates van bewerkte en verwijderde berichten',
	'MCHAT_LIVE_UPDATES_EXPLAIN'					=> 'Wanneer een gebruiker berichten bewerkt of verwijderd worden de updates live geüpdatet voor alle gebruikers zonder dat ze de pagina hoeven te vernieuwen. Schakel deze functie uit als je prestatie problemen ondervindt.',
	'MCHAT_PRUNE'									=> 'Schakel opruiming van berichten in',
	'MCHAT_PRUNE_GC'								=> 'Berichten verwijdering terugkerende taak',
	'MCHAT_PRUNE_GC_EXPLAIN'						=> 'De tijd in seconden dat voorbij moeten gaan alvorens terugkerende opkuising geactiveerd wordt. Opgelet: Deze instelling controleert <em>wanneer</em> berichten worden gemarkeerd als ze klaar zijn om verwijderd te worden. Het controleert <em>niet</em> welke berichten verwijderd zullen worden. <em>De standaard is 86400 = 24 uren.</em>',
	'MCHAT_PRUNE_NUM'								=> 'Berichten om te behouden na de verwijdering',
	'MCHAT_PRUNE_NUM_EXPLAIN'						=> 'Wanneer je ’berichten’ gebruikt zal een vooraf bepaald getal het aantal berichten bijhouden. Wanneer je ’uren’, ’dagen’ of ’weken’ gebruikt zullen alle oudere berichten dan de opgegeven periode verwijderd worden.',
	'MCHAT_PRUNE_NOW'								=> 'Kuis berichten nu op',
	'MCHAT_PRUNE_NOW_CONFIRM'						=> 'Bevestig opkuisen van berichten',
	'MCHAT_PRUNED'									=> '%1$d mChat berichten werden opgekuist',
	'MCHAT_NAVBAR_LINK_COUNT'						=> 'Toon het aantal nummers van actieve chat sessies in de navbar link',
	'MCHAT_MESSAGE_NUM_CUSTOM'						=> 'Aanvankelijke aantal berichten weer te geven op de aangepaste pagina',
	'MCHAT_MESSAGE_NUM_CUSTOM_EXPLAIN'				=> '<em>Er is een limiet van 5 tot 50. Standaard is 10</em>',
	'MCHAT_MESSAGE_NUM_INDEX'						=> 'Aanvankelijke aantal berichten weer te geven op de indexpagina',
	'MCHAT_MESSAGE_NUM_INDEX_EXPLAIN'				=> '<em>Er is een limiet van 5 tot 15. Standaard is 10</em>',
	'MCHAT_MESSAGE_NUM_ARCHIVE'						=> 'Aantal berichten weer te geven op de archief pagina',
	'MCHAT_MESSAGE_NUM_ARCHIVE_EXPLAIN'				=> 'Het maximum aantal berichten om weer te geven op de archief pagina.<br><em>Er is een limiet van 10 tot 100. Standaard is 25.</em>',	
	'MCHAT_ARCHIVE_SORT'							=> 'Berichten sortering',
	'MCHAT_ARCHIVE_SORT_TOP_BOTTOM'					=> 'Sorteer berichten altijd van boven naar onder',
	'MCHAT_ARCHIVE_SORT_BOTTOM_TOP'					=> 'Sorteer berichten altijd van onder naar boven',
	'MCHAT_ARCHIVE_SORT_USER'						=> 'Sorteer berichten afhangend van de gebruikers <em>Locatie van nieuwe berichten</em> voorkeuren',
	'MCHAT_FLOOD_TIME'								=> 'Flood tijd',
	'MCHAT_FLOOD_TIME_EXPLAIN'						=> 'Het aantal seconden dat een gebruiker moet wachten alvorens een nieuw bericht in de chat te plaatsen.<br><em>Er is een limiet van 0 tot 60 seconden. De standaard is 0. Zet op 0 om deze functie uit te schakelen.</em>',
	'MCHAT_EDIT_DELETE_LIMIT'						=> 'Tijdslimiet voor het bewerken en verwijderen van berichten',
	'MCHAT_EDIT_DELETE_LIMIT_EXPLAIN'				=> 'Berichten ouder dan het aantal opgegeven seconden kunnen niet bewerkt of verwijderd worden door de poster.<br>met uitzondering van gebruikers met <em>verwijder permissies en of moderator permissies</em>.<br>Zet op 0 om ongelimiteerde bewerkingen of verwijderingen toe te staan.',
	'MCHAT_MAX_MESSAGE_LENGTH'						=> 'Maximum bericht lengte',
	'MCHAT_MAX_MESSAGE_LENGTH_EXPLAIN'				=> 'Maximum aantal karakters dat zijn toegestaan per gepost bericht.<br><em>Er is een limiet van 0 tot 1000. Standaard waarde is 500. Zet op 0 op uit te schakelen.</em>',
	'MCHAT_MAX_INPUT_HEIGHT'						=> 'Maximale invoer veld hoogte',
	'MCHAT_MAX_INPUT_HEIGHT_EXPLAIN'				=> 'Het invoerveld wordt niet groter dan dit aantal pixels.<br><em>U bent beperkt van 0 tot 1000. Standaard is 150. Stel dit in op 0 om berichten met meerdere regels niet toe te staan.</em>',
	'MCHAT_CUSTOM_PAGE'								=> 'Schakel mChat pagina in',
	'MCHAT_CUSTOM_HEIGHT'							=> 'mChat pagina hoogte',
	'MCHAT_CUSTOM_HEIGHT_EXPLAIN'					=> 'De hoogte van het chat venster in pixels op de mChat pagina.<br><em>Je bent gelimiteerd van 50 tot 1000. Standaard is 350.</em>',
	'MCHAT_BBCODES_DISALLOWED'						=> 'Niet toegestane bbcodes',
	'MCHAT_BBCODES_DISALLOWED_EXPLAIN'				=> 'Hier kunt u de bbcodes invoeren die <strong>niet</strong> mogen gebruikt worden in een bericht.<br>Splits bbcodes met een verticale lijn, als voorbeeld:<br>b|i|u|code|list|list=|flash|quote en/of een %1$saangepaste bbcode tag naam%2$s',
	'MCHAT_STATIC_MESSAGE'							=> 'Statische melding',
	'MCHAT_STATIC_MESSAGE_EXPLAIN'					=> 'Hier kunt u een statisch bericht definiëren om aan gebruikers van de chat weer te geven. HTML code is toegestaan. Stel in op leeg om de weergave uit te schakelen.<br>Dit bericht kan worden vertaald: bewerk de MCHAT_STATIC_MESSAGE taal sleutel in /ext/dmzx/mchat/language/XX/mchat.php.',
	'MCHAT_TIMEOUT'									=> 'Sessie time-out',
	'MCHAT_TIMEOUT_EXPLAIN'							=> 'Stel het aantal seconden in totdat een sessie in de chat eindigt.<br>Stel 0 in voor geen time-out. Pas op, de sessie van een gebruiker die mChat leest, zal nooit verlopen!<br><em>U bent beperkt tot de %1$sforum configuratie instelling voor sessies%2$s die momenteel is ingesteld %3$d seconden</em>',
	'MCHAT_OVERRIDE_SMILIE_LIMIT'					=> 'Smiley limiet overschrijven',
	'MCHAT_OVERRIDE_SMILIE_LIMIT_EXPLAIN'			=> 'Stel in op Ja om de smiley limiet instelling voor forums te overschrijven voor chat berichten',
	'MCHAT_OVERRIDE_MIN_POST_CHARS'					=> 'Overschrijf de minimale tekens limiet',
	'MCHAT_OVERRIDE_MIN_POST_CHARS_EXPLAIN'			=> 'Stel Ja in om de instelling voor het minimum aantal tekens voor chat berichten te overschrijven',
	'MCHAT_LOG_ENABLED'								=> 'Inzendingen toevoegen aan het beheerders logboek',
	'MCHAT_LOG_ENABLED_EXPLAIN'						=> 'Dit is van invloed op het bewerken, verwijderen, zuiveren en opruimen van berichten.',

	'MCHAT_POSTS_AUTH_CHECK'						=> 'Vereist gebruikers permissies',
	'MCHAT_POSTS_AUTH_CHECK_EXPLAIN'				=> 'Indien ingesteld op ja, zullen gebruikers die geen gebruik van mChat kunnen maken, geen bericht/login & notificatie berichten genereren.',

	'MCHAT_WHOIS_REFRESH'							=> 'Wie is aan het chatten met vernieuwing interval',
	'MCHAT_WHOIS_REFRESH_EXPLAIN'					=> 'Het aantal seconden voordat iemand aan het chatten is, wordt vernieuwd.<br><em>Je bent gelimiteerd van 10 tot 300 seconden. Standaard is 60.</em>',
	'MCHAT_SOUND'									=> 'Speel geluiden af voor nieuwe, bewerkte en verwijderde berichten',
	'MCHAT_PURGE'									=> 'Verwijder nu alle berichten',
	'MCHAT_PURGE_CONFIRM'							=> 'Bevestig het verwijderen van alle berichten',
	'MCHAT_PURGED'									=> 'Alle mChat berichten zijn succesvol verwijderd',

	// '%1$s' contains 'Retain posts' and 'Delete posts' respectively
	'MCHAT_RETAIN_MESSAGES'							=> '%1$s en behoud mChat berichten',
	'MCHAT_DELETE_MESSAGES'							=> '%1$s en verwijder mChat berichten',

	// Error reporting
	'TOO_LONG_MCHAT_BBCODE_DISALLOWED'				=> 'De niet toegestane bbcodes waarde is te lang.',
	'TOO_SMALL_MCHAT_CUSTOM_HEIGHT'					=> 'De hoogte van de pagina van de mChat pagina is te klein.',
	'TOO_LARGE_MCHAT_CUSTOM_HEIGHT'					=> 'De hoogte van de mChat pagina is te hoog.',
	'TOO_LONG_MCHAT_DATE'							=> 'Het datum formaat dat u hebt ingevoerd, is te lang.',
	'TOO_SHORT_MCHAT_DATE'							=> 'Het datum formaat dat u hebt ingevoerd, is te kort.',
	'TOO_LARGE_MCHAT_FLOOD_TIME'					=> 'De waarde van de flood tijd is te groot.',
	'TOO_SMALL_MCHAT_INDEX_HEIGHT'					=> 'De hoogte van de index waarde is te klein.',
	'TOO_LARGE_MCHAT_INDEX_HEIGHT'					=> 'De hoogte van de index waarde is te groot.',
	'TOO_LARGE_MCHAT_MAX_INPUT_HEIGHT'				=> 'De max. invoer hoogte waarde is te groot.',
	'TOO_SMALL_MCHAT_MESSAGE_NUM_ARCHIVE'			=> 'Het aantal berichten dat op de archief pagina moet worden weergegeven, is te klein.',
	'TOO_LARGE_MCHAT_MESSAGE_NUM_ARCHIVE'			=> 'Het aantal berichten dat op de archief pagina moet worden weergegeven, is te groot.',
	'TOO_SMALL_MCHAT_REFRESH'						=> 'De vernieuwing waarde is te klein.',
	'TOO_LARGE_MCHAT_REFRESH'						=> 'De vernieuwing waarde is te groot.',
	'TOO_SMALL_MCHAT_TIMEOUT'						=> 'De time-out waarde van de gebruiker is te klein.',
	'TOO_LARGE_MCHAT_TIMEOUT'						=> 'De time-out waarde van de gebruiker is te groot.',
	'TOO_SMALL_MCHAT_WHOIS_REFRESH'					=> 'De whois vernieuwing waarde is te klein.',
	'TOO_LARGE_MCHAT_WHOIS_REFRESH'					=> 'De whois vernieuwing waarde is te groot.',

	'MCHAT_30X_REMNANTS'							=> 'De installatie is afgebroken.<br>Er zijn resterende modules van de mChat MOD voor phpBB 3.0.x in de database aanwezig. De mChat extensie werkt niet correct met deze modules aanwezig.<br>U moet de mChat MOD volledig verwijderen voordat u de mChat extensie kunt installeren. In het bijzonder moeten de modules met de volgende ID’s worden verwijderd uit de %1$smodules tabel: %2$s',
]);
