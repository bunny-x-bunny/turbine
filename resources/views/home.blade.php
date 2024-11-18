<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{config('app.name')}}</title>

  <!-- Fonts -->
  @include('components/fonts')

  <!-- Styles / Scripts -->
  @vite(['resources/css/app.scss', 'resources/js/app.js'])
  <script src="{{asset('js/flowbite.min.js')}}"></script>
</head>
<body class="antialiased">

<header>
  <div class="max-lg:hidden lg:flex container 2xl:max-w-6xl xl:max-w-6xl mx-auto mt-3">
    <nav class="flex max-w-screen-lg space-x-10 mx-auto items-center justify-between text-sm">
      <a href="#"><b>Главная</b></a>
      <a href="#">О Нас</a>
      <a href="#">Услуги</a>
      <a href="#">Наши технологии и возможности</a>
      <a href="#">Новости и обновления</a>
      <a href="#">Инвесторам</a>
      <a href="#">Контакты</a>
    </nav>
    <button type="button" class="btn linear-gradient">Связаться с нами</button>
  </div>

  <nav class="lg:hidden fixed z-20 top-0 start-0 w-full bg-white border-gray-200 dark:bg-gray-900" style="max-width: 100vw;">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
        <!--img src="" class="h-8" alt="Logo" /-->
    </a>
    <div class="flex space-x-3 rtl:space-x-reverse">
        <button type="button" class="btn linear-gradient">Связаться с нами</button>
        <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
          <span class="sr-only">Открыть меню</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
    </div>
    <div class="items-center justify-between hidden w-full" id="navbar-cta">
      <ul class="flex flex-col font-medium p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 rtl:space-x-reverse dark:bg-gray-800 dark:border-gray-700">
        <li><a href="#" class="block py-2 px-3 text-white rounded" aria-current="page">Главная</a></li>
        <li><a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white dark:border-gray-700">О Нас</a></li>
        <li><a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white dark:border-gray-700">Услуги</a></li>
        <li><a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white dark:border-gray-700">Наши технологии и возможности</a></li>
        <li><a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white dark:border-gray-700">Новости и обновления</a></li>
        <li><a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white dark:border-gray-700">Инвесторам</a></li>
        <li><a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white dark:border-gray-700">Контакты</a></li>
      </ul>
    </div>
    </div>
  </nav>

</header>

