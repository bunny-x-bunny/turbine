@extends('layouts.web')
@section('title', 'Новости')

@section('content')

<section id="main" class="container 2xl:max-w-6xl xl:max-w-6xl mx-auto max-lg:mt-24 max-md:text-center">
  <div class="future flex max-md:flex-col max-md:gap-5 items-center w-full linear-gradient text-white p-9 rounded-b-[60px]">
    <div class="basis-1/2 md:mr-12 font-medium">
      <h2 class="text-4xl font-extrabold mb-6">БУДУЩИЕ ИНИЦИАТИВЫ</h2>
      <p>Мы регулярно публикуем обновления о ходе проекта, а также информацию о новых партнёрствах и социальных программах, связанных с модернизацией ТЭЦ.</p>
    </div>
    
    <div class="basis-1/2 flex justify-center">
      <img src="{{asset('images/news/future.svg')}}" class="w-[420px] -mb-9">
    </div>
  </div>

  <div class="news mt-20 mb-20">
    <h2 class="text-4xl font-extrabold mb-6 basis-2/5">АКТУАЛЬНЫЕ <b class="text-gradient">СОБЫТИЯ</b></h2>
    <div class="grid gap-3 text-white font-semibold">
      <div class="rounded-[38px] h-[300px] bg-cover bg-center p-4 flex items-end filter" style="background-image: url('{{asset('images/news/news-1.jpg')}}');">
        <div class="bg-[#FFFFFF4D] p-2 rounded-lg max-w-[90%] leading-tight">Подписание инвестиционного соглашения с Кабинетом Министров Кыргызской Республики — сентябрь 2024 года.</div>
      </div>
      <div class="rounded-[38px] h-[300px] bg-cover bg-center p-4 flex items-end" style="background-image: url('{{asset('images/news/news-2.jpg')}}');">
        <div class="bg-[#FFFFFF4D] p-2 rounded-lg max-w-[90%] leading-tight">Начало работ по проектированию и согласованию планов — ожидается завершение в 2025 году.</div>
      </div>
      <div class="rounded-[38px] h-[300px] bg-cover bg-center p-4 flex items-end" style="background-image: url('{{asset('images/news/news-3.jpg')}}');">
        <div class="bg-[#FFFFFF4D] p-2 rounded-lg max-w-[90%] leading-tight">Монтаж и тестирование оборудования начнутся в 2026 году.</div>
      </div>
      <div class="rounded-[38px] h-[300px] bg-cover bg-center p-4 flex items-end" style="background-image: url('{{asset('images/news/news-4.jpg')}}');">
        <div class="bg-[#FFFFFF4D] p-2 rounded-lg max-w-[90%] leading-tight">Ввод объекта в эксплуатацию и начало коммерческой эксплуатации в 2027 году.</div>
      </div>
    </div>
  </div>
</section>

@endsection
