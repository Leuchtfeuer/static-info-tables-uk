<?php
declare(strict_types = 1);
defined('TYPO3_MODE') || die;

call_user_func(
    function ($additionalFields, $dataSetName) {
        \Bitmotion\StaticInfoTablesUk\Provider\TcaProvider::generateAndRegisterTca($additionalFields, $dataSetName);
    },
    ['lg_name_en' => 'lg_name_uk'],
    'static_languages'
);
