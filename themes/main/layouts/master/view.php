<?php

//global $page, $body;
require_once __DIR__ . '/../../../../helpers.php';

?>

<!DOCTYPE html>
<html lang="<?=str_replace('_', '-', app()->getLocale())?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?=__('ОАО «ORTA ASYA ИНВЕСТИЦИОННЫЙ ХОЛДИНГ»')?></title>
  <link rel="icon" type="image/jpeg" href="<?=asset('images/logo.jpg')?>">

  <!-- Fonts -->
  <?php require_once 'fonts.php' ?>

  <!-- Styles / Scripts -->
  <link rel="stylesheet" href="<?= phpb_theme_asset('css/style.css') ?>">
  <?= vite('resources/css/app.scss') ?>
  <?= vite('resources/js/app.js') ?>

  <script src="<?=asset('js/flowbite.min.js')?>"></script>
</head>
<body class="antialiased page-<?=$page->get('name')?> overflow-x-hidden">
[block slug="header"]
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'ru'});
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<?= $body ?>

<!--p class="pt-10 pb-4">Laravel v<?= Illuminate\Foundation\Application::VERSION ?> (PHP v<?= PHP_VERSION ?>)</p--><!--p class="pt-10 pb-4">Laravel v<?= Illuminate\Foundation\Application::VERSION ?> (PHP v<?= PHP_VERSION ?>)</p-->

</body>
</html>
