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
	'MCHAT_ADD'						=> 'Verzend',
	'MCHAT_ARCHIVE'					=> 'Archief',
	'MCHAT_ARCHIVE_PAGE'			=> 'mChat Archief',
	'MCHAT_CUSTOM_PAGE'				=> 'mChat',
	'MCHAT_BBCODES'					=> 'BBCodes',
	'MCHAT_CUSTOM_BBCODES'			=> 'Overige BBCodes',
	'MCHAT_DELCONFIRM'				=> 'Ben je zeker dat je dit bericht wenst te verwijderen?',
	'MCHAT_EDIT'					=> 'Bewerk',
	'MCHAT_EDITINFO'				=> 'Bewerk het onderstaande bericht.',
	'MCHAT_NEW_CHAT'				=> 'Nieuw chat bericht!',
	'MCHAT_SEND_PM'					=> 'Verzend privé bericht',
	'MCHAT_LIKE'					=> 'Vind dit bericht leuk',
	'MCHAT_LIKES'					=> 'Vinden dit bericht leuk',
	'MCHAT_FLOOD'					=> 'Je kan niet zo snel een nieuw bericht posten na je vorige bericht.',
	'MCHAT_FOE'						=> 'Dit bericht komt van <strong>%1$s</strong>. Deze gebruiker staat in je negeer lijst.',
	'MCHAT_RULES'					=> 'Regels',
	'MCHAT_WHOIS_USER'				=> 'IP whois voor %1$s',
	'MCHAT_MESS_LONG'				=> 'Je bericht is te lang. Gelieve het te limiteren tot %1$d karakters.',
	'MCHAT_NO_CUSTOM_PAGE'			=> 'De mChat aangepaste pagina is niet geactiveerd op dit moment.',
	'MCHAT_NO_RULES'				=> 'De mChat regels pagina is niet geactiveerd op dit moment.',
	'MCHAT_NOACCESS_ARCHIVE'		=> 'Je hebt geen permissie om het archief te bekijken.',
	'MCHAT_NOJAVASCRIPT'			=> 'Gelieve JavaScript te activeren om mChat te gebruiken.',
	'MCHAT_NOMESSAGE'				=> 'Geen berichten',
	'MCHAT_NOMESSAGEINPUT'			=> 'Je hebt geen bericht ingevuld',
	'MCHAT_MESSAGE_DELETED'			=> 'Dit bericht werd verwijderd.',
	'MCHAT_OK'						=> 'OK',
	'MCHAT_PAUSE'					=> 'Gepauzeerd',
	'MCHAT_PERMISSIONS'				=> 'Verander gebruikers permissie',
	'MCHAT_REFRESHING'				=> 'Vernieuwen…',	'MCHAT_REFRESHING'				=> 'Vernieuwen…',
	'MCHAT_RESPOND'					=> 'Reageren op gebruiker',
	'MCHAT_SMILES'					=> 'Smileys',
	'MCHAT_TOTALMESSAGES'			=> 'Totaal aantal berichten: <strong>%1$d</strong>',
	'MCHAT_USESOUND'				=> 'Speel geluid',
	'MCHAT_SOUND_ON'				=> 'Geluid staan aan',
	'MCHAT_SOUND_OFF'				=> 'Geluid staat uit',
	'MCHAT_ENTER'					=> 'Gebruik Ctrl/Cmd + Enter voor de alternatieve actie',
	'MCHAT_ENTER_SUBMIT'			=> 'Enter verzendt het bericht',
	'MCHAT_ENTER_LINEBREAK'			=> 'Enter voegt een nieuwe regel toe',
	'MCHAT_COLLAPSE_TITLE'			=> 'Schakel zichtbaarheid van mChat in',
	'MCHAT_WHO_IS_REFRESH_EXPLAIN'	=> 'Vernieuwd iedere <strong>%1$d</strong> seconden',
	'MCHAT_MINUTES_AGO'				=> [
		0 => 'nu',
		1 => '%1$d minuut geleden',
		2 => '%1$d minuten geleden',
	],

	// These messages are formatted with JavaScript, hence {} and no %d
	'MCHAT_CHARACTER_COUNT'			=> '<strong>{current}</strong> karakters',
	'MCHAT_CHARACTER_COUNT_LIMIT'	=> '<strong>{current}</strong> van de {max} karakters',
	'MCHAT_MENTION'					=> ' @{username} ',
]);
