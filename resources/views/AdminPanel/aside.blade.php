<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: green !important;">

    <a href="/" class="brand-link">

        <img src="{{ asset('img/temple/unisierra.png') }}" alt="" class="brand-image img-circle elevation-3"
            style="opacity: .8">

        <span class="brand-text font-weight-light">Unisierra</span>

    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('img/temple/osos_alfa.png') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::guard('finance')->user()->name }}</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{route('finance.home')}}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Inicio
                        </p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{route('finance.debit')}}" class="nav-link">
                        <i class="nav-icon fas fa-credit-card"></i>
                        <p>
                            Adeudos
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('finance.user')}}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Mi cuenta
                        </p>
                    </a>
                </li>

            </ul>

        </nav>

    </div>

</aside>