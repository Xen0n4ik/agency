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

    <div class="card mb-4" style="background-color: #0b62e2">
        <div class="card-body">
                <div class="row">
                    <div class="row" >
                        <div class="col-sm" style="display: inline-block">
                            <form action="" method="post">
                                @csrf
                                <div>
                                    <label class="form-label" style="margin-right: 20px; color: #f6f9ff; font-family: 'Georgia'; font-size: 25px;">Цена:  </label>
                                    <label style=" color: #f6f9ff; font-family: 'Georgia'; font-size: 25px;"> от
                                        <select name="start" style="font-family: 'Georgia'; font-size: 21px; margin: 0 10px 0 10px;">
                                            <?php
                                            for ($n = 0; $n <= 50000; $n+=5000)
                                            {
                                                echo "<option>$n</option>";
                                            }
                                            ?>
                                        </select></label>
                                    <label style=" color: #f6f9ff; font-family: 'Georgia'; font-size: 25px; "> до
                                        <select name="end" style="font-family: 'Georgia'; font-size: 21px; margin-left: 10px;">
                                            <?php
                                            for ($n = 5000; $n <= 50000; $n+=5000)
                                            {
                                                echo "<option>$n</option>";
                                            }
                                            ?>
                                        </select></label>
                                </div>

                                <div>
                                    <label class="form-label" style="margin-right: 20px; color: #f6f9ff; font-family: 'Georgia'; font-size: 25px">Продолжительность: </label>
                                    <select name="period" style="font-family: 'Georgia'; font-size: 21px">
                                        <?php
                                        for ($n = 2; $n <= 12; $n++)
                                        {
                                            echo "<option>$n</option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div>
                                    <label class="form-label " style="margin-right: 20px; color: #f6f9ff; font-family: 'Georgia'; font-size: 25px">Сортировать по: </label>
                                    <select name="sorting" style="font-family: 'Georgia'; font-size: 21px; margin-bottom: 10px ">
                                        <?php
                                            $sort_list = array( 1 =>  "А-Я", "Я-А", "По цене (убывание)" , "По цене (возрастание)", "Горячие туры");
                                            for ($n = 1; $n <= 5; $n++)
                                            {
                                                echo "<option value='$n'>$sort_list[$n]</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </form>
                        </div>

                            <div class="col-sm" >
                                <div class="md-form md-outline input-with-post-icon datepicker" >
                                    <label class="form-label" style=" color: #f6f9ff; font-family: 'Georgia'; font-size: 25px">Дата отправления:</label>
                                    <input placeholder="Select date" type="date" name="calendar" id="example" class="form-control mb-3" style="font-family: 'Georgia'; font-size: 22px;">
                                </div>
                            </div>
                </div>
            </div>

            <button type="button" class="btn btn-light mt-4" data-mdb-ripple-color="dark"
                    style="width: 100%; text-align: center; font-size: 21px; font-family: Georgia;color: #161628"
            >
                Показать</button>

        </div>
    </div>

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
