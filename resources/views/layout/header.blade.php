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
            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            <div class="d-flex align-items-center">
                <form class="d-flex input-group w-auto">
                    <input
                        type="search"
                        class="form-control rounded"
                        placeholder="Поиск"
                        aria-label="Search"
                        aria-describedby="search-addon"
                    />
                    <span class="input-group-text border-0" id="search-addon">
                                <i class="fas fa-search"></i>
                            </span>
                </form>
                <button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-ripple-color="dark"
                        data-mdb-toggle="modal"
                        data-mdb-target="#exampleModalToggle1" href="#" role="button" style="font-size: 17px"> Войти
                </button>
            </div>


            <!-- Modal auth-->
            <!-- First modal dialog -->
            <div class="modal fade" id="exampleModalToggle1" aria-hidden="true"
                 aria-labelledby="exampleModalToggleLabel1" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel1" style="font-size: 30px">Вход</h5>
                            <button type="button" class="btn-close" data-mdb-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="text-align: justify">
                            <form name="formSingIn">
                                <div class="form-outline mb-4">
                                    <input type="email" id="typeEmail" name="authEmail" class="form-control"/>
                                    <label class="form-label" for="typeEmail">E-mail:</label>
                                </div>

                                <div class="form-outline mb-2">
                                    <input type="password" id="typePassword" id="authPassword" class="form-control"/>
                                    <label class="form-label" for="typePassword">Пароль:</label>
                                </div>

                                <div style="text-align: right">
                                    <label for="customRange3" class="form-label mb-2" style="color: #0a47a9;"
                                           data-mdb-toggle="modal" href="#exampleModalToggle33"> Забыли пароль?</label>
                                </div>

                                <div>
                                    <button type="submit" name="sendSingIn" href="{{route('login_account')}}" class="btn btn-primary btn-block mb-4"
                                            style="font-size: 16px">
                                        Войти
                                    </button>
                                </div>

                                <div style="text-align: center">
                                    <label for="customRange3" class="form-label mb-4"> У меня нет аккаунта. <a
                                            style="color: #0a47a9;" data-mdb-toggle="modal"
                                            href="#exampleModalToggle22">Зарегистрироваться</a></label>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <div style="text-align: left">
                                <label for="customRange3" class="form-label">
                                    Нажимая на кнопку, я даю <a style="color: #0a47a9;"
                                                                href="{{route('agreement_index')}}" target="_blank">
                                        Согласие на обработку и передачу персональных данных</a>,
                                    ознакомлен и принимаю условия <a style="color: #0a47a9;"
                                                                     href="{{route('user_agreement_index')}}"
                                                                     target="_blank"> Пользовательского соглашения</a>.
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second modal dialog -->
            <div class="modal fade" id="exampleModalToggle22" aria-hidden="true"
                 aria-labelledby="exampleModalToggleLabel22" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel22" style="font-size: 30px">
                                Регистрация</h5>
                            <button type="button" class="btn-close" data-mdb-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="text-align: justify">
                            <div class="form-outline mb-4">
                                <input type="email" id="typeEmail" class="form-control"/>
                                <label class="form-label" for="typeEmail">E-mail:</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" id="typePassword" class="form-control"/>
                                <label class="form-label" for="typePassword">Пароль:</label>
                            </div>

                            <div>
                                <button type="submit" class="btn btn-primary btn-block mb-4" style="font-size: 16px">
                                    Войти
                                </button>
                            </div>

                            <div style="text-align: center">
                                <label for="customRange3" class="form-label mb-4"> У меня есть аккаунт. <a
                                        style="color: #0a47a9;" data-mdb-toggle="modal" href="#exampleModalToggle1">Войти</a></label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div style="text-align: left">
                                <label for="customRange3" class="form-label">
                                    Нажимая на кнопку, я даю <a style="color: #0a47a9;" data-mdb-toggle="modal"
                                                                href="{{route('agreement_index')}}"> Согласие на
                                        обработку и передачу персональных данных</a>,
                                    ознакомлен и принимаю условия <a style="color: #0a47a9;"
                                                                     href="{{route('user_agreement_index')}}"
                                                                     target="_blank"> Пользовательского соглашения</a>.
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Third modal dialog -->
            <div class="modal fade" id="exampleModalToggle33" aria-hidden="true"
                 aria-labelledby="exampleModalToggleLabel33" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel33" style="font-size: 30px">
                                Восстановление аккаунта</h5>
                            <button type="button" class="btn-close" data-mdb-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="text-align: justify">
                            <div class="form-outline mb-4">
                                <input type="email" id="typeEmail" class="form-control"/>
                                <label class="form-label" for="typeEmail">E-mail:</label>
                            </div>

                            <div>
                                <button type="submit" class="btn btn-primary btn-block mb-4" style="font-size: 16px"
                                        data-mdb-toggle="modal" href="#exampleModalToggle44">Продолжить
                                </button>
                            </div>

                            <div style="text-align: center">
                                <label for="customRange3" class="form-label mb-4"> Я вспомнил пароль. <a
                                        style="color: #0a47a9;" data-mdb-toggle="modal" href="#exampleModalToggle1">Войти</a></label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div style="text-align: left">
                                <label for="customRange3" class="form-label">
                                    Нажимая на кнопку, я даю <a style="color: #0a47a9;" data-mdb-toggle="modal"
                                                                href="{{route('agreement_index')}}"> Согласие на
                                        обработку и передачу персональных данных</a>,
                                    ознакомлен и принимаю условия <a style="color: #0a47a9;"
                                                                     href="{{route('user_agreement_index')}}"
                                                                     target="_blank"> Пользовательского соглашения</a>.
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Send message modal dialog -->
            <div class="modal fade" id="exampleModalToggle44" aria-hidden="true"
                 aria-labelledby="exampleModalToggleLabel44" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-mdb-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>

                        <div class="modal-body" style="text-align: justify">
                            <img src="/img/write.png" style="max-width: 100px; display:block; margin: auto;">
                            <h2 style="text-align: center;margin-top: 20px;">Мы отправили Вам письмо</h2>
                            <h4 style="text-align: center;margin-top: 20px;color: #404b5f; font-family: 'Malgun Gothic'">
                                На почту (адрес)<br>
                                отправлено письмо со ссылкой<br>
                                для смены пароля.
                            </h4>

                            <h6 style="text-align: center;margin-top: 20px;color: #404b5f; font-family: 'Malgun Gothic'; margin-top: 40px">
                                Повторно отправить сообщение
                            </h6>
                        </div>

                        <div class="modal-footer">
                            <div style="text-align: left">
                                <label for="customRange3" class="form-label"
                                       style="font-size: 17px; text-align: center">
                                    Если Вы не видите письмо, не забудьте проверить "Спам".
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
</header>


