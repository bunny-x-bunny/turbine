@php($menu = [
  'home' => __('Главная'),
  'about' => __('О Нас'),
  'projects' => __('Проекты'),
  'stats' => __('Основные показатели'),
  'news' => __('Новости'),
  'invest' => __('Инвесторам'),
  'contact' => __('Контакты')
])

<header>
  <div class="max-lg:hidden lg:flex container 2xl:max-w-6xl xl:max-w-6xl mx-auto mt-3 lg:px-5">
    <nav class="flex max-w-screen-lg space-x-10 max-xl:space-x-5 mx-auto items-center justify-between text-sm">
      @foreach($menu as $route => $trans)
        <a href="{{route($route)}}" class="{{ Request::routeIs($route) ? 'font-bold' : '' }}">
          {{$trans}}
        </a>
      @endforeach
    </nav>
    <x-language-switcher id="language_btn1" />
    <button type="button" class="btn linear-gradient ml-4">{{__('Связаться с нами')}}</button>
  </div>

  <nav class="lg:hidden fixed z-20 top-0 start-0 w-full bg-white border-gray-200 dark:bg-gray-900" style="max-width: 100vw;">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
          <!--img src="" class="h-8" alt="Logo" /-->
      </a>
      <div class="flex space-x-3 rtl:space-x-reverse">
          <x-language-switcher id="language_btn2" />
          <button type="button" class="btn linear-gradient">{{__('Связаться с нами')}}</button>
          <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
            <span class="sr-only">{{__('Открыть меню')}}</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
      </div>
      <div class="items-center justify-between hidden w-full" id="navbar-cta">
        <ul class="flex flex-col font-medium p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 rtl:space-x-reverse dark:bg-gray-800 dark:border-gray-700">
          @foreach($menu as $route => $trans)
            @if(Request::routeIs($route))
              <li><a href="{{route($route)}}" class="block py-2 px-3 rounded text-white" aria-current="page">{{$trans}}</a>
            @else
              <li><a href="{{route($route)}}" class="block py-2 px-3 rounded text-gray-900 hover:bg-gray-100">{{$trans}}</a>
            @endif
          @endforeach
        </ul>
      </div>
    </div>
  </nav>
</header>
