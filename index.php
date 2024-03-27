<?php

Kirby::plugin('janheise/kirby-panel-year', [
    'siteMethods' => [
        'getYear' => function () {
            return date('Y');
        }
    ]
]);
