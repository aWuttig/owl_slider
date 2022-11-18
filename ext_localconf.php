<?php

use Comsolit\OwlSlider\Controller\ItemController;
use Comsolit\OwlSlider\Updates\ItemImageUpdateWizard;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

ExtensionUtility::configurePlugin(
    'owl_slider',
    'OwlSlider',
    [
        ItemController::class => 'list, show'
    ],
    // non-cacheable actions
    [
        ItemController::class => ''
    ]
);

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['owlSliderItemImage'] = ItemImageUpdateWizard::class;