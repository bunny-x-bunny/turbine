@extends('layouts.web')
@section('title', __('Контакты'))

@section('content')

<section id="main" class="container lg:px-5 2xl:max-w-6xl xl:max-w-6xl mx-auto max-lg:mt-24 max-md:text-center">
  <div class="stats mt-28 relative">
    <h2 class="text-4xl font-extrabold mb-2"><b class="text-gradient">{{__('СВЯЖИТЕСЬ С НАМИ')}}</b></h2>
    <p class="text-sm">{{__('Мы всегда готовы ответить на ваши вопросы и предложить решения')}}:</p>

    <div class="grid max-sm:grid-cols-1 grid-cols-2 gap-6 mt-6">
      <div class="box shadowed-light p-6">
        <div class="box blue mb-4 p-6">
          <img src="{{asset('images/contact/contact-1.svg')}}" class="m-auto">
        </div>
        <h4 class="font-bold text-lg mt-4 mb-2">{{__('Рабочее время')}}</h4>
        <p class="leading-tight text-sm">
          {{__('Понедельник')}} — {{__('пятница')}}: 9:00–18:00<br>
          {{__('Суббота')}} — {{__('воскресенье')}}: {{__('выходной')}}
        </p>
      </div>
      <div class="box shadowed-light p-6">
        <div class="box cyan mb-4 relative">
          <div class="bg absolute w-full h-full bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-[#10182824] from-10% to-transparent to-50%"></div>
          <img src="{{asset('images/contact/contact-2.svg')}}" class="m-auto relative p-6 z-[1]">
        </div>
        <h4 class="font-bold text-lg mt-4 mb-2">{{__('Контакты')}}</h4>
        <ul class="leading-tight text-sm text-left list-disc pl-6">
          <li><b>{{__('Адрес офиса')}}:</b> {!!__('Проспект Чынгыза Айтматова, <br>243 - БЦ "Бакай Банк", 4 этаж')!!}.</li>
          <li><b>{{__('Телефон')}}:</b> <a href="tel:+996509222299">+996 509 222 299</a></li>
          <li><b>{{__('Электронная почта')}}:</b> <a href="mailto:ceo@ortaasyainvest.com">ceo@ortaasyainvest.com</a></li>
        </ul>
      </div>
    </div>
    <div class="bg absolute z-[-1] w-[650px] h-[650px] left-[-300px] top-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-[#36F9F950] from-10% to-transparent to-65%"></div>
  </div>
</section>

@endsection
