<?php

t3lib_div::loadTCA('tt_content');

$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = array(
    0 => 'LLL:EXT:imagemap_ce/locallang.xml:imagemap.title',
    1 => 'imagemap_ce',
    2 => 'i/tt_content_image.gif',
);

$tempColumns = array (
	'imagemap_links' => array(
		'label' => 'LLL:EXT:imagemap_ce/locallang.xml:tt_content.imagemap_links',
		'config' => array (
			'type' => 'user',
			'userFunc' => 'tx_imagemapwizard_formController->renderForm',
            'wizards' => array(
                'imagemap' => array(
                    'type' => 'popup',
                    'script' => 'EXT:imagemap_wizard/wizard.php',
                    'title' => 'ImageMap',
                    'JSopenParams' => 'height=700,width=800,status=0,menubar=0,scrollbars=1',
                    'icon' => 'link_popup.gif',
                ),
            ),
            'softref'=>'tx_imagemapwizard',
        ),
	),
);
t3lib_extMgm::addTCAcolumns("tt_content",$tempColumns,1);

$GLOBALS['TCA']['tt_content']['types']['imagemap_ce'] = array(
    'showitem' => 'CType;;4;button,hidden,1-1-1, header;;3;;2-2-2, linkToTop;;;;3-3-3,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.media, image;;;;4-4-4,imagemap_links, imageorient;;2,--palette--;LLL:EXT:cms/locallang_ttc.php:ALT.imgDimensions;13,;;;;5-5-5,imagecaption;;5,altText;;;;6-6-6,titleText,longdescURL,;;;;7-7-7,--palette--;LLL:EXT:cms/locallang_ttc.php:ALT.imgOptions;11, --div--;LLL:EXT:cms/locallang_tca.xml:pages.tabs.access,starttime, endtime',
);


if (TYPO3_MODE=='BE')    {
    $GLOBALS['TBE_MODULES_EXT']['xMOD_db_new_content_el']['addElClasses']['tx_imagemapce_wizicon'] = t3lib_extMgm::extPath($_EXTKEY).'classes/class.tx_imagemapce_wizicon.php';
}


?>