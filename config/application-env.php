<?php

$userConfig = include __DIR__ . '/application.php';

$dockerConfig = [
    'ServerAddress' => 'localhost',
    'BaseURI' => getenv('BASE_PATH'),
    'InstallerPassword' => getenv('INSTALLER_PASSWORD'),
    'SiteTitle' => getenv('SITE_TITLE'),
    'AcceptDonations' => false,
    'ShowCopyright' => false,
    'ThemeName' => array('default'),
    'ResultsPerPage' => 100,
	'MenuItems' => array(
		'MainMenuLabel'		=> array(
			'HomeLabel'			=> array('module' => 'main'),
		),
		'AccountLabel'		=> array(
			'LoginTitle'			=> array('module' => 'account', 'action' => 'login'),
			'MyAccountLabel'	=> array('module' => 'account', 'action' => 'view'),
			'HistoryLabel'		=> array('module' => 'history'),
			'ServiceDeskLabel'	=> array('module' => 'servicedesk'),
			'LogoutTitle'		=> array('module' => 'account', 'action' => 'logout'),
		),
		'InformationLabel'	=> array(
			'ServerInfoLabel'	=> array('module' => 'server', 'action' => 'info'),
			'ServerStatusLabel'	=> array('module' => 'server', 'action' => 'status'),
			'WoeHoursLabel'		=> array('module' => 'woe'),
			'CastlesLabel'		=> array('module' => 'castle'),
			'WhosOnlineLabel'	=> array('module' => 'character', 'action' => 'online'),
			'MapStaticsLabel'=> array('module' => 'character', 'action' => 'mapstats'),
			'RankingInfoLabel'	=> array('module' => 'ranking', 'action' => 'character'),
			'VendingInfoLabel'	=> array('module' => 'vending'),
			'BuyingstoreInfoLabel'	=> array('module' => 'buyingstore'),
		),
		'DatabaseLabel'		=> array(
			'ItemDatabaseLabel'	=> array('module' => 'item'),
			'MobDatabaseLabel'	=> array('module' => 'monster'),
		),
		'Service Desk'	=> array(
			'ServiceDeskLabel'	=> array('module' => 'servicedesk', 'action' => 'staffindex'),
		),
		'Misc. Stuff'	=> array(
			'AccountLabel'		=> array('module' => 'account'),
			'CharacterLabel'	=> array('module' => 'character'),
			'CPLogsLabel'		=> array('module' => 'cplog'),
			'PagesLabel'		=> array('module' => 'pages'),
			'NewsLabel'			=> array('module' => 'news', 'action' => 'manage'),
			'GuildsLabel'		=> array('module' => 'guild'),
			'IPBanListLabel'	=> array('module' => 'ipban'),
			'rALogsLabel'		=> array('module' => 'logdata'),
			'ReInstallLabel'	=> array('module' => 'install', 'action' => 'reinstall'),
			'SendMailLabel'		=> array('module' => 'mail'),
			'WCTitleLabel'		=> array('module' => 'webcommands'),
		)
	),
];

return array_replace($userConfig, $dockerConfig);