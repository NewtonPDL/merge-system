<?php
/**
 * MyBB 1.8 Pacote de Língua Brasileira
 * Direitos Autorais 2014 MyBB Group, Todos os Direitos Reservados
 * Traduzido por dthiago ArnoldLayne-xXx 
 * From : http://bf4brasil.com.br/
 * Website: http://www.mybb.com
 * License: http://www.mybb.com/download/merge-system/license/
 */

$l['next'] = "Próximo";
$l['version'] = "Versão";
$l['none'] = "Nenhum";
$l['please_wait'] = "Aguarde...";
$l['welcome'] = "Bem vindo";
$l['pause'] = "Pause";
$l['error'] = "Erro";
$l['warning'] = "Advertência";
$l['completed'] = "Concluído";
$l['dependencies'] = "Dependências";
$l['resume'] = "Resumir";
$l['run'] = "Operar";
$l['cleanup'] = "Limpar";
$l['yes'] = "Sim";
$l['no'] = "Não";
$l['download'] = "Baixar";
$l['redirecting'] = "Redirecionando...";
$l['dont_wait'] = "Clique para continuar,se você não deseja esperar.";
$l['back'] = "Voltar";
$l['found_error'] = "Erro Encontrado";
$l['loading_data'] = "Carregando arquivo da base de dados...";
$l['done'] = "Terminado";

// Modules, english names are hardcoded. Uncomment this for your language
// Descriptions are added as "module_{key}_desc, however the current ones doesn't have a description
// Singular versions are added as "module_{key}_singular
/*
$l['module_usergroups'] = 'Grupo de Usuários';
$l['module_usergroups_singular'] = 'Grupo de Usuário';
$l['module_users'] = 'Usuários';
$l['module_users_singular'] = 'Usário';
$l['module_categories'] = 'Categorias';
$l['module_forums'] = 'Forums';
$l['module_forums_singular'] = 'Forum';
$l['module_forumperms'] = 'Permissões de Fórum';
$l['module_forumperms_singular'] = 'Permissão do Fórum';
// Yes, this is used twice as the key used for automatic detection is different sometimes. Will be fixed in a later release
$l['module_forum_permissions'] = 'Permissões de Fórum';
$l['module_forum_permissions_singular'] = 'Permissão do Fórum';
$l['module_moderators'] = 'Moderadores';
$l['module_moderators_singular'] = 'Moderador';
$l['module_threads'] = 'Tópicos';
$l['module_threads_singular'] = 'Tópicos';
$l['module_posts'] = 'Mensagens';
$l['module_posts_singular'] = 'Mensagem';
$l['module_attachments'] = 'Anexos';
$l['module_attachments_singular'] = 'Anexo';
$l['module_polls'] = 'Enquetes';
$l['module_polls_singular'] = 'Enquete';
// Yes, this is used twice as the key used for automatic detection is different sometimes. Will be fixed in a later release
$l['module_poll_votes'] = 'Enquetes';
$l['module_poll_votes_singular'] = 'Enquete';
$l['module_pollvotes'] = 'Votos na Enquete';
$l['module_pollvotes_singular'] = 'Voto na Enquete';
$l['module_privatemessages'] = 'Mensagens Privadas';
$l['module_privatemessages_singular'] = 'Mensagem Privada';
// Yes, this is used twice as the key used for automatic detection is different sometimes. Will be fixed in a later release
$l['module_private_messages'] = 'Mensagens Privadas';
$l['module_private_messages_singular'] = 'Mensagem Privada';
$l['module_events'] = 'Eventos';
$l['module_events_singular'] = 'Evento';
$l['module_icons'] = 'ícone';
$l['module_icons_singular'] = 'Ícones';
$l['module_smilies'] = 'Carinhas';
$l['module_smilies_singular'] = 'Carinha';
$l['module_settings'] = 'Configurações';
$l['module_settings_singular'] = 'Configuração';
$l['module_attachtypes'] = 'Tipos de Anexos';
$l['module_attachtypes_singular'] = 'Tipo de Anexo';
*/
$l['module_categories_singular'] = 'Categoria';