<section id="main" class="container 2xl:max-w-6xl xl:max-w-6xl mx-auto mt-20 max-lg:mt-24 max-md:text-center">
  <h1 class="text-6xl max-sm:text-4xl">
    ОАО «<b class="text-gradient">ORTA ASYA</b> ИНВЕСТИЦИОННЫЙ ХОЛДИНГ»
  </h1>

  <div class="flex flex-row mt-20 lg:space-x-8 max-lg:flex-col max-lg:mt-10">
    <div class="basis-3/5 box overflow-hidden">
      <img class="w-full object-cover max-lg:max-h-96 max-sm:max-h-72" src="{{asset('images/pexels-marcin-jozwiak-199600-3732951.png')}}">
    </div>
    <div class="basis-2/5 box radial-gradient p-8 max-lg:mt-8 max-sm:px-4">
      <h3 class="text-white text-4xl font-bold mb-6">О Нас</h3>
      <p class="text-white text-lg">ОАО «Среднеазиатский Инвестиционный Холдинг» - компания, основанная в 2024 году для развития и финансирования проектов в области энергетики, инфраструктуры, сельского хозяйства и недвижимости в странах Центральной Азии, являющихся членами TDT (Организации тюркских государств).</p>
      <button type="button" class="btn bg-white text-gray-900 mt-6 lg:mt-20">Узнать больше</button>
    </div>
  </div>

  <h2 class="text-3xl font-extrabold mt-12 mb-4">HILL INTERNATIONAL</h2>
  <p class="text-lg">Hill International, Inc. (Hill) ведущая международная консалтинговая фирма в области строительства, которая предоставляет услуги по управлению программами и проектами, управлению строительством, проектированию и сметам затрат, обеспечению качества, инспекциям, составлению графиков, анализу претензий, инновационному разрешению споров и услугам по увеличению штата клиентов, участвующих в крупных строительных проектах по всему миру.</p>

  <div class="flex flex-row mt-20 space-x-12 projects-cont">
    <div class="basis-3/5">
      <h2 class="text-3xl font-extrabold">ТЕКУЩИЕ <br><b class="text-gradient">ЭНЕРГЕТИЧЕСКИЕ</b> ПРОЕКТЫ</h2>
      <img class="w-full box" src="{{asset('images/projects.png')}}">
    </div>
    <div class="basis-2/5">
      <h3 class="text-2xl font-bold mb-6">Страны и города:</h3>
      <div class="grid grid-cols-1 gap-y-4 projects">
        <div class="box shadowed p-6">Алматы/Казахстан - ТЭЦ-2 550МВт</div>
        <div class="box shadowed p-6">Кызылорда/Казахстан - ТЭЦ 240 МВт</div>
        <div class="box shadowed p-6">Комотини / Греция - ТЭЦ 750 МВт</div>
        <div class="box shadowed p-6">Иетнут / Румыния - ТЭЦ 550 МВт</div>
      </div>
    </div>
  </div>

  <div class="flex flex-row box radial-gradient mt-10 text-white overflow-hidden problem">
    <div class="basis-1/2 lg:basis-2/5 p-8 pr-0">
      <h2 class="text-3xl mb-6 text-white">БИШКЕКСКАЯ ТЭЦ-2 <b class="text-white">ПРОБЛЕМА!</b></h2>
      <p class="">Ныне действующая ТЭЦ использует уголь, который является основной причиной загрязнения воздуха в Бишкеке.<br>
        Из-за плохого качества воздуха, возникают проблемы со здоровьем особенно у маленьких детей и пожилых людей.<br>
        Энергетическая инфраструктура требует модернизации</p>
      <button type="button" class="btn bg-white text-gray-900 mt-10 lg:mt-20">Узнать больше</button>
    </div>
    <div class="overflow-hidden basis-1/2 lg:basis-3/5 max-md:ml-4">
      <img src="{{asset('images/pexels-pixabay-221000.png')}}" class="object-cover">
    </div>
  </div>

  <h2 class="text-4xl mt-20 mb-10">БИШКЕКСКАЯ ТЭЦ-2 <b class="text-gradient-y">/ РЕШЕНИЕ</b></h2>
  <div class="box relative">
    <img src="{{asset('images/i (3).png')}}">
    <img src="{{asset('images/play-circle.svg')}}" class="play-circle">
  </div>

  <h2 class="text-4xl mt-20 mb-10">НАШЕ <b class="text-gradient-y">ПРЕДЛОЖЕНИЕ:</b></h2>
  <div class="proposal grid grid-cols-2 lg:grid-cols-4 gap-6 text-center">
    <div class="box shadowed p-6">
      <img src="{{asset('images/spec-icon-1.svg')}}" class="mx-auto mb-6">
      <p>Увеличение поставок природного газа до 80-100 тыс. м3/час.</p>
    </div>
    <div class="box p-6" style="box-shadow: 0 0 60px 0 rgba(0, 0, 0, 0.2), 13px 38px 57px 0 #36aedd2e;z-index: -1;">
      <img src="{{asset('images/spec-icon-2.svg')}}" class="mx-auto mb-6">
      <p>Энергетическая мощность – 350-400МВт</p>
    </div>
    <div class="box p-6" style="box-shadow: 0 0 60px 0 rgba(0, 0, 0, 0.2), -33px 71px 76px 0 #3dd96f33;z-index: -1;">
      <img src="{{asset('images/spec-icon-3.svg')}}" class="mx-auto mb-6">
      <p>Доступный запас природного газа – 40 000 м3/час</p>
    </div>    <div class="box shadowed p-6">
      <img src="{{asset('images/spec-icon-4.svg')}}" class="mx-auto mb-6">
      <p>Возможная выработка энергии - ТЭЦ 250 МВт.</p>
    </div>
  </div>

  <div class="flex flex-row box shadowed mt-20 configuration relative">
    <div class="basis-2/5 p-8 max-md:pr-0">
      <h2 class="text-4xl mb-6">БИШКЕКСКАЯ ТЭЦ-2 / <b class="text-gradient">КОНФИГУРАЦИЯ</b></h2>
      <div class="flex-col space-y-5 mt-10">
        <p class="item"><img src="{{asset('images/check.svg')}}">2 ГАЗОВЫЕ ТУРБИНЫ</p>
        <p class="item"><img src="{{asset('images/check.svg')}}">2 ВЫХЛОПНЫЕ ТРУБЫ</p>
        <p class="item"><img src="{{asset('images/check.svg')}}">2 ВХОДНЫХ ВОЗДУШНЫХ ФИЛЬТРА</p>
        <p class="item"><img src="{{asset('images/check.svg')}}">1 ПАРОВЫЕ ТУРБИНЫ</p>
        <p class="item"><img src="{{asset('images/check.svg')}}">2 HRSG</p>
      </div>
    </div>
    <img src="{{asset('images/5888872266077422126 1.png')}}" class="basis-3/5 object-contain p-8 pr-16 max-md:p-0">
  </div>

  <h2 class="text-4xl my-20">БИШКЕКСКАЯ ТЭЦ-2 <b class="text-gradient-y"> / <br>ГРАФИК</b></h2>
  <div class="agenda grid grid-cols-5 gap-6 text-center max-md:grid-cols-3">
    <div class="box shadowed p-6 pt-10">
      <span class="num">1</span>
      <h3 class="text-2xl font-bold leading-none mb-4">3<br>месяца</h3>
      <p class="leading-tight">Технико-экономическое обоснование проекта</p>
    </div>
    <div class="box shadowed p-6 pt-10">
      <span class="num">2</span>
      <h3 class="text-2xl font-bold leading-none mb-4">12<br>месяцев</h3>
      <p class="leading-tight">проектирование, инжиниринг, тендер и согласования</p>
    </div>
    <div class="box shadowed p-6 pt-10">
      <span class="num">3</span>
      <h3 class="text-2xl font-bold leading-none mb-4">18<br>месяцев</h3>
      <p class="leading-tight">производство и поставка газовых турбин</p>
    </div>
    <div class="box shadowed p-6 pt-10">
      <span class="num">4</span>
      <h3 class="text-2xl font-bold leading-none mb-4">6<br>месяцев</h3>
      <p class="leading-tight">монтаж, испытание и пуско-наладка газовых турбин</p>
    </div>
    <div class="box shadowed p-6 pt-10 linear-gradient max-md:col-span-2">
      <span class="num">5</span>
      <h3 class="text-2xl text-white leading-none mb-4">ВСЕГО <b>ЧЕРЕЗ 36</b> МЕСЯЦЕВ</h3>
      <p class="leading-tight text-white">ПОСЛЕ ТЭО</p>
    </div>
  </div>
  <div class="mt-16 text-center">
    <button type="button" class="btn linear-gradient"><p class="px-4 py-1">Узнать больше</p></button>
  </div>

  <h2 class="text-4xl mt-20 my-12">ПАРТНЕРЫ <b class="text-gradient">ПО РЕШЕНИЯМ</b></h2>
  <div class="partners grid grid-cols-4 max-md:grid-cols-2 gap-6 text-center">
    <div class="box shadowed">
      <img src="{{asset('images/logo/1.png')}}">
    </div>
    <div class="box shadowed">
      <img src="{{asset('images/logo/2.png')}}">
    </div>
    <div class="box shadowed">
      <img src="{{asset('images/logo/3.png')}}">
    </div>
    <div class="box shadowed">
      <img src="{{asset('images/logo/4.png')}}">
    </div>
  </div>
</section>

<footer class="mt-16 pt-16 text-center text-sm text-white">
  <div class="container 2xl:max-w-6xl xl:max-w-6xl mx-auto flex justify-between space-x-6 text-left
    max-lg:flex-col max-lg:items-center max-lg:text-center max-lg:space-x-0
  ">
    <div class="max-lg:mb-6">
      <h3 class="text-xl font-bold mb-6"><a href="mailto:ceo@ortaasyainvest.com">ceo@ortaasyainvest.com</a></h3>
      <p><b>Адрес:</b><br>
        <span class="text-gray-400 font-normal">Проспект Чынгыза Айтматова,<br>243 - БЦ "Бакай Банк", 4 этаж</span>
      </p>
    </div>
    <div>
      <p>Новости и обновления</p>
      <p>Инвесторам</p>
    </div>
    <div>
      <p>О Нас</p>
      <p>Услуги</p>
      <p>Наши телхнологии и возможности</p>
    </div>
    <div>
      <p>Контакты</p>
      <p>+996 703 927 086</p>
    </div>
  </div>
  <p class="pt-10 pb-4">Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
</footer>

</body>
</html>


