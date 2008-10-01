<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

    $GLOBALS['TBE_MODULES_EXT']['xMOD_db_new_content_el']['addElClasses']['tx_imagemapce_wizicon'] = t3lib_extMgm::extPath($_EXTKEY).'classes/class.tx_imagemapce_wizicon.php';

    require_once(t3lib_extMgm::extPath('imagemap_wizard') . 'classes/controller/class.tx_imagemapwizard_formController.php');

	$typoscript = '
		includeLibs.imagemap_wizard = EXT:imagemap_wizard/classes/class.tx_imagemapwizard_parser.php
		tt_content.imagemap_ce < tt_content.image
		tt_content.imagemap_ce.20.imgMax = 1
		tt_content.imagemap_ce.20.1.imageLinkWrap >
		tt_content.imagemap_ce.20.1.params = usemap="####IMAGEMAP_USEMAP###"
		tt_content.imagemap_ce.20.1.stdWrap.postUserFunc = tx_imagemapwizard_parser->applyImageMap
       tt_content.imagemap_ce.20.1.stdWrap.postUserFunc.map.data = field:imagemap_links
       tt_content.imagemap_ce.20.1.stdWrap.postUserFunc.map.name = field:titleText // field:altText // field:imagecaption // field:header
       tt_content.imagemap_ce.20.1.stdWrap.postUserFunc.map.name.crop = 20
       tt_content.imagemap_ce.20.1.stdWrap.postUserFunc.map.name.case = lower
	';

	t3lib_extMgm::addTypoScript($_EXTKEY,'setup',$typoscript,43);

?>