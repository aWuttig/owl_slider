<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

if (! defined('TYPO3_MODE')) {
    die('Access denied.');
}

ExtensionManagementUtility::addLLrefForTCAdescr(
    'tx_owlslider_domain_model_item',
    'EXT:owl_slider/Resources/Private/Language/locallang_csh_tx_owlslider_domain_model_item.xlf'
);

ExtensionManagementUtility::allowTableOnStandardPages(
    'tx_owlslider_domain_model_item'
);
