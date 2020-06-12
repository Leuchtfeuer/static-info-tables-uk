<?php

/*
 * This file is part of the "Static Info Tables (UK)" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * Florian Wessels <f.wessels@Leuchtfeuer.com>, Leuchtfeuer Digital Marketing
 */

defined('TYPO3_MODE') || die;

call_user_func(
    function ($additionalFields, $dataSetName) {
        \Bitmotion\StaticInfoTablesUk\Provider\TcaProvider::generateAndRegisterTca($additionalFields, $dataSetName);
    },
    ['cu_name_en' => 'cu_name_uk', 'cu_sub_name_en' => 'cu_sub_name_uk'],
    'static_currencies'
);
