<div class="ui grid">
  <div class="ui mobile only row container">
    <div class="ui dropdown icon item">
      <i class="bars icon"></i>
      <div class="menu">
        <a class="item" href="{{ route('home') }}"><i class="home icon"></i>Inicio</a>
        <div class="divider"></div>
        <a class="item" href="#"><i class="folder open icon"></i>Documentación</a>
        <a class="item" href="#"><i class="handshake icon"></i>Empresas</a>
        <a class="item" href="#"><i class="sync alternate icon"></i>Procesos</a>
      </div>
    </div>
  </div>
  <div class="tablet computer only row">
    <a class="item" href="{{ route('home') }}">Inicio</a>
    <a class="item" href="#">Documentación</a>
    <a class="item" href="#">Empresas</a>
    <a class="item" href="#">Procesos</a>
  </div>
</div>
<div class="right menu">
  @auth
    <div class="ui compact dropdown item">
      {{Auth::user()->username}}
      <i class="dropdown icon"></i>
      <div class="menu">
        <a class="item"><i class="user icon outline"></i>Perfil de usuario</a>
        <div class="divider"></div>
        <a class="item"><i class="door open alternate icon"></i>Cerrar sesión</a>
      </div>
    </div>
  @endauth
  @guest
    @if(\Illuminate\Support\Facades\Route::currentRouteName()!=='login' && \Illuminate\Support\Facades\Route::currentRouteName()!=='register')
      <div class="item">
        <a href="{{ route('login') }}" class="ui inverted animated fade button" tabindex="0">
          <div class="visible content">¿Ya estudias aquí?</div>
          <div class="hidden content">Inicia sesión ahora</div>
        </a>
      </div>
    @endif
  @endguest
</div>