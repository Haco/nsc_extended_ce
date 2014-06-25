<?php
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Extended CE Config');

	$tempColumns = Array (
		'nsc_extended_ce_readMoreLink' => array(
			'exclude' => 0,
			//'label' => 'LLL:EXT:nsc_tutorialmanager/Resources/Private/Language/locallang_db.xlf:tx_nsctutorialmanager_domain_model_tutorial.final_result_u_r_l',
			'label' => 'Readmore Link',
			'config' => array(
				'type' => 'input',
				'size' => 20,
				'eval' => 'trim',
				'wizards'  => array(
					'_PADDING' => 5,
					'link' 	=> array(
						'type' 		=> 'popup',
						'title'		=> 'Link',
						'icon' 		=> 'link_popup.gif',
						'script'   	=> 'browse_links.php?mode=wizard',
						'params' => array (
							'target' => '_blank',
							'blindLinkOptions' => 'file,mail,spec,folder,upload,media_upload',
						),
						'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1'
					)
				),
			),
		),
		'nsc_extended_ce_readMoreText' => array(
			'exclude' => 0,
			'label' => 'Readmore Text',
			'config' => array(
				'type' => 'input',
				'size' => 20,
				'eval' => 'trim'
			),
		)
	);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
		'tt_content',
		$tempColumns,
		1
	);

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', '--div--;NSC Extended CE, nsc_extended_ce_readMoreLink, nsc_extended_ce_readMoreText');

	/*\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
		'tt_content',
		'general',
		'--linebreak--, nsc_extended_ce_readMoreLink, nsc_extended_ce_readMoreText', 'after'
	);*/
?>