$l['creating_fields'] = "Criando  campos de rastreamento durante o processo de importação (Pode demorar um tempo)...";
$l['creating_table'] = "Criando {1} tabela.";
$l['creating_columns'] = "Adicionado {1} colunas {2} à tabela {3}";

$l['indexpage_require'] = "O sistema de importação do MyBB requer o MyBB 1.8 para operar.";

$l['welcomepage_description'] = "Bem vindo ao sistema de importação MyBB MErge Systema. O MyBB Merge system foi desenhado para converter sistema ao nosso MyBB 1.8. Adicionalmente você pode <i>importar</i> múltiplos fóruns ao MyBB.<br /><br />Você pode achar documentação completa em nosso site: ";
$l['welcomepage_mergesystem'] = "Sistema de Importação";
$l['welcomepage_anonymousstat'] = "Enviar dados anônimos sobre a importação ao MyBB Group";
$l['welcomepage_informations'] = "Quais informações são enviadas?";
$l['welcomepage_closeboard'] = "Feche o fórum durante a importação";
$l['welcomepage_note'] = "O sistema de importação <u><strong>NÃO</strong></u> é usado para atualização ou conectar fóruns do MyBB. Além disso, certifique-se de todas as modificações ou plugins que podem interferir com a conversão estão<strong>DESATIVADOS</strong> em ambos os fóruns (seu fórum antigo e o seu novo fórum), antes de operar nosso sistema de conversão Merge System. É <strong>extremamente</strong> recomendado criar um cópia de segurança de ambos os fóruns..";
$l['welcomepage_pleasenote'] = "Observe";

$l['requirementspage_check'] = "Checar requerimentos";
$l['requirementspage_req'] = "Requerimentos";
$l['requirementspage_uptodate'] = "Atualizado";
$l['requirementspage_outofdatedesc'] = "O seu sistema de importação está desatualizado! O seu  MyBB Merge System talvez não funcione corretamente até atualizar. Última versão: 
";
$l['requirementspage_outofdate'] = "Desatualizida";
$l['requirementspage_mergeoutofdate'] = "Esta versão está desatualizada";
$l['requirementspage_unabletocheck'] = "Impossível verificar";
$l['requirementspage_unabletocheckdesc'] = "Impossível verificar a versão nos servidores mybb.com";
$l['requirementspage_chmoduploads'] = "O diretório de anexos (/uploads/) não está gravável. Por favor, ajuste! ";
$l['requirementspage_chmoduploads2'] = " permissões para permitir que ele seja escrito para.";
$l['requirementspage_chmod'] = "O diretório de anexos (/uploads/) não está gravável. Por favor, ajuste! ";
$l['requirementspage_notwritable'] = "Sem permissão para escrita";
$l['requirementspage_attnotwritable'] = "Diretório de anexos não gravável";
$l['requirementspage_attwritable'] = "Gravável";
$l['requirementspage_attwritabledesc'] = "Diretório de Anexos gravável";
$l['requirementspage_reqfailed'] = "A verificação dos requerimentos para importação falhou:";
$l['requirementspage_mergeversion'] = "Versão do sistema de importação:";
$l['requirementspage_attwritabledesc2'] = "Diretórios de anexos graváveis:";
$l['requirementspage_checkagain'] = "Quando estiver pronto, clique em \"Verificar novamente\" para uma nova checagem.";
$l['requirementspage_congrats'] = "Parabéns você passou por todos os requerimentos! Clique \"Próximo\" para seguir adiante.
";

$l['boardspage_welcome'] = "Thank you for choosing MyBB. This wizard will guide you through the process of converting from your existing community to MyBB.";
$l['boardspage_boardselection'] = "Board Selection";
$l['boardspage_boardselectiondesc'] = "Please select the board you wish to convert from.";

$l['module_selection'] = "Module Selection";
$l['module_selection_select'] = "Please select a module to run.";
$l['module_selection_import'] = "Import {1} ";
$l['module_selection_cleanup_desc'] = "After you have run the modules you want, continue to the next step in the conversion process.  The cleanup step will remove any temporary data created during the conversion.";

