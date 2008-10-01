<?php

########################################################################
# Extension Manager/Repository config file for ext: "aoe_pagetree"
#
# Auto generated 29-05-2008 16:18
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Imagemap CE',
	'description' => '',
	'category' => 'be',
	'shy' => 0,
	'version' => '0.0.1',
	'dependencies' => 'imagemap_wizard,csc_styles_content',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'alpha',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => 'tt_content',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Tolleiv Nietsch',
	'author_email' => 'info@tolleiv.de',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
            'imagemap_wizard'=>'0.0.1',
			'csc_styles_content'=>'0.0.0'
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
	'_md5_values_when_last_written' => 'a:20:{s:10:"README.txt";s:4:"ee2d";s:32:"_class.user_hmt_pageNotFound.php";s:4:"e6f1";s:22:"_ext_conf_template.txt";s:4:"3ae1";s:21:"ext_conf_template.txt";s:4:"8d2c";s:12:"ext_icon.gif";s:4:"f19a";s:17:"ext_localconf.php";s:4:"1563";s:14:"ext_tables.php";s:4:"717f";s:14:"ext_tables.sql";s:4:"28e5";s:13:"locallang.xml";s:4:"020f";s:16:"locallang_db.xml";s:4:"61f2";s:14:"doc/manual.sxw";s:4:"9877";s:19:"doc/wizard_form.dat";s:4:"7126";s:20:"doc/wizard_form.html";s:4:"d40b";s:18:"res/joinbottom.gif";s:4:"6bc5";s:12:"res/line.gif";s:4:"7f38";s:19:"res/list-spacer.gif";s:4:"3fff";s:38:"classes/class.tx_aoepagetree_color.php";s:4:"e715";s:37:"classes/class.tx_aoepagetree_tree.php";s:4:"9f21";s:39:"classes/class.ux_SC_alt_db_navframe.php";s:4:"384a";s:31:"tests/class.colors_testcase.php";s:4:"daed";}',
);

?>
