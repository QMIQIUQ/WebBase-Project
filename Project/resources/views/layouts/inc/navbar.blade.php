<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">Phone Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">


      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">


        <li class="nav-item">
          <a class="nav-link active" href="{{ url('home') }}">Home <i class="fas fa-home"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('product') }}">Product <i class="fas fa-shopping-bag"></i></a>
        </li>





        @guest
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{ url('myCart') }}"><i class="fas fa-cart-plus"></i><span
              class="badge bg-danger">{{Session()->get('cartItem')}}</span></a>
        </li>
        @endguest


        @guest
        @if (Route::has('login'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @endif

        @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            {{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ url('myOrder') }}">My Order</a></li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li><a class="dropdown-item" href="{{url('/dashboard')}}">
                @if (Auth::user()->role_as == 1)
                Admin Dashboard
                @endif
              </a></li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li>
              <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>

            </li>

          </ul>
        </li>
        @endguest

      </ul>

    </div>
  </div>
</nav>