<?php
declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || die();

call_user_func(function () {
    /**
     * Default TypoScript for Headless Powermail
     */
    ExtensionManagementUtility::addStaticFile(
        'headless_powermail',
        'Configuration/TypoScript',
        'Headless Powermail'
    );
});
