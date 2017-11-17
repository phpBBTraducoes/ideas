<?php
/**
 *
 * Ideas extension for the phpBB Forum Software package.
 * Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 2.1.6] (https://github.com/phpBBTraducoes)
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
    exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	// ACP module
	'ACP_PHPBB_IDEAS'			=> 'Ideas',
	'ACP_PHPBB_IDEAS_SETTINGS'	=> 'Configurações de Ideas',

	// ACP Logs
	'ACP_PHPBB_IDEAS_SETTINGS_LOG'		=> '<strong>Configurações phpBB Ideas atualizadas</strong>',
	'ACP_PHPBB_IDEAS_FORUM_SETUP_LOG'	=> '<strong>Configuração do fórum phpBB Ideas aplicada</strong>',
));
