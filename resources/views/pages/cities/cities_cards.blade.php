<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{route('welcome')}}">
                    Главная
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Города
            </li>
        </ol>
    </nav>

    <div class="row g-2">
        @foreach ($arr as $row)
            <div class="col-6">
                <div class="p-3">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="{{ $row->IMG }}" class="img-fluid"/>
                            <a href="{{route('tours_city_get', $row->ID_CITY)}}">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $row->NAME }}
                            </h5>
                            <p class="card-text">
                                {{ $row->ANONCE }}
                            </p>
                            <a href="{{route('tours_city_get',$row->ID_CITY)}}" class="btn btn-primary">
                                Посмотреть
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