$l['database_configuration'] = "Database Configuration";
$l['database_settings'] = "Database Settings";
$l['database_engine'] = "Database Engine";
$l['database_path'] = "Database Path";
$l['database_host'] = "Database Server Hostname";
$l['database_user'] = "Database Username";
$l['database_pw'] = "Database Password";
$l['database_name'] = "Database Name";
$l['database_table_settings'] = "Table Settings";
$l['database_table_prefix'] = "Table Prefix";
$l['database_table_encoding'] = "Table Encoding";
$l['database_utf8_thead'] = "Encode to UTF-8";
$l['database_utf8_desc'] = "Automatically convert messages to UTF8?:<br /><small>Turn this off if the conversion creates<br />weird characters in your forum's messages.</small>";
$l['database_click_next'] = "Once you have checked these details are correct, click next to continue.";
$l['database_exit'] = "Exit Configuration";
$l['database_check_success'] = "Checking database details... <span style=\"color: green\">success.</span>";
$l['database_success'] = "Successfully configured and connected to the database.";
$l['database_details'] = "Please enter the database details for your installation of {1} you want to merge from.";

$l['wbb_installationnumber'] = "Installationnumber";
$l['wbb_installationnumber_desc'] = "Which was the installationnumber you selected when installing?";

$l['per_screen_config'] = "Options Configuration";
$l['per_screen'] = "Please select how many {1} to import at a time";
$l['per_screen_label'] = "{1} to import at a time";
$l['per_screen_autorefresh'] = "Do you want to automatically continue to the next step until it's finished?";

$l['stats_in_progress'] = "{1} {2} are importing right now. There are {3} {2} left to import and {4} pages left.";
$l['stats'] = "There are {1} {2} that will be imported.";

$l['progress'] = "Inserting {1} #{2}";
$l['progress_merging_user'] = "Merging user #{1} with user #{2}";
$l['progress_settings'] = "Inserting {1} {2} from your other {3} database";
$l['progress_none_left'] = "There are no {1} to import. Please press next to continue.";
$l['progress_none_left_settings'] = "There are no {1} to update. Please press next to continue.";

$l['import_successfully'] = "Successfully imported {1}.";

$l['module_post_rebuilding'] = "Rebuilding Counters";
$l['module_post_rebuild_counters'] = "<br />\nRebuilding thread, forum, and statistic counters...(This may take a while)<br /><br />\n
<br />\nRebuilding thread counters... ";
$l['module_post_thread_counter'] = "Rebuilding counters for thread #{1}";
$l['module_post_rebuilding_forum'] = "Rebuilding forum counters...";
$l['module_post_forum_counter'] = "Rebuilding counters for forum #{1}";
$l['module_post_rebuilding_user'] = "Rebuilding user counters...";
$l['module_post_user_counter'] = "Rebuilding counters for user #{1}";

$l['module_settings_updating'] = "Updating settings {1}";

$l['module_attachment_link'] = "Please type in the link to your {1} forum attachment directory";
$l['module_attachment_label'] = "Link (URL) to your forum attachment directory";
$l['module_attachment_error'] = "Error transfering the attachment (ID: {1})";
$l['module_attachment_not_found'] = "Error could not find the attachment (ID: {1})";
$l['module_attachment_thumbnail_error'] = "Error transfering the attachment thumbnail (ID: {1})";
$l['module_attachment_thumbnail_not_found'] = "Error could not find the attachment thumbnail (ID: {1})";

