@extends('layouts.web')
@section('title', 'Контакты')

@section('content')

<section id="main" class="container 2xl:max-w-6xl xl:max-w-6xl mx-auto max-lg:mt-24 max-md:text-center">
  <div class="stats mt-28 relative">
    <h2 class="text-4xl font-extrabold mb-2"><b class="text-gradient">СВЯЖИТЕСЬ С НАМИ</b></h2>
    <p class="text-sm">Мы всегда готовы ответить на ваши вопросы и предложить решения:</p>
    <div class="grid grid-cols-2 gap-6 mt-6">
      <div class="box shadowed-light p-6">
        <div class="box blue mb-4 p-6">
          <img src="{{asset('images/contact/contact-1.svg')}}" class="m-auto">
        </div>
        <h4 class="font-bold text-lg mt-4 mb-2">Рабочее время</h4>
        <p class="leading-tight text-sm">
          Понедельник — пятница: 9:00–18:00<br>
          Суббота — воскресенье: выходной
        </p>
      </div>
      <div class="box shadowed-light p-6">
        <div class="box cyan mb-4 relative">
          <div class="bg absolute w-full h-full bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-[#10182824] from-10% to-transparent to-50%"></div>
          <img src="{{asset('images/contact/contact-2.svg')}}" class="m-auto relative p-6 z-[1]">
        </div>
        <h4 class="font-bold text-lg mt-4 mb-2">Контакты</h4>
        <ul class="leading-tight text-sm list-disc pl-6">
          <li><b>Адрес офиса:</b> Бишкек, Кыргызстан, ул. Абдумомунова, 25.</li>
          <li><b>Телефон:</b> +996 (XXX) XXX-XXX</li>
          <li><b>Электронная почта:</b> ceo@ortaasyainvest.com</li>
        </ul>
      </div>
    </div>
    <div class="bg absolute z-[-1] w-[650px] h-[650px] left-[-300px] top-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-[#36F9F950] from-10% to-transparent to-65%"></div>
  </div>
</section>

@endsection
