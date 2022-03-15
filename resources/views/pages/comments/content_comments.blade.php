<h1 class="display-1 " style="text-align: center"><b>Отзывы</b></h1>
<h6 class="display-6 mb-5" style="text-align: center; color: #2d3748">о нашем сервесе</h6>

<div class="container">
    <div class="row g-2">
        @foreach ($arr as $row)

        <div class="col-6">
            <div class="card  m-lg-4" style="max-width: 650px;">
                <div class="row g-0">

                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $row->NAME }}
                                </h5>
                                <p class="card-text">{{ $row->ANONS }}
                                </p>
                                <p class="card-text">
                                    <small class="text-muted">{{ $row->DATE }}
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
