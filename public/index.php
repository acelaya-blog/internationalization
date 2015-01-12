<?php
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';
/** @var Zend\I18n\Translator\TranslatorInterface $translator */
$translator = include __DIR__ . '/../src/translator.php';

echo sprintf('<p>%s</p>', $translator->translate('Hello my friend'));
echo sprintf('<p>%s</p>', $translator->translate('How are you'));
echo sprintf('<p>%s</p>', $translator->translate('My name is John Doe'));
