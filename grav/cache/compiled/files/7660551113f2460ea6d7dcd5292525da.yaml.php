<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanertemel/web/t4.bolton365.net/public_html/user/themes/learn2-git-sync/blueprints.yaml',
    'modified' => 1573482998,
    'data' => [
        'name' => 'Learn2 Git Sync',
        'version' => '1.5.6',
        'description' => 'A customized version of the Learn2 theme for use with the Learn2 with Git Sync skeleton package. Includes selectable visual styles.',
        'icon' => 'git',
        'author' => [
            'name' => 'Hibbitts Design',
            'email' => 'hello@hibbittsdesign.org',
            'url' => 'http://hibbittsdesign.org'
        ],
        'homepage' => 'https://github.com/hibbitts-design/grav-theme-learn2-git-sync',
        'demo' => 'http://demo.hibbittsdesign.org/grav-learn2-git-sync/',
        'keywords' => 'learn2, gitsync',
        'bugs' => 'https://github.com/hibbitts-design/grav-theme-learn2-git-sync/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6.0'
            ],
            1 => 'admin',
            2 => 'breadcrumbs',
            3 => 'learn2',
            4 => 'error',
            5 => 'external_links',
            6 => 'feed',
            7 => 'git-sync',
            8 => 'highlight',
            9 => 'langswitcher',
            10 => 'presentation',
            11 => 'presentation-deckset',
            12 => 'problems',
            13 => 'simplesearch',
            14 => 'shortcode-core',
            15 => 'tntsearch',
            16 => 'youtube'
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'gitsyncoptions' => [
                    'type' => 'section',
                    'title' => 'Git Sync Link Options',
                    'underline' => true
                ],
                'github.position' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'classes' => 'fancy',
                    'label' => 'Git Link Position',
                    'options' => [
                        'top' => 'Top',
                        'bottom' => 'Bottom',
                        'off' => 'Off'
                    ]
                ],
                'github.icon' => [
                    'type' => 'input.text',
                    'size' => 'small',
                    'label' => 'Custom Git Link Font Awesome Icon',
                    'description' => 'Icon short name.',
                    'help' => 'Enter the short name of the Font Awesome icon for the link, for example \'gitlab\'.',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'github.tree' => [
                    'type' => 'text',
                    'label' => 'Custom Git Repository Tree URL',
                    'help' => 'Enter the URL that leads to the pages folder of your Git Repository.',
                    'description' => 'URL path to the pages folder, but with \'/pages\' and everything following it removed. For example, \'https://github.com/paulhibbitts/demo-grav-learn2-with-git-sync/tree/master\'.'
                ],
                'siteandpageoptions' => [
                    'type' => 'section',
                    'title' => 'Learn 2 Theme Options',
                    'underline' => true
                ],
                'enable_doc_versioning' => [
                    'type' => 'toggle',
                    'label' => 'Document Versioning',
                    'description' => 'Support display of version specific docs using the multi-language feature.',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Yes',
                        0 => 'No'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'hide_site_title' => [
                    'type' => 'toggle',
                    'label' => 'Hide Site Title',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Yes',
                        0 => 'No'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'style' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'label' => 'Style',
                    'description' => 'Custom style selection.',
                    'default' => 'default',
                    'options' => [
                        'default' => 'Default',
                        'hoth' => 'Hoth',
                        'longyearbyen' => 'Longyearbyen',
                        'spitsbergen' => 'Spitsbergen (Hoth v2)'
                    ]
                ],
                'top_level_version' => [
                    'type' => 'toggle',
                    'label' => 'Top Level Version',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'home_url' => [
                    'type' => 'text',
                    'label' => 'Home URL',
                    'placeholder' => 'http://getgrav.org',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'google_analytics_code' => [
                    'type' => 'text',
                    'label' => 'Google Analytics Code',
                    'placeholder' => 'UA-XXXXXXXX-X',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'default_taxonomy_category' => [
                    'type' => 'text',
                    'label' => 'Default Taxonomy Category',
                    'validate' => [
                        'required' => true
                    ]
                ]
            ]
        ]
    ]
];