$l['attmodule_notwritable'] = "The uploads directory (uploads/) is not writable. Please adjust the ";
$l['attmodule_chmod'] = "chmod";
$l['attmodule_notwritable2'] = " permissions to allow it to be written to.";
$l['attmodule_ipadress'] = "You may not use \"localhost\" in the URL. Please use your Internet IP Address (Please make sure Port 80 is open on your firewall and router).";
$l['attmodule_ipadress2'] = "You may not use \"127.0.0.1\" in the URL. Please use your Internet IP Address (Please make sure Port 80 is open on your firewall and router).";
$l['attmodule_notread'] = "The attachments could not be read. Please adjust the ";
$l['attmodule_notread2'] = " permissions to allow it to be read from and ensure the URL is correct. If you are still experiencing issues, please try the full system path instead of a URL (ex: /var/www/htdocs/path/to/your/old/forum/uploads/ or C:/path/to/your/old/forum/upload/). Also ensure access isn\'t being blocked by a htaccess file.";

$l['removing_table'] = "Removing {1} table.";
$l['removing_columns'] = "Removing columns {1} from table {2}";

$l['cleanup_header'] = "MyBB Merge System - Final Step: Cleanup";
$l['cleanup_notice'] = "Performing final cleanup and maintenance (This may take a while)...";

$l['finish_completion'] = "Completion";
$l['finish_head'] = '<p>The current conversion session has been finished.  You may now go to your copy of <a href="../">MyBB</a> or your <a href="../{1}/index.php">Admin Control Panel</a>.</p>
	<p>Please remove this directory if you are not planning on converting any other forums.</p>';
$l['finish_whats_next_head'] = "What's next?";
$l['finish_whats_next'] = 'As it\'s impossible to merge all permissions, settings and counters you need to do a few things now to make sure everything works as expected:
		<ul>
			<li>Rebuild the <a href="../{1}/index.php?module=tools-cache">caches</a></li>
			<li>Run all <a href="../{1}/index.php?module=tools-recount_rebuild">Recount & Rebuild</a> tools</li>
			<li>Check all <a href="../{1}/index.php?module=config">settings</a></li>
			<li>Check the <a href="../{1}/index.php?module=forum">forum</a> and  <a href="../{1}/index.php?module=user-groups">group</a> permissions</li>
		</ul>';
$l['finish_report1'] = "The following will allow you to download a detailed report generated by the converter in several styles.";
$l['finish_report2'] = "Report Generation";
$l['finish_report_type'] = "Please select the report style you wish to generate.";
$l['finish_report_type_txt'] = "Plain Text File";
$l['finish_report_type_html'] = "HTML (Browser Viewable) File";

$l['warning_innodb'] = "The table \"{1}\" is currently in InnoDB format. We strongly recommend converting these tables to MyISAM otherwise you may experience major slow-downs while running the merge system.";

$l['error_invalid_board'] = "The board module you have selected does not exist.";
$l['error_js_off'] = 'It appears that you have javascript turned off. The MyBB Merge System requires that javascript be turned on in order to operate properly. Once you have turned javascript on, please refresh this page.';
$l['error_list'] = "The MyBB Merge System encountered the following problems";
$l['error_click_next'] = "Once you have resolved the mentioned issues, you may continue by pressing \"Next\" below.";

$l['error_database_relative'] = "You may not use relative URLs for SQLite databases. Please use a file system path (ex: /home/user/database.db) for your SQLite database.";
$l['error_database_invalid_engine'] = "You have selected an invalid database engine. Please make your selection from the list below.";
$l['error_database_cant_connect'] = "Could not connect to the database server at '{1}' with the supplied username and password. Are you sure the hostname and user details are correct?";
$l['error_database_wrong_table'] = "The {1} database could not be found in '{2}'.  Please ensure {1} exists at this database and with this table prefix.";
$l['error_database_list'] = "There seems to be one or more errors with the database configuration information that you supplied";
$l['error_database_continue'] = "Once the above are corrected, continue with the conversion.";

$l['loginconvert_title'] = "MyBB Merge System - Setup Password Conversion";
$l['loginconvert_message'] = "			<div class=\"error\">\n
				<h3>Error</h3>
				The MyBB Merge System cannot continue until you upload loginconvert.php (found in this directory via a file transfer application) to your MyBB Forums' inc/plugins folder.\n
		</div>

		<p>More Information can be found <a href=\"http://docs.mybb.com/1.8/merge/running/#loginconvert.php-plugin\" target=\"_blank\">here</a>.</p>
		<p>Once you have uploaded the file, click next to continue.</p>";


