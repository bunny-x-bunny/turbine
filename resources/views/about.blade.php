@extends('layouts.web')
@section('title', 'О Нас')

@section('content')

<section id="main" class="container 2xl:max-w-6xl xl:max-w-6xl mx-auto max-lg:mt-24 max-md:text-center">

  <div class="about flex items-center w-full linear-gradient text-white p-9">
    <div class="basis-1/2 mr-12">Бишкекская газотурбинная теплоэлектроцентраль (ТЭЦ) является ключевым проектом в развитии энергетической инфраструктуры Кыргызской Республики.<br>
      Основанная в партнерстве с ОАО «Orta Asya Investment Holding», компания занимается внедрением передовых технологий в энергетике, чтобы обеспечить экологически чистую и надёжную генерацию электроэнергии.</div>
    <div class="basis-1/2 flex justify-center">
      <img src="{{asset('images/about/1d9efcaa77611dc97cc55b83f25ac43e.png')}}" width="400">
    </div>
  </div>

  <div class="mission flex items-center mt-20 space-x-12">
    <div class="basis-2/5">
      <h2 class="text-4xl font-extrabold mb-6">НАША <b class="text-gradient">МИССИЯ</b></h2>
      <p>Мы стремимся к созданию устойчивой энергетической системы, которая поддерживает экономический рост и улучшает качество жизни в регионе. ТЭЦ использует современные газотурбинные установки, что позволяет значительно снизить выбросы углекислого газа и обеспечить более чистое энергоснабжение.</p>
    </div>
    <div class="basis-3/5">
      <img src="{{asset('images/about/mission-bg.jpg')}}" class="bg absolute right-0 max-h-full">
      <img src="{{asset('images/about/Sustainable Energy Transition.png')}}" class="icon icon-1">
      <img src="{{asset('images/about/Affordable Energy Transition.png')}}" class="icon icon-2">
      <img src="{{asset('images/about/Reliable Energy Transition.png')}}" class="icon icon-3">
    </div>
  </div>

  <div class="values mt-32">
    <h2 class="text-4xl font-extrabold mb-6">НАШИ <b class="text-gradient">ЦЕННОСТИ</b></h2>
    <div class="items grid grid-cols-4 gap-4 mt-12 text-center">
      <div class="box px-4 py-6 text-sm">
        <img src="{{asset('images/about/values-1.svg')}}" class="values-1">
        <h4 class="font-bold text-xl mt-4 mb-2">Инновации</h4>
        <p class="leading-tight">Внедрение новейших технологий, которые соответствуют международным стандартам.</p>
      </div>
      <div class="box px-4 py-6 text-sm">
        <img src="{{asset('images/about/values-2.png')}}">
        <h4 class="font-bold text-xl mt-4 mb-2">Экологичность</h4>
        <p class="leading-tight">Снижение углеродного следа и переход к возобновляемым источникам энергии.</p>
      </div>
      <div class="box px-4 py-6 text-sm">
        <img src="{{asset('images/about/values-3.svg')}}">
        <h4 class="font-bold text-xl mt-4 mb-2">Партнерство</h4>
        <p class="leading-tight">Работа с мировыми лидерами в области инжиниринга и энергетики.</p>
      </div>
      <div class="box px-4 py-6 text-sm">
        <img src="{{asset('images/about/values-4.svg')}}">
        <h4 class="font-bold text-xl mt-4 mb-2">Ответственность</h4>
        <p class="leading-tight">Прозрачность в реализации проектов и соблюдение интересов местного сообщества.</p>
      </div>
    </div>
  </div>

  <div class="advantages mt-20 grid grid-cols-2 gap-4">
    <div>
      <h2 class="text-4xl font-extrabold mb-6"><b class="text-gradient">ПРЕИМУЩЕСТВА</b><br>НАШЕГО ПОДХОДА</h2>
      <div class="box">
        <div class="box blue">
          <img src="{{asset('images/about/advantages-1.svg')}}">
        </div>
        <p>Использование газотурбинных технологий для повышения энергоэффективности.</p>
      </div>
    </div>
    <div class="grid grid-cols-1 gap-4">
      <div class="box">
        <div class="box green">
          <img src="{{asset('images/about/advantages-2.svg')}}">
        </div>
        <p>Модернизация существующих энергетических объектов для снижения эксплуатационных затрат.</p>
      </div>
      <div class="box">
        <div class="box cyan">
          <img src="{{asset('images/about/advantages-3.svg')}}">
        </div>
        <p>Активное сотрудничество с Организацией тюркских государств (TDT) для укрепления экономической интеграции региона.</p>
      </div>
    </div>
  </div>

</section>

@endsection

