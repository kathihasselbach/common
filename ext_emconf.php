<?php

/**
 * Extension Manager/Repository config file for ext "commonthread".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'CommonThread',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
            'fluid_styled_content' => '9.5.0-9.5.99',
            'rte_ckeditor' => '9.5.0-9.5.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'KatharinaHasselbach\\Commonthread\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Katharina Hasselbach',
    'author_email' => 'kathihasselbach88@gmail.com',
    'author_company' => 'Katharina Hasselbach',
    'version' => '1.0.0',
];
