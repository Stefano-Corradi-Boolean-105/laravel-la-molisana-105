@php
    $main_menu = config('menues.main_menu');
@endphp

<header>
    <div class="logo">
      <img src="/img/logo-molisana.png" alt="Logo Molisana">
    </div>
    <nav class="main-menu">
      <ul>
        @foreach ($main_menu as $item)
            <li>
                <a class="{{ Route::currentRouteName() === $item['name'] ? 'active' : '' }}" href="{{ route($item['name'] ) }}">{{ $item['text'] }} </a>
            </li>
        @endforeach
        {{-- <li><a class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
        <li><a class="{{ Route::currentRouteName() === 'products' ? 'active' : '' }}" href="{{ route('products') }}">Prodotti</a></li>
        <li><a class="{{ Route::currentRouteName() === 'about' ? 'active' : '' }}" href="{{ route('about') }}">Chi siamo</a></li>
        <li><a class="{{ Route::currentRouteName() === 'contacts' ? 'active' : '' }}" href="{{ route('contacts') }}">Contatti</a></li> --}}
      </ul>
    </nav>
  </header>
