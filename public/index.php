<?php
include __DIR__ . '/../vendor/autoload.php';

$lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';
/** @var Zend\I18n\Translator\Translator $translator */
$translator = include __DIR__ . '/../src/translator.php';
$translator->setLocale($lang);

echo sprintf('<p>%s</p>', $translator->translate('Goodbye my friend'));
echo sprintf('<p>%s</p>', $translator->translate('How are you?'));
echo sprintf('<p>%s</p>', $translator->translate('My name is John Doe'));
