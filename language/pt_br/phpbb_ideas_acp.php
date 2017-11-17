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
	'ACP_IDEAS_FORUM_ID'			=> 'Fórum Ideas',
	'ACP_IDEAS_FORUM_ID_EXPLAIN'	=> 'Selecione o fórum em que os tópicos das Idéias serão postados. Uma vez feito, aplique a instalação do Fórum Ideas, clicando no botão apropriado abaixo.',
	'ACP_IDEAS_FORUM_SETUP'			=> 'Configure o fórum Ideas',
	'ACP_IDEAS_FORUM_SETUP_CONFIRM'	=> 'Tem certeza de que deseja configurar o fórum Ideas?',
	'ACP_IDEAS_FORUM_SETUP_EXPLAIN'	=> 'Defina o fórum Ideias. Os usuários não poderão iniciar novos tópicos. Além disso, a auto-limpeza será desativada. Nota: você deve configurar primeiro o fórum Ideas.',
	'ACP_IDEAS_FORUM_SETUP_UPDATED'	=> 'Configurações do fórum ideas atualizadas com sucesso.',
	'ACP_IDEAS_NO_FORUM'			=> 'Nenhum fórum selecionado',
	'ACP_IDEAS_POSTER_ID'			=> 'Ideas usuário bot',
	'ACP_IDEAS_POSTER_ID_EXPLAIN'	=> 'Digite um nome de usuário para o Idea-bot que publicará tópicos de Idéias no fórum.',
	'ACP_IDEAS_SETTINGS_UPDATED'	=> 'Configurações de ideias atualizadas.',
	'ACP_IDEAS_UTILITIES'			=> 'Utilitários de ideias',
	'ACP_IDEAS_BASE_URL'			=> 'URL de base do ideias (opcional)',
	'ACP_IDEAS_BASE_URL_EXPLAIN'	=> 'Digite o URL completo para o Ideas, por exemplo: <samp>http://www.phpbb.com/ideas</samp>. Isso só deve ser definido se seu fórum tiver configurações de roteamento personalizadas que impeçam que o Ideas funcionem conforme o esperado.',
	'ACP_PHPBB_IDEAS_EXPLAIN'		=> 'Aqui você pode configurar a extensão das Idéias. phpBB Ideas é um centro de idéias para phpBB. Permite aos usuários sugerir e votar ideias que ajudem a melhorar e aprimorar o phpBB',
));
