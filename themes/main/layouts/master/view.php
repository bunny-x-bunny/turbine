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
  <?= vite('resources/css/app.scss') ?>
  <?= vite('resources/js/app.js') ?>

  <script src="<?=asset('js/flowbite.min.js')?>"></script>
</head>
<body class="antialiased page-<?=$page->get('name')?> overflow-x-hidden">

<?= $body ?>

<!--p class="pt-10 pb-4">Laravel v<?= Illuminate\Foundation\Application::VERSION ?> (PHP v<?= PHP_VERSION ?>)</p--><!--p class="pt-10 pb-4">Laravel v<?= Illuminate\Foundation\Application::VERSION ?> (PHP v<?= PHP_VERSION ?>)</p-->

</body>
</html>
