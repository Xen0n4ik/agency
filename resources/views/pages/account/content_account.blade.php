<div class="container">
    <!-- Pills navs -->
    <ul class="nav nav-pills nav-fill mb-3" id="ex1" role="tablist">
        <li class="nav-item" role="presentation">
            <a
                class="nav-link active"
                id="ex2-tab-1"
                data-mdb-toggle="pill"
                href="#ex2-pills-1"
                role="tab"
                aria-controls="ex2-pills-1"
                aria-selected="true"
            ><i class="fas fa-shopping-cart"></i>
                Заказы</a
            >
        </li>
        <li class="nav-item" role="presentation">
            <a
                class="nav-link"
                id="ex2-tab-2"
                data-mdb-toggle="pill"
                href="#ex2-pills-2"
                role="tab"
                aria-controls="ex2-pills-2"
                aria-selected="false"
            ><i class="fas fa-heart"></i>
                Избранное</a
            >
        </li>
        <li class="nav-item" role="presentation">
            <a
                class="nav-link"
                id="ex2-tab-3"
                data-mdb-toggle="pill"
                href="#ex2-pills-3"
                role="tab"
                aria-controls="ex2-pills-3"
                aria-selected="false"
            ><i class="fas fa-sliders-h"></i>
                Настройки</a
            >
        </li>
    </ul>
    <!-- Pills navs -->

    <!-- Pills content -->
    <div class="tab-content" id="ex2-content">
        <div
            class="tab-pane fade show active"
            id="ex2-pills-1"
            role="tabpanel"
            aria-labelledby="ex2-tab-1"
        >
            <div style="text-align: justify; margin: 30px 0 40px 0">
                <img src="/img/write.png" style="max-width: 120px; display:block; margin: auto;">
                <h2 style="text-align: center;margin-top: 20px;">У Вас еще нет заказов :(</h2>
                <h4 style="text-align: center;margin-top: 20px;color: #404b5f; font-family: 'Malgun Gothic'">
                    Где бы Вы хотели отдохнуть?<br>
                    Выберите город и забронируйте онлайн тур Вашей мечты!<br>
                </h4>
                <button type="button" class="btn btn-primary" style="margin: 50px auto; display: block; font-size: 25px">Искать туры</button>
            </div>

        </div>


        <div
            class="tab-pane fade"
            id="ex2-pills-2"
            role="tabpanel"
            aria-labelledby="ex2-tab-2"
        >
            <div style="text-align: justify; margin: 30px 0 40px 0">
                <img src="/img/izbran.png" style="max-width: 120px; display:block; margin: auto;">
                <h2 style="text-align: center;margin-top: 20px;">Вы еще не добавили ни один тур в Избранное :(</h2>
                <h4 style="text-align: center;margin-top: 20px;color: #404b5f; font-family: 'Malgun Gothic'">
                    Начните добавлять туры,нажав на "сердечко" в их карточках.<br>
                    Выберите город и забронируйте <br>  онлайн тур Вашей мечты!<br>
                </h4>
                <button type="button" class="btn btn-primary" style="margin: 50px auto; display: block; font-size: 25px">Искать туры</button>
            </div>
        </div>



        <div
            class="tab-pane fade"
            id="ex2-pills-3"
            role="tabpanel"
            aria-labelledby="ex2-tab-3"
        >
            <div class="card" style="text-align: justify; margin: 30px 0 40px 0; background-color: #42aff8; color: white; font-size: 20px">
                <div class="card-body">
                    <i class="fas fa-shield-alt" style="margin-right: 10px"></i>
                    Мы используем Ваши данные только для оформления заказа и экстренной связи с Вами.
                    Мы не передаем их третьим лицам.</div>
            </div>

            <div>
                <div class="row">
                    <div class="col-sm" style="display: inline-block; margin-bottom: 20px" >
                        <h3> Контактные данные:</h3>
                    </div>
                    <div class="col-sm" style="display: inline-block; text-align: right">
                        <a onclick= active_fields() role="button" id="LinkChangeFirst">   Изменить</a>
                    </div>
                </div>


                <div style="display: inline-block">
                    <div class="row">
                        <div class="col-sm" style="display: inline-block">
                            <div class="form-outline mb-3" style="width: 12rem;">
                                <input
                                    class="form-control"
                                    id="formFirstName"
                                    type="text"
                                    disabled
                                />
                                <label class="form-label" for="formFirstName">Имя</label>
                            </div>
                        </div>

                        <div class="col-sm" style="display: inline-block">
                            <div class="form-outline mb-3" style="width: 15rem;">
                                <input
                                    class="form-control"
                                    id="formLastName"
                                    type="text"
                                    disabled
                                />
                                <label class="form-label" for="formLastName">Фамилия</label>
                            </div>
                        </div>

                        <div class="col-sm" style="display: inline-block">
                            <div class="form-outline mb-3" style="width: 17rem;">
                                <input
                                    class="form-control"
                                    id="formEmail"
                                    type="email"
                                    disabled
                                />
                                <label class="form-label" for="formEmail">e-mail</label>
                            </div>
                        </div>

                        <div class="col-sm" style="display: inline-block">
                            <div class="form-outline mb-3" style="width: 15rem;">
                                <input
                                    class="form-control"
                                    id="formNumber"
                                    type="tel"
                                    disabled
                                />
                                <label class="form-label" for="formNumber">Телефон</label>
                            </div>
                        </div>

                        <div class="col-sm" style="display: inline-block">
                            <div class="md-form md-outline input-with-post-icon datepicker" >
                                <input placeholder="Select date" type="date" id="DateSelect" class="form-control mb-3" style="font-family: 'Georgia'; font-size: 17px;" disabled>
                            </div>
                        </div>

                        <div class="col-sm" style="display: inline-block; text-align: right; margin-bottom: 50px">
                            <button id="ButtonCancelFirst" type="button" class="btn btn-primary" onclick="deactive_fields()" disabled>Отмена</button>
                            <button id="ButtonSaveFirst" type="button" class="btn btn-secondary" disabled>Сохранить</button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm" style="display: inline-block; margin-bottom: 20px">
                        <h3> Пароль от личного кабинета:</h3>
                    </div>

                    <div class="col-sm" style="display: inline-block; text-align: right">
                        <a onclick="active_fields_pass()"  role="button" id="LinkChangeSecond">   Изменить</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm" style="display: inline-block">
                        <div class="col-sm" style="display: inline-block">
                            <div class="form-outline mb-3" style="width: 17rem;">
                                <input
                                    class="form-control"
                                    id="formOldPass"
                                    type="password"
                                    disabled
                                />
                                <label class="form-label" for="formOldPass">Старый пароль:</label>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm" style="display: inline-block">
                        <div class="col-sm" style="display: inline-block">
                            <div class="form-outline mb-3" style="width: 17rem;">
                                <input
                                    class="form-control"
                                    id="formNewPass"
                                    type="password"
                                    disabled
                                />
                                <label class="form-label" for="formNewPass">Новый пароль:</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm" style="display: inline-block">
                        <div class="col-sm" style="display: inline-block">
                            <div class="form-outline mb-3" style="width: 17rem;">
                                <input
                                    class="form-control"
                                    id="formNewPassReturn"
                                    type="password"
                                    disabled
                                />
                                <label class="form-label" for="formNewPassReturn">Повторите пароль:</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm" style="display: inline-block; text-align: right; margin-bottom: 50px">
                        <button id="ButtonCancelSecond" type="button" class="btn btn-primary" onclick="deactive_fields_pass()"  disabled>Отмена</button>
                        <button id="ButtonSaveSecond" type="button" class="btn btn-secondary" disabled>Сохранить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pills content -->
</div>

<script>
    function active_fields() {
        document.getElementById('LinkChangeFirst').style.display="none";  // for hide button
        document.getElementById('ButtonCancelFirst').disabled = false;
        document.getElementById('ButtonSaveFirst').disabled = false;

        document.getElementById("formFirstName").disabled = false;
        document.getElementById("formLastName").disabled = false;
        document.getElementById("formEmail").disabled = false;
        document.getElementById("formNumber").disabled = false;
        document.getElementById("DateSelect").disabled = false;
    }

    function deactive_fields() {
        document.getElementById('LinkChangeFirst').style.display="block";
        document.getElementById('ButtonCancelFirst').disabled = true;
        document.getElementById('ButtonSaveFirst').disabled = true;

        document.getElementById("formFirstName").disabled = true;
        document.getElementById("formLastName").disabled = true;
        document.getElementById("formEmail").disabled = true;
        document.getElementById("formNumber").disabled = true;
        document.getElementById("DateSelect").disabled = true;
    }

    function active_fields_pass() {
        document.getElementById('LinkChangeSecond').style.display="none";  // for hide button
        document.getElementById('ButtonCancelSecond').disabled = false;
        document.getElementById('ButtonSaveSecond').disabled = false;

        document.getElementById("formOldPass").disabled = false;
        document.getElementById("formNewPass").disabled = false;
        document.getElementById("formNewPassReturn").disabled = false;
    }

    function deactive_fields_pass() {
        document.getElementById('LinkChangeSecond').style.display="block";
        document.getElementById('ButtonCancelSecond').disabled = true;
        document.getElementById('ButtonSaveSecond').disabled = true;

        document.getElementById("formOldPass").disabled = true;
        document.getElementById("formNewPass").disabled = true;
        document.getElementById("formNewPassReturn").disabled = true;
    }
</script>
