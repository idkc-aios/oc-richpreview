<?php return [
    'plugin' => [
        'name' => 'Vista previa enriquecida',
        'description' => 'Previsualice su sitio web para aplicaciones de chat y redes sociales',
    ],
    'tab' => [
        'share' => 'Vista previa enriquecida',
    ],
    'column' => [
        'og' => [
            'title' => [
                'label' => 'Titulo',
                'comment' => 'debe tener un m&aacute;ximo de 35 caracteres o se recortar&aacute; en la Vista previa enriquecida.',
            ],
            'description' => [
                'label' => 'Descripción',
                'comment' => 'debe tener un m&aacute;imo de 65 caracteres o se recortar&aacute; en la Vista previa enriquecida.',
            ],
            'image' => [
                'label' => 'Imagen',
                'comment' => 'imagen JPG o PNG, se recomiendan dimensiones maxima de 1200 x 630 pixeles.',
            ],
        ],
        'meta' => [
            'title' => [
                'comment' => 'debe tener un máximo de 65 caracteres o de lo contrario se recortará en los resultados de Google',
            ],
            'description' => [
                'comment' => 'debe tener un máximo de 155 caracteres o se recortará en los resultados de Google',
            ],
        ],
    ],
    'component' => [
        'link' => [
            'name' => 'Vista Previa enriquecida',
            'description' => 'Agrega al diseño los campos necesario para generar una vista previa correcta',
        ],
    ],
];