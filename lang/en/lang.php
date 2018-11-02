<?php return [
    'plugin' => [
        'name' => 'Rich Preview',
        'description' => 'Preview your website for chat apps and social networks',
    ],
    'tab' => [
        'share' => 'Rich Preview',
    ],
    'column' => [
        'og' => [
            'title' => [
                'label' => 'Title',
                'comment' => 'should be maximum 35 characters or else will be clipped in the Rich Preview',
            ],
            'description' => [
                'label' => 'Description',
                'comment' => 'should be maximum 65 characters or else will be clipped in the Rich Preview',
            ],
            'image' => [
                'label' => 'Image',
                'comment' => 'a JPG or PNG image, minimum dimensions of 300 x 200 pixels are advised',
            ],
        ],
        'meta' => [
            'title' => [
                'comment' => 'a title should be maximum 65 characters or else will be clipped in the Google results',
            ],
            'description' => [
                'comment' => 'a meta description should be maximum 155 characters or else will be clipped in the Google results',
            ],
        ],
    ],
    'component' => [
        'link' => [
            'name' => 'Rich Preview',
            'description' => 'Add to the design the necessary fields to generate a correct preview',
        ],
    ],
];