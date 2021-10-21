<?php

declare(strict_types=1);

/*
 * This file is part of the "Static Info Tables (UK)" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * Max Rösch <m.roesch@Leuchtfeuer.com>, Leuchtfeuer Digital Marketing
 */

return [
    \SJBR\StaticInfoTables\Domain\Model\Country::class => [
        'tableName' => 'static_countries',
        'properties' => [
            'shortNameUk' => [
                'fieldName' => 'cn_short_uk',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\Currency::class => [
        'tableName' => 'static_currencies',
        'properties' => [
            'nameUk' => [
                'fieldName' => 'cu_name_uk',
            ],
            'subdivisionNameUk' => [
                'fieldName' => 'cu_sub_name_uk',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\Language::class => [
        'tableName' => 'static_languages',
        'properties' => [
            'nameUk' => [
                'fieldName' => 'lg_name_uk',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\Territory::class => [
        'tableName' => 'static_territories',
        'properties' => [
            'nameUk' => [
                'fieldName' => 'tr_name_uk',
            ],
        ],
    ],
];
