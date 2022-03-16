@foreach($arr_tour as $row)
<!-- Background image -->
<div
    class="bg-image"
    style="
    background-image: url('{{ $row->IMGT }}');
    height: 400px;
  ">
    <h1 class="display-1 shadow-5" style="text-align: center; color: #fff700; font-family: Garamond; font-size: 8em">
        <b>{{ $row->CITY }}</b>
    </h1>
    <h6 class="display-6 mb-5" style="text-align: center; color: #f4fab6; font-size: 3em; font-family: 'Segoe Script'">
        {{ $row->NAME }}
    </h6>
</div>
<!-- Background image -->

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
            <li class="breadcrumb-item">
                <a href="{{route('tours_city_get',$row->ID_CITY)}}">
                    {{ $row->CITY }}
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                {{ $row->NAME }}
            </li>
        </ol>
    </nav>

    <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-0">
                <!-- Grid column -->
                <div class="col-8">
                    <!-- Links -->
                    <p style="font-size: 1.9em; font-family: 'Garamond';margin-bottom: 30px; text-align: justify">
                        {{ $row->ANONCE }}
                    </p>

                    <!--Карусель-->
                    <div id="carouselExampleControls" class="carousel slide" data-mdb-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ $row->IMG1 }}" class="d-block w-100" />
                            </div>
                            <div class="carousel-item">
                                <img src="{{ $row->IMG2 }}" class="d-block w-100"/>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ $row->IMG3 }}" class="d-block w-100"/>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <h1 style="margin: 60px 0 30px 0; font-family: 'Bookman Old Style'; text-align: center;color: #0a47a9">
                        Программа тура:
                    </h1>

                    <div class="accordion" id="accordionExample">
                        @foreach($arr_program as $id =>$row2 )
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="{{ $row2->HEAD }}">
                                <button
                                    class="accordion-button @if ($id!=0) collapsed @endif"
                                    type="button"
                                    data-mdb-toggle="collapse"
                                    data-mdb-target="#{{ $row2->COLLAPSE }}"
                                    aria-expanded="@if ($id==0 ) true @else false @endif "
                                    aria-controls="{{ $row2->COLLAPSE }}"
                                >
                                    <p style="font-size: 1.8em; font-family: 'Courier New'">
                                        <b>{{ $row2->DAY }} день </b>
                                    </p>
                                </button>
                            </h2>
                            <div id="{{ $row2->COLLAPSE }}" class="accordion-collapse collapse @if ($id==0 ) show @else @endif " aria-labelledby="{{ $row2->HEAD }}" data-mdb-parent="#accordionExample">
                                <div class="accordion-body" style="font-size: 1.7em; font-family: 'Garamond'">
                                    {{ $row2->PROGRAMM}}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>


                    <h1 style="margin: 60px 0 30px 0; font-family: 'Bookman Old Style'; text-align: center;color: #0a47a9">
                        Важно знать:
                    </h1>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-mdb-toggle="collapse"
                                    data-mdb-target="#flush-collapseOne"
                                    aria-expanded="false"
                                    aria-controls="flush-collapseOne"
                                >
                                    <p style="font-size: 1.5em; font-family: 'Courier New'">
                                        <b>Список личных вещей, которые нужно взять с собой</b>
                                    </p>
                                </button>
                            </h2>
                            <div
                                id="flush-collapseOne"
                                class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne"
                                data-mdb-parent="#accordionFlushExample"
                            >
                                <div class="accordion-body" style="font-size: 1.9em; font-family: 'Garamond'">
                                    <p>
                                    Паспорт,<br>
                                    Деньги,<br>
                                    Сертификат о прививках,<br>
                                    Смартфон,<br>
                                    Одежда,<br>
                                    Обувь,<br>
                                    Гигиенические средства.<br>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-mdb-toggle="collapse"
                                    data-mdb-target="#flush-collapseTwo"
                                    aria-expanded="false"
                                    aria-controls="flush-collapseTwo"
                                >
                                    <p style="font-size: 1.5em; font-family: 'Courier New'">
                                        <b>Входят ли билеты на самолет в стоимость тура?</b>
                                    </p>
                                </button>
                            </h2>
                            <div
                                id="flush-collapseTwo"
                                class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo"
                                data-mdb-parent="#accordionFlushExample"
                            >
                                <div class="accordion-body" style="font-size: 1.9em; font-family: 'Garamond'">
                                    <p>Нет. </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-mdb-toggle="collapse"
                                    data-mdb-target="#flush-collapseThree"
                                    aria-expanded="false"
                                    aria-controls="flush-collapseThree"
                                >
                                    <p style="font-size: 1.5em; font-family: 'Courier New'">
                                        <b>Включена ли страховка в стоимость тура?</b>
                                    </p>
                                </button>
                            </h2>
                            <div
                                id="flush-collapseThree"
                                class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree"
                                data-mdb-parent="#accordionFlushExample"
                            >
                                <div class="accordion-body" style="font-size: 1.9em; font-family: 'Garamond'">
                                    <p>Страховка не включена в стоимость.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h1 style="margin: 60px 0 30px 0; font-family: 'Bookman Old Style'; text-align: center;color: #0a47a9">
                        Отзывы:
                    </h1>

                    @foreach($arr_com as $row4)
                    <div class="card" style="margin-bottom: 30px">
                        <div class="card-header" style="font-size: 2em; font-family: 'Garamond Bold'; background-color: #486eee;color: white">
                            {{ $row4->AUTHOR }}
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p style="font-size: 1.5em">{{ $row4->TEXT }}</p>
                                <footer class="blockquote-footer">{{ $row4->DATE }}</footer>
                            </blockquote>
                        </div>
                    </div>
                    @endforeach
                        <form>
                            <!-- Name input -->
                            <div class="form-outline mb-2">
                                <input type="text" id="author1" class="form-control" />
                                <label class="form-label" for="form4Example1">Имя:</label>
                            </div>

                            <!-- Message input -->
                            <div class="form-outline mb-2">
                                <textarea class="form-control"
                                          id="message1"
                                          rows="4"
                                          style="min-height: 110px; font-size: 20px"
                                          data-mdb-container="body"
                                          data-mdb-toggle="popover"
                                          data-mdb-placement="left"
                                          data-mdb-content="Комментарий должен содержать минимум 25 символов!"
                                ></textarea>
                                <label class="form-label" for="form4Example3">Сообщение:</label>
                            </div>

                            <!-- Submit button -->
                            <input type="hidden" id="id_tour" value="{{$ID_TOUR}}"/>
                            <button type="submit" class="btn btn-primary btn-block mb-4" onclick=comment_add_tour()>Отправить</button>
                        </form>


                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-4 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <div class="card text-white bg-primary mb-3 " style="max-width: 28rem; position: -webkit-sticky;position: sticky; top: -1px">
                        <div class="card-header" style="text-align: center; font-size: 2.5em; font-family: 'Comic Sans MS'">
                            от {{ $row->COAST }} ₽
                        </div>
                        <div class="card-body">
                            <h4 class="card-title mb-4">
                                + Билеты до места начала тура
                            </h4>
                            <button type="button" class="btn btn-light mb-4" data-mdb-ripple-color="dark" onclick="show_fix()" style="display: block; margin: auto; font-size: 1.7em; display: flex">
                                Забронировать места
                            </button>

                            <h4 class="card-title mb-4" style="padding-left: 10px">
                                Продолжительность:
                            </h4>
                            <ul style="list-style: none; text-align: center;padding: 0  ">
                                <li style="display: inline-block">
                                    <img src="https://img.icons8.com/office/35/000000/sun--v1.png"/>
                                    <p class="card-text" style="font-size: 1.3em">
                                        {{ $row->DAY }}  @if($row->DAY == 2 or $row->DAY == 3 or $row->DAY == 4 ) дня @elseif($row->DAY == 1) день @else дней @endif
                                    </p>
                                </li>

                                <li style="display: inline-block; margin-left: 40px">
                                    <img src="https://img.icons8.com/external-prettycons-flat-prettycons/30/000000/external-moon-space-prettycons-flat-prettycons.png"/>
                                    <p class="card-text" style="font-size: 1.3em">
                                        {{ $row->NIGHT }} @if($row->NIGHT == 2 or $row->NIGHT == 3) ночи @elseif($row->NIGHT == 1) ночь @else ночей @endif
                                    </p>
                                </li>
                            </ul>


                            <h4 class="card-title mb-4" style="padding-left: 10px">
                                Даты набора группы:
                            </h4>
                            <ul>
                                @foreach($arr_date as $row1)
                                <li>
                                    <p class="card-text" style="font-size: 1.4em">
                                        {{ $row1->DATE_S }} - {{ $row1->DATE_E }}
                                    </p>
                                </li>
                                @endforeach
                            </ul>


                            <h4 class="card-title mb-4" style="padding-left: 10px">
                                Проживание во время тура:
                            </h4>
                            <ul style="list-style: none; text-align: center;padding: 0  ">
                                <li style="display: inline-block;">
                                    <img src="https://img.icons8.com/office/45/000000/5-star-hotel.png"/>
                                    <p class="card-text" style="font-size: 1.3em">
                                        {{ $row->HOTEL }} @if($row->HOTEL == 2 or $row->HOTEL == 3) ночи @elseif($row->HOTEL == 1) ночь @else ночей @endif
                                    </p>
                                </li>
                            </ul>

                            <h4 class="card-title mb-4" style="padding-left: 10px">
                                Место сбора группы:
                            </h4>

                            <p class="card-text" style="font-size: 1.3em; padding-left: 10px">
                                {{ $row->PLACE }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Grid column -->
            <!-- Grid row -->
        </div>
    </section>
</div>

</div>
@endforeach
@section('js_content')
    <script>
    function show_write_comment(){
        document.location.href = "{{route('write_comment_index', $ID_TOUR)}}";
    }

    function show_fix() {
        document.location.href = "{{route('booking_index')}}";
    }

    function comment_add_tour() {
        let author_data = document.getElementById("author1").value;
        let message_data = document.getElementById("message1").value;
        let id_tour_data = document.getElementById("id_tour").value;
        $.ajax({
        async: false,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type: 'POST',
        url: "{{route('comments_tour_add')}}",
        data: {
        author : author_data,
        message : message_data,
        id_tour : id_tour_data
    },
        success: function (data) {
        console.log(data['message']);
        alert (data['message']);
        $('#myform')[0].reset();
    }
    });
    }
    </script>
@endsection
