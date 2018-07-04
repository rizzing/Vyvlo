<?php

return [

    'avatar_img_format' => 'jpg',

    'users' => [
        'large' => [
            'path'=>'public/users/avatars/large/',
            'width' => 500,
            'height' => 500,
            'public_path' => 'storage/users/avatars/large/',
        ],
        'middle' => [
            'path'=>'public/users/avatars/middle/',
            'width' => 250,
            'height' => 250,
            'public_path' => 'storage/users/avatars/middle/',
        ],
        'small' => [
            'path'=>'public/users/avatars/small/',
            'width' => 50,
            'height' => 50,
            'public_path' => 'storage/users/avatars/small/',
        ],
    ],

    'blog' => [
        'large' => [
            'path'=>'public/blog/images/large/',
            'width' => '',
            'height' => '',
            'public_path' => 'storage/blog/images/large/',
        ],
        'middle' => [
            'path'=>'public/blog/images/middle/',
            'width' => '',
            'height' => '',
            'public_path' => 'storage/blog/images/middle/',
        ],
    ],

];