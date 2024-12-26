<footer class="mt-16 pt-16 lg:px-5 text-center text-sm text-white">
  <div class="container 2xl:max-w-6xl xl:max-w-6xl mx-auto flex justify-between space-x-6 text-left
    max-lg:flex-col max-lg:items-center max-lg:text-center max-lg:space-x-0
  ">
    <div class="max-lg:mb-6">
      <h3 class="text-xl font-bold mb-6"><a href="mailto:ceo@ortaasyainvest.com">ceo@ortaasyainvest.com</a></h3>
      <p><b>{{__('Адрес')}}:</b><br>
        <span class="text-gray-400 font-normal">{!!__('Проспект Чынгыза Айтматова,<br>243 - БЦ "Бакай Банк", 4 этаж')!!}</span>
      </p>
    </div>
    <div>
      <p><a href="{{route('news')}}">{{__('Новости')}}</a></p>
      <p><a href="{{route('invest')}}">{{__('Инвесторам')}}</a></p>
    </div>
    <div>
      <p><a href="{{route('about')}}">{{__('О Нас')}}</a></p>
      <p>{{__('Услуги')}}</p>
      <p>{{__('Наши телхнологии и возможности')}}</p>
    </div>
    <div>
      <p>{{__('Контакты')}}</p>
      <p>+996 703 927 086</p>
    </div>
  </div>
  <p class="pt-10 pb-4">© Orta Asya Investment Holding - 2024<br>
    All rights reserved
  </p>
  <!--p class="pt-10 pb-4">Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p-->
</footer>
