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
	'MCHAT_PREFERENCES'				=> 'mChat voorkeuren',
	'MCHAT_NO_SETTINGS'				=> 'U bent niet bevoegd om instellingen aan te passen.',

	'MCHAT_INDEX'					=> 'Toon op de index pagina',
	'MCHAT_SOUND'					=> 'Schakel geluid in',
	'MCHAT_WHOIS_INDEX'				=> 'Toon <em>Wie is aan het chatten</em> onder de chat',
	'MCHAT_STATS_INDEX'				=> 'Toon <em>Wie is aan het chatten</em> in de statistieken sectie',
	'MCHAT_STATS_INDEX_EXPLAIN'		=> 'Toon Wie is aan het chatten onder de <em>Wie is online</em> sectie op de index pagina.',
	'MCHAT_AVATARS'					=> 'Toon avatars',
	'MCHAT_CAPITAL_LETTER'			=> 'Maak van de eerste letter een hoofdletter in je bericht',
	'MCHAT_POSTS'					=> 'Toon nieuwe berichten. (momenteel allemaal uitgeschakeld, kan worden ingeschakeld in de sectie mChat Algemene instellingen in het beheerderspaneel)',
	'MCHAT_DISPLAY_CHARACTER_COUNT'	=> 'Geef het aantal karakters weer bij het typen van een bericht',
	'MCHAT_RELATIVE_TIME'			=> 'Toon relatieve tijd voor nieuwe berichten',
	'MCHAT_RELATIVE_TIME_EXPLAIN'	=> 'Toont “nu”, “1 minuut geleden” en zo verder voor ieder bericht. Stel in op <em>Nee</em> om altijd de volledige datum weer te geven.',
	'MCHAT_MESSAGE_TOP'				=> 'Locatie van nieuwe chat berichten',
	'MCHAT_MESSAGE_TOP_EXPLAIN'		=> 'Nieuwe berichten verschijnen bovenaan of onderaan in de chat.',
	'MCHAT_LOCATION'				=> 'Locatie op de indexpagina',
	'MCHAT_BOTTOM'					=> 'Onderaan',
	'MCHAT_TOP'						=> 'Bovenaan',

	'MCHAT_POSTS_TOPIC'				=> 'Toon nieuwe onderwerpen',
	'MCHAT_POSTS_REPLY'				=> 'Toon nieuwe antwoorden',
	'MCHAT_POSTS_EDIT'				=> 'Toon bewerkte berichten',
	'MCHAT_POSTS_QUOTE'				=> 'Toon geciteerde berichten',
	'MCHAT_POSTS_LOGIN'				=> 'Toon gebruikers aanmeldingen',

	'MCHAT_DATE_FORMAT'				=> 'Datum formaat',
	'MCHAT_DATE_FORMAT_EXPLAIN'		=> 'De gebruikte syntaxis is identiek aan de PHP <a href="http://www.php.net/date">datum()</a> functie.',
	'MCHAT_CUSTOM_DATEFORMAT'		=> 'Aangepast…',
]);
