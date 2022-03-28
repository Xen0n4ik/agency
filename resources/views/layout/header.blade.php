<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2 mt-lg-0" href="{{route('welcome')}}">
                    <img
                        src="/img/logotype2.svg"
                        height="70"
                        loading="lazy"
                    />
                </a>
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('cities_index')}}" style="font-size: 1.8em">
                            Города
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about_index')}}" style="font-size: 1.8em">
                            О нас
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('comments_serv_print')}}" style="font-size: 1.8em">
                            Отзывы
                        </a>
                    </li>
                </ul>
                <!-- Left links -->

            </div>
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
</header>



