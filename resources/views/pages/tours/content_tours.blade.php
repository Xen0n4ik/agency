<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{route('welcome')}}">
                    Главная
                </a>
            </li>

            <li class="breadcrumb-item">
                <a href="{{route('cities_index')}}">
                    Города
                </a>
            </li>

            <li class="breadcrumb-item active" aria-current="page">
                Туры
            </li>
        </ol>
    </nav>

    <div class="row g-2">

        @foreach($arr_tours as $row)
            <div class="col-6">
                <div class="p-3">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="{{ $row->IMG }}" class="img-fluid"/>
                            <a href="{{route('tour_get', [$row->ID_CITY, $row->ID_TOUR])}}">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $row->NAME }}
                            </h5>
                            <p class="card-text">
                                Цена {{ $row->COAST }} ₽
                            </p>
                            <a href="{{route('tour_get', [$row->ID_CITY, $row->ID_TOUR])}}" class="btn btn-primary">
                                Посмотреть
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
