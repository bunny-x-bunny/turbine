@extends('layouts.web')
@section('title', 'Проекты')

@section('content')

<section id="main" class="container lg:px-5 2xl:max-w-6xl xl:max-w-6xl mx-auto max-lg:mt-24 max-md:text-center">
  <div class="initiative flex flex-col gap-12 xl:gap-0 xl:flex-row relative mt-6 xl:pb-60">
    <div>
      <h2 class="text-4xl font-extrabold mb-6 lg:mt-36">КЛЮЧЕВЫЕ <b class="text-gradient">ИНИЦИАТИВЫ</b></h2>
      <p>Наша компания реализует проекты, направленные на решение<br>основных проблем в энергетической отрасли.</p>
    </div>

    <div class="hidden xl:block">
      <img id="initiative-bg-1" class="bg right-0 absolute" src="{{asset('images/projects/initiative-bg-1.png')}}" width="620">
      <img id="initiative-zap" class="lg:absolute" src="{{asset('images/projects/thunder.svg')}}">
      <img id="initiative-grid-solution" class="lg:absolute" src="{{asset('images/projects/initiative-grid-solution.png')}}">
    </div>

    <div class="relative xl:hidden mx-auto pb-5">
      <img id="initiative-zap-mobile" class="absolute h-1/3 bottom-16 -left-2" src="{{asset('images/projects/thunder.svg')}}">
      <img id="initiative-grid-solution-mobile" class="absolute h-2/5 right-6 bottom-8" src="{{asset('images/projects/initiative-grid-solution.png')}}">
      <img id="initiative-bg-1-mobile" class="bg max-h-86 max-w-[90%] mx-auto w-auto w-auto" src="{{asset('images/projects/initiative-bg-1.png')}}" width="620">
    </div>

    <img id="initiative-bg-2" class="bg bottom-0 w-full absolute" src="{{asset('images/projects/initiative-bg-2.svg')}}">
  </div>

  <div class="projects mt-20 relative">
    <img class="bg bg-gradient left-[-479px] top-[-163px] absolute" src="{{asset('images/projects/projects-gradient.svg')}}">
    
    <div class="flex flex-col lg:flex-row">
      <h2 class="text-3.5xl md:text-4xl font-extrabold mb-6 basis-2/5">НАШИ ТЕКУЩИЕ <b class="text-gradient">ЭНЕРГЕТИЧЕСКИЕ ПРОЕКТЫ</b></h2>
      
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4 basis-3/5 text-white">
        <div class="relative">
          <img class="mx-auto" src="{{asset("images/projects/projects-1.jpg")}}">
          <div class="label">
            <div>
              <h4 class="text-xl font-bold">ТЭЦ-2 550МВт</h4>
              <span class="uppercase">Алматы / Казахстан</span>
            </div>
          </div>
        </div>
        <div class="relative">
          <img class="mx-auto" src="{{asset("images/projects/projects-2.jpg")}}">
          <div class="label">
            <div>
              <h4 class="text-xl font-bold">ТЭЦ 240 МВт</h4>
              <span class="uppercase">Кызылорда / Казахстан</span>
            </div>
          </div>
        </div>
        <div class="relative">
          <img class="mx-auto" src="{{asset("images/projects/projects-3.jpg")}}">
          <div class="label">
            <div>
              <h4 class="text-xl font-bold">ТЭЦ 750 МВт</h4>
              <span class="uppercase">Комотини / Греция</span>
            </div>
          </div>
        </div>
        <div class="relative">
          <img class="mx-auto" src="{{asset("images/projects/projects-4.jpg")}}">
          <div class="label">
            <div>
              <h4 class="text-xl font-bold">ТЭЦ 550 МВт</h4>
              <span class="uppercase">Иетнут / Румыния</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modernization mt-20">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
      <div>
        <h2 class="text-4xl font-extrabold mb-6 basis-2/5">ПРОЕКТ <br> <b class="text-gradient">МОДЕРНИЗАЦИИ ТЭЦ-2</b></h2>
        <p class="font-semibold">это центральный элемент нашей стратегии</p>
        <img class="mt-6" src="{{asset("images/projects/modernization.jpg")}}">
      </div>
      <div class="flex flex-col space-y-6 green-bg">
        <div class="box shadowed-light flex space-x-6 items-center px-6 py-4">
          <img src="{{asset("images/projects/modernization-1.svg")}}">
          <p class="text-sm">Введение в эксплуатацию двух газотурбинных установок общей мощностью 350–400 МВт.</p>
        </div>
        <div class="box shadowed-light flex space-x-6 items-center px-6 py-4">
          <img src="{{asset("images/projects/modernization-2.svg")}}">
          <p class="text-sm">Замена угольных котлов на парогазовые технологии, что снижает уровень загрязнения воздуха.</p>
        </div>
        <div class="box shadowed-light flex space-x-6 items-center px-6 py-4">
          <img src="{{asset("images/projects/modernization-3.svg")}}">
          <p class="text-sm">Модернизация существующей сети для повышения надёжности подачи энергии.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="impact mt-20">
    <h2 class="text-4xl font-extrabold mb-6 basis-2/5">СФЕРЫ <b class="text-gradient">ВОЗДЕЙСТВИЯ ПРОЕКТА</b></h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 text-center">
      <div class="box shadowed-light p-4">
        <div class="box blue mb-4 py-4 rounded-xl">
          <img class="mx-auto my-[5px]" src="{{asset('images/projects/impact-1.svg')}}">
        </div>
        <h4 class="font-bold text-xl mt-4 mb-2">Энергетическая безопасность</h4>
        <p class="leading-tight text-sm">ТЭЦ обеспечит стабильное энергоснабжение в пиковые периоды.</p>
      </div>
      <div class="box shadowed-light p-4">
        <div class="box green mb-4 py-4 rounded-xl">
          <img class="mx-auto" src="{{asset('images/projects/impact-2.svg')}}">
        </div>
        <h4 class="font-bold text-xl mt-4 mb-2">Экологическая устойчивость</h4>
        <p class="leading-tight text-sm">Снижение выбросов парниковых газов и улучшение качества воздуха.</p>
      </div>
      <div class="box shadowed-light p-4">
        <div class="box cyan mb-4 py-4 rounded-xl">
          <img class="mx-auto" src="{{asset('images/projects/impact-3.svg')}}">
        </div>
        <h4 class="font-bold text-xl mt-4 mb-2">Экономическое развитие</h4>
        <p class="leading-tight text-sm">Создание более 1 000 рабочих мест в процессе строительства и более 200 на этапе эксплуатации.</p>
      </div>
    </div>
  </div>

  <div class="future mt-20 box flex flex-col lg:flex-row-reverse items-center gap-6 text-white p-6 overflow-hidden">
    <div class="basis-1/2 relative">
      <img class="glow absolute" src="{{asset('images/projects/future-glow.svg')}}">
      <img
        src="{{asset('images/projects/future.png')}}"
        class="relative mx-auto py-6 h-[350px] lg:h-[490px]">
    </div>
    
    <div class="basis-1/2">
      <h2 class="text-4xl font-extrabold mb-6 basis-2/5">БУДУЩИЕ <b class="text-gradient">ПЛАНЫ</b></h2>
      <p class="leading-tight">Мы рассматриваем расширение проекта за счёт установки дополнительных газовых турбин, что позволит увеличить мощность станции до 500 МВт, обеспечивая дополнительные возможности для экспортной торговли электроэнергией.</p>
    </div>
  </div>
</section>

@endsection
