@extends('layouts.web')
@section('title', __('О Нас'))

@section('content')

<section id="main" class="container lg:px-5 2xl:max-w-6xl xl:max-w-6xl mx-auto max-lg:mt-24 max-md:text-center">

  <div class="about flex max-md:flex-col gap-12 items-center w-full linear-gradient text-white p-9">
    <div class="basis-1/2 font-medium">
      {!!__('Бишкекская газотурбинная теплоэлектроцентраль (ТЭЦ) является ключевым проектом в развитии энергетической инфраструктуры Кыргызской Республики.<br>Основанная в партнерстве с ОАО «Orta Asya Investment Holding», компания занимается внедрением передовых технологий в энергетике, чтобы обеспечить экологически чистую и надёжную генерацию электроэнергии.')!!}
    </div>
    <div class="basis-1/2 flex justify-center">
      <img src="{{asset('images/about/1d9efcaa77611dc97cc55b83f25ac43e.png')}}" width="400">
    </div>
  </div>

  <div class="mission flex max-lg:flex-col gap-12 items-center mt-20">
    <div class="basis-2/5">
      <h2 class="text-4xl font-extrabold mb-6">{!!__('НАША <b class="text-gradient">МИССИЯ</b>')!!}</h2>
      <p>{{__('Мы стремимся к созданию устойчивой энергетической системы, которая поддерживает экономический рост и улучшает качество жизни в регионе. ТЭЦ использует современные газотурбинные установки, что позволяет значительно снизить выбросы углекислого газа и обеспечить более чистое энергоснабжение.')}}</p>
    </div>

    <div class="basis-3/5 relative w-full">
      <img src="{{asset('images/about/mission-gradient.svg')}}" class="bg-gradient absolute">
      <img src="{{asset('images/about/mission-bg.png')}}" class="bg relative">
      <img src="{{asset('images/about/Sustainable Energy Transition.png')}}" class="icon icon-1">
      <img src="{{asset('images/about/Affordable Energy Transition.png')}}" class="icon icon-2">
      <img src="{{asset('images/about/Reliable Energy Transition.png')}}" class="icon icon-3">
    </div>
  </div>

  <div class="values mt-32">
    <h2 class="text-4xl font-extrabold mb-6">{!!__('НАШИ <b class="text-gradient">ЦЕННОСТИ</b>')!!}</h2>
    <img src="{{asset('images/about/values-gradient.svg')}}" class="bg-gradient absolute left-0">

    <div class="items grid max-lg:grid-cols-2 grid-cols-4 gap-4 mt-12 text-center">
      <div class="box shadowed-light px-4 py-6 text-sm">
        <img src="{{asset('images/about/values-1.svg')}}" class="values-1 max-sm:h-36">
        <h4 class="font-bold max-sm:text-base text-xl mt-4 mb-2">{{__('Инновации')}}</h4>
        <p class="leading-tight">{{__('Внедрение новейших технологий, которые соответствуют международным стандартам.')}}</p>
      </div>
      <div class="box shadowed-light px-4 py-6 text-sm">
        <img src="{{asset('images/about/values-2.png')}}" class="max-sm:h-36">
        <h4 class="font-bold max-sm:text-base text-xl mt-4 mb-2">{{__('Экологичность')}}</h4>
        <p class="leading-tight">{{__('Снижение углеродного следа и переход к возобновляемым источникам энергии.')}}</p>
      </div>
      <div class="box shadowed-light px-4 py-6 text-sm">
        <img src="{{asset('images/about/values-3.svg')}}" class="max-sm:h-36">
        <h4 class="font-bold max-sm:text-base text-xl mt-4 mb-2">{{__('Партнерство')}}</h4>
        <p class="leading-tight">{{__('Работа с мировыми лидерами в области инжиниринга и энергетики.')}}</p>
      </div>

      <div class="box shadowed-light px-4 py-6 text-sm">
        <img src="{{asset('images/about/values-4.svg')}}" class="max-sm:h-36">
        <h4 class="font-bold max-sm:text-base text-xl mt-4 mb-2">{{__('Ответственность')}}</h4>
        <p class="leading-tight">{{__('Прозрачность в реализации проектов и соблюдение интересов местного сообщества.')}}</p>
      </div>
    </div>
  </div>

  <div class="advantages mt-20">
    <img src="{{asset('images/about/advantages-gradient.svg')}}" class="bg-gradient absolute left-0">
    <div class="grid max-md:grid-cols-1 grid-cols-2 gap-4">
      <div>
        <h2 class="text-4xl font-extrabold mb-6">{!!__('<b class="text-gradient">ПРЕИМУЩЕСТВА</b><br>НАШЕГО ПОДХОДА')!!}</h2>
        <div class="box shadowed-light">
          <div class="box blue mb-4">
            <img src="{{asset('images/about/advantages-1.svg')}}">
          </div>
          <p>{{__('Использование газотурбинных технологий для повышения энергоэффективности.')}}</p>
        </div>
      </div>

      <div class="grid grid-cols-1 gap-4">
        <div class="box shadowed-light flex max-sm:flex-col max-sm:gap-4 items-center">
          <div class="box green mr-4">
            <img src="{{asset('images/about/advantages-2.svg')}}">
          </div>
          <p>{{__('Модернизация существующих энергетических объектов для снижения эксплуатационных затрат.')}}</p>
        </div>

        <div class="box shadowed-light flex max-sm:flex-col max-sm:gap-4 items-center">
          <div class="box cyan mr-4">
            <img src="{{asset('images/about/advantages-3.svg')}}">
          </div>
          <p>{{__('Активное сотрудничество с Организацией тюркских государств (TDT) для укрепления экономической интеграции региона.')}}</p>
        </div>
      </div>
    </div>
  </div>

  <div class="achievements mt-20">
    <h2 class="text-4xl font-extrabold mb-12">{!!__('НАШИ <b class="text-gradient">ДОСТИЖЕНИЯ</b>')!!}</h2>

    <div class="grid max-sm:grid-cols-1 max-lg:grid-cols-2 grid-cols-3 gap-4">
      <div class="relative flex flex-col box shadowed-light p-6">
        <span class="num absolute left-6 top-6 text-6xl font-bold text-gradient">1</span>
        <img src="{{asset('images/about/achievements-1.svg')}}" class="mx-auto mb-6">
        <p class="text-sm leading-tight">{{__('Подписание стратегического соглашения с Кабинетом Министров Кыргызской Республики в 2024 году.')}}</p>
      </div>

      <div class="relative box shadowed-light p-6">
        <span class="num absolute left-6 top-6 text-6xl font-bold text-gradient">2</span>
        <img src="{{asset('images/about/achievements-2.svg')}}" class="mx-auto mb-6">
        <p class="text-sm leading-tight">{{__('Партнёрство с мировыми лидерами в области энергетики, включая Hill International и SemArco, PowerChina, IhlasHolding.')}}</p>
      </div>

      <div class="relative box shadowed-light p-6">
        <span class="num absolute left-6 top-6 text-6xl font-bold text-gradient">3</span>
        <img src="{{asset('images/about/achievements-3.svg')}}" class="mx-auto mb-6">
        <p class="text-sm leading-tight">{{__('Реализация первых этапов модернизации инфраструктуры Бишкека, направленных на улучшение качества жизни более чем 1 миллиона человек.')}}</p>
      </div>
    </div>
  </div>

</section>

@endsection

