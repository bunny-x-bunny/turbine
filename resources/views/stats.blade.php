@extends('layouts.web')
@section('title', 'Основные показатели')

@section('content')

<section id="main" class="container 2xl:max-w-6xl xl:max-w-6xl mx-auto max-lg:mt-24 max-md:text-center">
  <div class="stats mt-28 relative">
    <div class="bg absolute z-[-1] w-[724px] h-[686px] left-[-282px] top-[-180px] bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-[#E6F9FD] via-transparent to-transparent"></div>
    <h2 class="text-4xl font-extrabold mb-2">ОСНОВНЫЕ <b class="text-gradient">ПОКАЗАТЕЛИ</b></h2>
    <p class="text-sm">Энергетические возможности</p>
    <div class="grid grid-cols-3 gap-6 text-center mt-6">
      <div class="box shadowed-light px-4 py-6 text-sm">
        <img src="{{asset('images/stats/stats-1.svg')}}" class="mx-auto">
        <h4 class="font-bold text-lg mt-4 mb-2">Производительность</h4>
        <p class="leading-tight">до 1,5 млрд кВт·ч в год.</p>
      </div>
      <div class="box shadowed-light px-4 py-6 text-sm">
        <img src="{{asset('images/stats/stats-2.svg')}}" class="mx-auto">
        <h4 class="font-bold text-lg mt-4 mb-2">Тепловая энергия</h4>
        <p class="leading-tight">777,6 тыс. Гкал ежегодно.</p>
      </div>
      <div class="box shadowed-light px-4 py-6 text-sm">
        <img src="{{asset('images/stats/stats-3.svg')}}" class="mx-auto">
        <h4 class="font-bold text-lg mt-4 mb-2">Использование природного газа</h4>
        <p class="leading-tight">до 100 тыс. м³/час.</p>
      </div>
    </div>
  </div>

  <div class="ecology mt-20">
    <div class="grid grid-cols-2 gap-6">
      <div>
        <h2 class="text-4xl font-extrabold mb-6">ЭКОЛОГИЧЕСКИЕ <b class="text-gradient">ДОСТИЖЕНИЯ</b></h2>
        <div class="box shadowed-light p-6">
          <div class="box green mb-4">
            <img src="{{asset('images/stats/ecology-1.svg')}}" class="m-auto">
          </div>
          <p class="font-semibold">Снижение выбросов твёрдых частиц на 80%</p>
        </div>
      </div>
      <div class="box flex flex-col shadowed-light p-6">
        <div class="box cyan flex flex-grow mb-4">
          <img src="{{asset('images/stats/ecology-2.svg')}}" class="m-auto">
        </div>
        <p class="font-semibold">Устранение угольной генерации в Бишкеке, что сокращает смоги зимой.</p>
      </div>
    </div>
  </div>

  <div class="social flex items-center w-full mt-20">
    <div class="basis-1/3 relative">
      <div class="bg absolute z-[-1] w-[650px] h-[600px] left-[-400px] top-[-50px] bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-[#97F57E33] via-[#97F57E10] to-transparent"></div>
      <h2 class="text-4xl font-extrabold mb-6">СОЦИАЛЬНЫЙ <b class="text-gradient">ЭФФЕКТ</b></h2>
      <p class="text-sm leading-tight">Проект обеспечивает энергией более 100 000 домохозяйств и предприятий, а также способствует развитию малых и средних предприятий, которые получают доступ к более надёжным источникам энергии.</p>
    </div>
    <div class="basis-2/3 flex justify-center relative">
      <img src="{{asset('images/stats/social.png')}}" class="w-[600px] ml-auto">
      <img src="{{asset('images/stats/social-1.png')}}" class="absolute top-8 left-32 scale-75 shadow-[0px_80px_232px_0px_#0030793D]">
      <img src="{{asset('images/stats/social-2.png')}}" class="absolute bottom-8 left-16 scale-75 shadow-[0px_80px_232px_0px_#0030793D]">
    </div>
  </div>
</section>

@endsection