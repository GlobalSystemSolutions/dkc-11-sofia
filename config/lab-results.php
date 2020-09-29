<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laboratory results configuration
    |--------------------------------------------------------------------------
    |
    | Laboratory results configuration
    |
    */

    'login_type' => [
        'patient' => [
            'bg' => [
                'success' => 'Успешен вход!',
                'failure' => 'Грешен ID номер и/или парола!'
            ],
            'en' => [
                'success' => 'You have successfully logged in!',
                'failure' => 'Incorrect ID number and / or password!'
            ],
        ],
        'doctor' => [
            'bg' => [
                'success' => 'Успешен вход!',
                'failure' => 'Грешен УИН и/или парола!'
            ],
            'en' => [
                'success' => 'You have successfully logged in!',
                'failure' => 'Incorrect UIN and / or password!'
            ],
        ],
        'affiliate' => [
            'bg' => [
                'success' => 'Успешен вход!',
                'failure' => 'Грешен ID филиал и/или парола!'
            ],
            'en' => [
                'success' => 'You have successfully logged in!',
                'failure' => 'Incorrect affiliate ID and / or password!'
            ],
        ],
    ],

    'result_types' => [
        'clinical_laboratory' => 1,
        'microbiology' => 2,
        'cytology' => 3,
        'pathology' => 4,
        'roentgen' => 5,
        'parasitology' => 6,
        'sdi' => 7,
        'pcr' => 8,
        'spermogram' => 9,
        'virology' => 10,
    ],

    'blank_types' => [
        'clinical_laboratory' => 'clinical_laboratory',
        'cytology' => 'cytology',
        'microbiology' => 'microbiology',
        'parasitology' => 'parasitology',
        'pathology' => 'pathology',
        'pcr' => 'pcr',
        'roentgen' => 'roentgen',
        'sdi' => 'sdi',
        'spermogram' => 'spermogram',
    ],

    'test_types' => [
        't_cell' => 8,
        'pla' => 9,
    ],

    'antibiogram_legend' => [
        'bg' => [
            'sensitive' => 'S - чувствителни',
            'intermediate' => 'I - интермедиални',
            'resistant' => 'R - резистентни',
        ],
        'en' => [
            'sensitive' => 'S - sensitive',
            'intermediate' => 'I - intermediate',
            'resistant' => 'R - resistant',
        ],
    ],

    'payment_messages' => [
        'success' => [
            'bg' => 'Изследването/изследванията са заплатени на каса.',
            'en' => 'The examination(s) are paid.',
        ],
        'failure' => [
            'bg' => 'Едно или повече изследвания не са заплатени. За да видите резултатите, моля заплатете дължимото на касата!',
            'en' => 'One or more examination taxes were not paid. In order to view the results, please pay the tax/taxes.',
        ],
    ],

    'result_notes' => [
        'bg' => [
            'high' => 'H - резултатът е над нормата (High - висок)',
            'low' => 'L - резултатът е под нормата (Low - нисък)',
            'warning' => 'Лабораторните резултати не са диагноза, а основание за такава. Приемането на каквито и да било лекарствени средства без лекарско предписание, може да бъде опасно за вашето здраве. Обръщайте се за тълкуване на резултатите само към квалифициран лекар.',
        ],
        'en' => [
            'high' => 'H - the result is above normal (High)',
            'low' => 'L - the result is below normal (Low)',
            'warning' => 'Laboratory results are not diagnosis, but a basis for such. Taking any medications without a prescription may be dangerous to your health. Refer only to a qualified physician for interpretation of the results.',
        ],
    ],

    'person_responsible' => [
        'has_title' => false,
        'bg' => [
            'title' => 'Д-р',
        ],
        'en' => [
            'title' => 'Dr',
        ],
    ],

    'scheme_of_sales_calculation' => [
        'for_doctor' => false,
        'for_affiliate' => true,
    ],
];