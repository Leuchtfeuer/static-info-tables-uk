<?php
defined('TYPO3_MODE') || die;

call_user_func(
    function ($additionalFields, $dataSetName) {
        \Bitmotion\StaticInfoTablesUk\Provider\TcaProvider::generateAndRegisterTca($additionalFields, $dataSetName);
    },
    ['tr_name_en' => 'tr_name_uk'],
    'static_territories'
);
