<?php
use Zend\I18n\Translator\Translator;

return Translator::factory([
    'locale' => 'es',
    'translation_file_patterns' => [
        [
            'type'     => 'gettext',
            'base_dir' => __DIR__ . '/../languages',
            'pattern'  => '%s.mo',
        ],
    ],
]);