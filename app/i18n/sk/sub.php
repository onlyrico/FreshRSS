<?php

return array(
	'api' => array(
		'documentation' => 'Skopírujte tento odkaz a použite ho v inom programe.',
		'title' => 'API',
	),
	'bookmarklet' => array(
		'documentation' => 'Presunte toto tlačidlo do vašich záložiek, alebo kliknite pravým a zvoľte "Uložiť odkaz do záložiek". Potom kliknite na tlačidlo "Odoberať" na ktorejkoľvek stránke, ktorú chcete odoberať.',
		'label' => 'Odoberať',
		'title' => 'Záložka',
	),
	'category' => array(
		'_' => 'Kategória',
		'add' => 'Pridať kategória',
		'archiving' => 'Archiving',	// TODO - Translation
		'empty' => 'Prázdna kategória',
		'information' => 'Informácia',
		'position' => 'Display position',	// TODO - Translation
		'position_help' => 'To control category sort order',	// TODO - Translation
		'title' => 'Názov',
	),
	'feed' => array(
		'add' => 'Pridať RSS kanál',
		'advanced' => 'Pokročilé',
		'archiving' => 'Archivovanie',
		'auth' => array(
			'configuration' => 'Prihlásenie',
			'help' => 'Povoliť prístup do kanálov chránených cez HTTP.',
			'http' => 'Prihlásenie cez HTTP',
			'password' => 'Heslo pre HTTP',
			'username' => 'Používateľské meno pre HTTP',
		),
		'clear_cache' => 'Vždy vymazať vyrovnávaciu pamäť',
		'content_action' => array(
			'_' => 'Content action when fetching the article content',	// TODO - Translation
			'append' => 'Add after existing content',	// TODO - Translation
			'prepend' => 'Add before existing content',	// TODO - Translation
			'replace' => 'Replace existing content',	// TODO - Translation
		),
		'css_cookie' => 'Use Cookies when fetching the article content',	// TODO - Translation
		'css_cookie_help' => 'Example: <kbd>foo=bar; gdpr_consent=true; cookie=value</kbd>',	// TODO - Translation
		'css_help' => 'Stiahnuť skrátenú verziu RSS kanála (pozor, vyžaduje viac času!)',
		'css_path' => 'Pôvodný CSS súbor článku z webovej stránky',
		'description' => 'Popis',
		'empty' => 'Tento kanál je prázdny. Overte, prosím, či je ešte spravovaný autorom.',
		'error' => 'Vyskytol sa problém s týmto kanálom. Overte, prosím, či kanál stále existuje, potom ho obnovte.',
		'filteractions' => array(
			'_' => 'Filtrovať akcie',
			'help' => 'Napíšte jeden výraz hľadania na riadok.',
		),
		'information' => 'Informácia',
		'keep_min' => 'Minimálny počet článkov na uchovanie',
		'maintenance' => array(
			'clear_cache' => 'Clear cache',	// TODO - Translation
			'clear_cache_help' => 'Clear the cache for this feed.',	// TODO - Translation
			'reload_articles' => 'Reload articles',	// TODO - Translation
			'reload_articles_help' => 'Reload articles and fetch complete content if a selector is defined.',	// TODO - Translation
			'title' => 'Maintenance',	// TODO - Translation
		),
		'moved_category_deleted' => 'Keď vymažete kategóriu, jej kanály sa automaticky zaradia pod <em>%s</em>.',
		'mute' => 'stíšiť',
		'no_selected' => 'Nevybrali ste kanál.',
		'number_entries' => 'Počet článkov: %d',
		'priority' => array(
			'_' => 'Viditeľnosť',
			'archived' => 'Nezobrazovať (archivované)',
			'main_stream' => 'Zobraziť v prehľade kanálov',
			'normal' => 'Zobraziť vo svojej kategórii',
		),
		'proxy' => 'Set a proxy for fetching this feed',	// TODO - Translation
		'proxy_help' => 'Select a protocol (e.g: SOCKS5) and enter the proxy address (e.g: <kbd>127.0.0.1:1080</kbd>)',	// TODO - Translation
		'selector_preview' => array(
			'show_raw' => 'Show source code',	// TODO - Translation
			'show_rendered' => 'Show content',	// TODO - Translation
		),
		'show' => array(
			'all' => 'Zobraziť všetky kanály',
			'error' => 'Zobraziť iba kanály s chybou',
		),
		'showing' => array(
			'error' => 'Zobraziť iba kanály s chybou',
		),
		'ssl_verify' => 'Overiť bezpečnosť SSL',
		'stats' => 'Štatistiky',
		'think_to_add' => 'Mali by ste pridať kanály.',
		'timeout' => 'Doba platnosti dá v sekundách',
		'title' => 'Nadpis',
		'title_add' => 'Pridať kanál RSS',
		'ttl' => 'Automaticky neaktualizovať častejšie ako',
		'url' => 'Odkaz kanála',
		'useragent' => 'Set the user agent for fetching this feed',	// TODO - Translation
		'useragent_help' => 'Example: <kbd>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:86.0)</kbd>',	// TODO - Translation
		'validator' => 'Skontrolovať platnosť kanála',
		'website' => 'Odkaz webovej stránky',
		'websub' => 'Okamžité oznámenia cez WebSub',
	),
	'import_export' => array(
		'export' => 'Exportovať',
		'export_labelled' => 'Exportovať vaše označené články',
		'export_opml' => 'Exportovať zoznam kanálov (OPML)',
		'export_starred' => 'Exportovať vaše obľúbené',
		'feed_list' => 'Zoznam článkov %s',
		'file_to_import' => 'Súbor na import<br />(OPML, JSON alebo ZIP)',
		'file_to_import_no_zip' => 'Súbor na import<br />(OPML alebo JSON)',
		'import' => 'Importovať',
		'starred_list' => 'Zoznam obľúbených článkov',
		'title' => 'Import / export',
	),
	'menu' => array(
		'add' => 'Add a feed or category',	// TODO - Translation
		'import_export' => 'Import / export',
		'label_management' => 'Label management',	// TODO - Translation
		'stats' => array(
			'idle' => 'Neaktívne kanály',
			'main' => 'Hlavné štatistiky',
			'repartition' => 'Rozdelenie článkov',
		),
		'subscription_management' => 'Správa odoberaných kanálov',
		'subscription_tools' => 'Nástroje na odoberanie kanálov',
	),
	'tag' => array(
		'name' => 'Name',	// TODO - Translation
		'new_name' => 'New name',	// TODO - Translation
		'old_name' => 'Old name',	// TODO - Translation
	),
	'title' => array(
		'_' => 'Správa odoberaných kanálov',
		'add' => 'Add a feed or category',	// TODO - Translation
		'add_category' => 'Add a category',	// TODO - Translation
		'add_feed' => 'Add a feed',	// TODO - Translation
		'add_label' => 'Add a label',	// TODO - Translation
		'delete_label' => 'Delete a label',	// TODO - Translation
		'feed_management' => 'Správa RSS kanálov',
		'rename_label' => 'Rename a label',	// TODO - Translation
		'subscription_tools' => 'Nástroje na odoberanie kanálov',
	),
);
