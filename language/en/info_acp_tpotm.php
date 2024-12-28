<?php
/**
 *
 * Top Poster of the Month: an extension for the phpBB forum software package.
 *
 * @copyright (c) 2005, 2019, 3Di <https://www.phpbbstudio.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
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

$lang = array_merge($lang, [
	'ACL_CAT_3DI'					=>	'3Di',

	'ACP_TPOTM_TITLE'				=> 'Top Poster of the Month',
	'ACP_TPOTM_SETTINGS'			=> 'Settings',

	'ACP_TPOTM_SETTING_SAVED'		=> 'Top Poster of the Month settings saved.',

	// Error log
	'TPOTM_LOG_CONFIG_SAVED'		=> '<strong>TPotM general configuration saved.</strong>',
	'TPOTM_LOG_BADGE_IMG_INVALID'	=> '<strong>TPotM - <em>Badge image filename(s)</em> wrong or totally missing.</strong>',
]);
