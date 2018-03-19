<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Default Image Paths and Settings
    |--------------------------------------------------------------------------
    |
    |
    | We set the config here so that we can keep our controllers clean.
    | Configure each image type with an image path.
    |
    */
        'marketingImage' => [
            'destinationFolder'     => '/images/marketing/',
            'destinationThumbnail'      => '/images/marketing/thumbnails/',
            'thumbPrefix'           => 'thumb-',
            'imagePath'             => '/images/marketing/',
            'thumbnailPath'         => '/images/marketing/thumbnails/thumb-',
            'thumbHeight'           => 60,
            'thumbWidth'            => 60,
        ],

        'verhicleImage' => [
            'destinationFolder'     => '/images/verhicle/',
            'destinationThumbnail'      => '/images/verhicle/thumbnails/',
            'thumbPrefix'           => 'thumb-',
            'imagePath'             => '/images/verhicle/',
            'thumbnailPath'         => '/images/verhicle/thumbnails/thumb-',
            'thumbHeight'           => 100,
            'thumbWidth'            => 100,
        ],
];