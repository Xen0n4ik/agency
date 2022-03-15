<!-- Carousel wrapper -->
<div id="carouselDarkVariant" class="carousel slide carousel-fade carousel-dark mb-2" data-mdb-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators">
        <button
            data-mdb-target="#carouselDarkVariant"
            data-mdb-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
        ></button>
        <button
            data-mdb-target="#carouselDarkVariant"
            data-mdb-slide-to="1"
            aria-label="Slide 1"
        ></button>
        <button
            data-mdb-target="#carouselDarkVariant"
            data-mdb-slide-to="2"
            aria-label="Slide 1"
        ></button>
        <button
            data-mdb-target="#carouselDarkVariant"
            data-mdb-slide-to="3"
            aria-label="Slide 1"
        ></button>
        <button
            data-mdb-target="#carouselDarkVariant"
            data-mdb-slide-to="4"
            aria-label="Slide 1"
        ></button>
    </div>


    <!-- Inner -->
    <div class="carousel-inner">
        <!-- Single item -->
        @foreach($arr_carousel as $id =>$row )
        <div class="carousel-item @if ($id==0 ) active @else @endif">
            <a class="nav-link" href="{{route('tours_city_get', $row -> ID_CITY)}}">
                <img src="{{$row->IMG}}" class="d-block w-100"/>
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="text-white ">
                        {{$row->NAME}}
                    </h1>
                    <h4 class="text-white ">
                        {{$row->ANONCE}}
                    </h4>
                </div>
            </a>
        </div>
    @endforeach
    </div>
    <!-- Inner -->

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselDarkVariant" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-mdb-target="#carouselDarkVariant" data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Carousel wrapper -->

