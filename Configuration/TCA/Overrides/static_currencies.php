<?php
defined('TYPO3_MODE') || die;

call_user_func(
    function ($additionalFields, $dataSetName) {
        \Bitmotion\StaticInfoTablesUk\Provider\TcaProvider::generateAndRegisterTca($additionalFields, $dataSetName);
    },
    ['cu_name_en' => 'cu_name_uk', 'cu_sub_name_en' => 'cu_sub_name_uk'],
    'static_currencies'
);
