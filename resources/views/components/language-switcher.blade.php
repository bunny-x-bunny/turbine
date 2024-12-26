@props(['id'])

<button id="{{$id}}_button" data-dropdown-toggle="{{$id}}"
        class="w-12 ml-4 mb-1 focus:ring-1 focus:outline-none focus:ring-blue-200 text-center inline-flex items-center"
        type="button">
  <x-icon name="flag-language-{{ App::currentLocale() }}" />
  <svg class="w-2.5 h-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
  </svg>
</button>

<!-- Dropdown menu -->
<div id="{{$id}}" class="z-10 hidden w-9">
    <ul class="text-sm space-y-1" aria-labelledby="{{$id}}_button">
      @foreach(config('app.available_locales') as $locale_name => $locale_code)
        @if($locale_code != App::currentLocale())
          <li><a href="{{url("/language/$locale_code")}}" title="{{$locale_name}}">
              <x-icon name="flag-language-{{ $locale_code }}" />
          </a></li>
        @endif
      @endforeach
    </ul>
</div>
