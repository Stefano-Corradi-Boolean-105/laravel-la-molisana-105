@php
    $main_menu = config('menues.main_menu');
    $menu_pastificio = config('menues.pastificio');
    $menu_prodotti = config('menues.prodotti');
@endphp

<footer >
    <div class="top container">

      <div class="logo">
        <img src="/img/logo-molisana.png" alt="Logo Molisana">
      </div>

      <nav>
        <h4>menu</h4>
           <ul>
                @foreach ($main_menu as $item )
                    <li><a href="{{ route($item['name']) }}">{{ $item['text'] }}</a></li>
                @endforeach
          </ul>
      </nav>

      <nav>
        <h4>pastificio</h4>
        <ul>
            @foreach ($menu_pastificio as $item )
                <li><a href="#">{{ $item['text'] }}</a></li>
            @endforeach
        </ul>
      </nav>

      <nav>
        <h4>prodotti</h4>
        <ul>
            @foreach ($menu_prodotti as $item )
                <li><a href="#">{{ $item['text'] }}</a></li>
            @endforeach
        </ul>
      </nav>

    </div>
    <div class="bottom">
      <img src="{{ Vite::asset('resources/img/footer.jpg') }}" alt="Montagne">
    </div>
  </footer>