$l['report_txt'] = 'MyBB Merge System - Merge Report
--------------------------------------------------------
Welcome to the MyBB Merge System Generated Report. This
report shows a small overview of this merge session.

General
-------
	Board merged:    {1}
	Import began:    {2}
	Import finished: {3}

Database Query Statistics
-------------------------
	Queries on MyBB database: {4}
	Queries on old database:  {5}
	Total query time:         {6}

Modules
-------
The following modules from this converter were completed:
{7}

Import Statistics
-----------------
The MyBB import system imported the following from your copy of {8}:
{9}

Errors
------
The following errors were logged during the process of the Merge System:
{10}

Problems?
---------
The "mybb_debuglogs" table located in your database contains
debug information about this merge. If you find problems
please file a support inquery at http://community.mybb.com/.

--------------------------------------------------------
Generated: {11}';

$l['report_html'] = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>MyBB Merge System &gt; Generated Report</title>
	<style type="text/css">
		body {
			font-family: Verdana, Arial, sans-serif;
			font-size: 12px;
			background: #efefef;
			color: #000000;
			margin: 0;
		}

		#container {
			margin: auto auto;
			width: 780px;
			background: #fff;
			border: 1px solid #ccc;
			padding: 20px;
		}

		h1 {
			font-size: 25px;
			margin: 0;
			background: #ddd;
			padding: 10px;
		}

		h2 {
			font-size: 18px;
			margin: 0;
			padding: 10px;
			background: #efefef;
		}

		h3 {
			font-size: 14px;
			clear: left;
			border-bottom: 1px dotted #aaa;
			padding-bottom: 4px;
		}

		ul, li {
			padding: 0;
		}

		#general p, #modules p, #import p, ul, li, dl {
			margin-left: 30px;
		}

		dl dt {
			float: left;
			width: 300px;
			padding-bottom: 10px;
			font-weight: bold;
		}

		dl dd {
			padding-bottom: 10px;
		}

		#footer {
			border-top: 1px dotted #aaa;
			padding-top: 10px;
			font-style: italic;
		}

		.float_right {
			float: right;
		}
	</style>
</head>
<body>
<div id="container">
	<h1>MyBB Merge System</h1>
	<h2>Merge Report</h2>
	<p>Welcome to the MyBB Merge System Generated Report. This report shows a small overview of this merge session.</p>
	<div id="general">
		<h3>General Statistics</h3>
		<p>You merged {1} to your forum.</p>
		<dl>
			<dt>Import began</dt>
			<dd>{2}</dd>

			<dt>Import finished</dt>
			<dd>{3}</dd>
		</dl>
	</div>
	<div id="database">
		<h3>Database Query Statistics</h3>
		<dl>
			<dt>Queries on the MyBB database</dt>
			<dd>{4}</dd>

			<dt>Queries on the {8} database</dt>
			<dd>{5}</dd>

			<dt>Total query time</dt>
			<dd>{6}</dd>
		</dl>
	</div>
	<div id="modules">
		<h3>Modules</h3>
		<p>The following modules from this converter were completed:</p>
		<ul>
		{7}
		</ul>
	</div>
	<div id="import">
		<h3>Import Statistics</h3>
		<p>The MyBB import system imported the following from your copy of {8}:</p>
		<dl>
		{9}
		</dl>
	</div>
	<div id="errors">
		<h3>Errors</h3>
		<p>The following errors were logged during the process of the Merge System:</p>
		<ul>
		{10}
		</ul>
	</div>
	<div id="problems">
		<h3>Problems?</h3>
		<p>The "mybb_debuglogs" table located in your database contains debug information about this merge. If you find problems please file a support inquiry at the <a href="http://community.mybb.com/">MyBB Community Forums</a>.</p>
	</div>
	<div id="footer">
		<div class="float_right">MyBB &copy; 2002-{12} MyBB Group</div>
		<div>Generated {11}</div>
	</div>
</div>
</body>
</html>';
