

<div class="container" style="margin-top: 25px">
    <button type="button" class="btn btn-primary" >Назад</button>

    <h1 class="display-1 " style="text-align: center;margin-bottom: 40px;"><b>Бронирование билетов</b></h1>

    <div class="card border border-primary shadow-0 mb-3" style="max-width: 29.3rem; display: block; margin: auto">
            <div class="card-header" style="font-family: 'Malgun Gothic';font-size: 30px; text-align: center; color: #323bee"><b>ИНФОРМАЦИЯ О ТУРЕ</b></div>
            <div class="card-body text-primary">
                <label for="customRange3" class="form-label" style="font-size: 20px; display: block"> Тур в город ...</label>
                <label for="customRange3" class="form-label" style="font-size: 20px; display: block"> Название тура ...</label>
                <label for="customRange3" class="form-label" style="font-size: 20px; display: block"> Цена 0000 руб.</label>

                <button type="button"
                        class="btn btn-primary btn-block mb-4"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#collapseExample"
                        aria-expanded="false"
                        aria-controls="collapseExample"
                        style="font-size: 16px"
                >Что входит в стоимость?</button>
                <div class="collapse mb-4" id="collapseExample" style="font-size: 20px">
                    В стоимость входит проживание в отеле, питание, трансфер, экскурсии.
                </div>
                <form>
                    <!-- Name input -->
                    <div class="form-outline mb-4" style="display: inline-block">
                        <input type="text" id="typeName" class="form-control"/>
                        <label class="form-label" for="typeName">Имя:</label>
                    </div>

                    <!-- Name input -->
                    <div class="form-outline mb-4" style="display: inline-block">
                        <input type="text" id="typeFam" class="form-control"/>
                        <label class="form-label" for="typeFam">Фамилия:</label>
                    </div>

                    <!-- Phone input -->
                    <div class="form-outline mb-4">
                        <input type="tel" id="typePhone" class="form-control" />
                        <label class="form-label" for="typePhone">Номер телефона:</label>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email"
                               id="form4Example2"
                               class="form-control"
                               data-mdb-container="body"
                               data-mdb-toggle="popover"
                               data-mdb-placement="right"
                               data-mdb-content="На данный адрес будет отправлено подтверждение бронирования."
                        />
                        <label class="form-label" for="form4Example2">E-mail:</label>
                    </div>

                    <label for="customRange3" class="form-label" style="font-size: 19px">Выберите количество билетов: (осталось 20)</label>
                    <div class="range mb-3">
                        <input type="range" class="form-range" min="1" max="20" step="1" id="customRange3" />
                    </div>

                    <!-- Default checkbox -->
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        <label class="form-check-label" for="flexCheckDefault" style="color: #666666">Даю <a data-mdb-toggle="modal" data-mdb-target="#staticBackdrop" style="color: #0062ff">согласие на обработку перснальных данных</a></label>
                    </div>

                    <!-- Modal -->
                    <div
                        class="modal fade"
                        id="staticBackdrop"
                        data-mdb-backdrop="static"
                        data-mdb-keyboard="false"
                        tabindex="-1"
                        aria-labelledby="staticBackdropLabel"
                        aria-hidden="true"
                    >
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Согласие на обработку персональных данных.</h5>
                                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" style="text-align: justify; color: #2d3748">
                                    Пользуясь данным интернет ресурсом, в порядке ст. 9 Федерального закона от 27.07.2006 N 152-ФЗ
                                    «О персональных данных» свободно своей волей и в своих интересах пользователь сайта RUSSIAN Trip
                                    даёт согласие на автоматизированную, а также без использования средств автоматизации обработку,
                                    хранение, систематизацию своих персональных данных и на передачу (в том числе на трансграничную)
                                    своих персональных данных третьим лицам.<br><br>

                                    Согласие дается на обработку следующих персональных данных: фамилия, имя, отчество;
                                    год, месяц, день рождения; пол; гражданство; адрес места жительства; номер телефона;
                                    паспортные данные; данные заграничного паспорта; пользовательские данные (сведения о местоположении;
                                    тип и версия ОС; тип и версия Браузера; тип устройства и разрешение его экрана;
                                    источник откуда пришел на сайт пользователь; с какого сайта или по какой рекламе;
                                    язык ОС и Браузера; какие страницы открывает и на какие кнопки нажимает пользователь; ip-адрес);
                                    иная информация.<br><br>

                                    Цель обработки персональных данных: обработка входящих запросов физических лиц с целью оказания услуг
                                    и консультирования; аналитики действий физического лица на веб-сайте и функционирования веб-сайта;
                                    проведение рекламных и новостных рассылок.<br><br>

                                    Персональные данные не являются общедоступными.
                                    Согласие может быть отозвано пользователем в письменной форме.<br><br>

                                    Также пользователь подтверждает, что ознакомлен(а) с правами субъектов персональных данных,
                                    закрепленными в главе 3 ФЗ «О персональных данных».</div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Закрыть</button>
                                    <button type="button" class="btn btn-primary" onclick="document.getElementById('flexCheckDefault').checked=!document.getElementById('flexCheckDefault').checked;" data-mdb-dismiss="modal">Принимаю</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4" style="font-size: 16px">Забронировать </button>
                </form>
            </div>
    </div>
</div>


