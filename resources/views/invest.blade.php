@extends('layouts.web')
@section('title', __('Инвесторам'))

@section('content')

<section id="main" class="container lg:px-5 2xl:max-w-6xl xl:max-w-6xl mx-auto max-lg:mt-24 max-md:text-center">
  <div class="why mt-28 relative">
    <div class="bg absolute max-w-full z-[-1] w-[724px] h-[686px] left-[-282px] top-[-180px] bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-[#E6F9FD] via-transparent to-transparent"></div>
    <h2 class="max-sm:text-3.5xl text-4xl font-extrabold mb-2">{!!__('ПОЧЕМУ СТОИТ <b class="text-gradient">ИНВЕСТИРОВАТЬ?</b>')!!}</h2>
    <p class="text-sm">{{__('Проект ТЭЦ-2 — это уникальная возможность для долгосрочного сотрудничества')}}:</p>

    <div class="grid max-sm:grid-cols-1 max-md:grid-cols-2 grid-cols-3 gap-6 text-center mt-6">
      <div class="box shadowed-light px-4 py-6 text-sm">
        <img src="{{asset('images/invest/why-1.svg')}}" class="mx-auto">
        <h4 class="font-bold text-lg mt-4 mb-2">{{__('Гарантированный доход')}}</h4>
        <p class="leading-tight">{{__('Контракты с правительством Кыргызской Республики.')}}</p>
      </div>
      <div class="box shadowed-light px-4 py-6 text-sm">
        <img src="{{asset('images/invest/why-2.svg')}}" class="mx-auto">
        <h4 class="font-bold text-lg mt-4 mb-2">{{__('Стабильность')}}</h4>
        <p class="leading-tight">{{__('Энергетический сектор остаётся одной из самых надёжных отраслей для инвестиций.')}}</p>
      </div>
      <div class="box shadowed-light px-4 py-6 text-sm">
        <img src="{{asset('images/invest/why-3.svg')}}" class="mx-auto">
        <h4 class="font-bold text-lg mt-4 mb-2">{{__('Инновации')}}</h4>
        <p class="leading-tight">{{__('Использование новейших технологий, которые минимизируют риски и повышают рентабельность.')}}</p>
      </div>
    </div>
  </div>

  <div class="advantages mt-20">
    <div class="grid max-lg:grid-cols-1 grid-cols-2 gap-6">
      <div>
        <h2 class="text-4xl font-extrabold mb-6 basis-2/5"><b class="text-gradient">{{__('ПРЕИМУЩЕСТВА')}}</b></h2>
        <img class="mt-6" src="{{asset("images/invest/advantages.jpg")}}">
      </div>

      <div class="flex flex-col space-y-6 relative">
        <div class="bg
          absolute
          w-full
          h-full
          z-[-1]
          right-0
          top-[-28%]
          bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))]
          from-[#97F57E33]
          from-10%
          to-transparent
          to-65%"></div>
        <div class="box shadowed-light flex space-x-6 items-center px-6 py-4">
          <img src="{{asset("images/invest/advantages-1.svg")}}">
          <p class="text-sm">{{__('Высокая доходность в течение 15 лет.')}}</p>
        </div>
        <div class="box shadowed-light flex space-x-6 items-center px-6 py-4">
          <img src="{{asset("images/invest/advantages-2.svg")}}">
          <p class="max-lg:text-md text-sm">{{__('Прозрачность в финансовой и операционной деятельности.')}}</p>
        </div>
        <div class="box shadowed-light flex space-x-6 items-center px-6 py-4">
          <img src="{{asset("images/invest/advantages-3.svg")}}">
          <p class="text-sm">{{__('Участие в социально значимом проекте, который улучшает качество жизни в регионе.')}}</p>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
