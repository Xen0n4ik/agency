@extends('layout')
@section('content')

<!-- Modal auth-->
<!-- First modal dialog -->
<div class="modal fade" id="exampleModalToggle1" aria-hidden="true" aria-labelledby="exampleModalToggleLabel1" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel1" style="font-size: 30px">Вход</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="text-align: justify">
                <div class="form-outline mb-4">
                    <input type="email" id="typeEmail" class="form-control" />
                    <label class="form-label" for="typeEmail">E-mail:</label>
                </div>

                <div class="form-outline mb-2">
                    <input type="password" id="typePassword" class="form-control" />
                    <label class="form-label" for="typePassword">Пароль:</label>
                </div>

                <div style="text-align: right">
                    <label for="customRange3" class="form-label mb-2" style="color: #0a47a9;" data-mdb-toggle="modal" href="#exampleModalToggle33"> Забыли пароль?</label>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary btn-block mb-4" style="font-size: 16px">Войти</button>
                </div>

                <div style="text-align: center">
                    <label for="customRange3" class="form-label mb-4"> У меня нет аккаунта. <a style="color: #0a47a9;" data-mdb-toggle="modal" href="#exampleModalToggle22">Зарегистрироваться</a></label>
                </div>
            </div>
            <div class="modal-footer">
                <div style="text-align: left">
                    <label for="customRange3" class="form-label">
                        Нажимая на кнопку, я даю <a style="color: #0a47a9;" href="{{route('agreement_index')}}" target="_blank"> Согласие на обработку и передачу персональных данных</a>,
                        ознакомлен и принимаю условия <a style="color: #0a47a9;" href="{{route('user_agreement_index')}}" target="_blank"> Пользовательского соглашения</a>.
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Second modal dialog -->
<div class="modal fade" id="exampleModalToggle22" aria-hidden="true" aria-labelledby="exampleModalToggleLabel22" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel22" style="font-size: 30px">Регистрация</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="text-align: justify">
                <div class="form-outline mb-4">
                    <input type="email" id="typeEmail" class="form-control" />
                    <label class="form-label" for="typeEmail">E-mail:</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="password" id="typePassword" class="form-control" />
                    <label class="form-label" for="typePassword">Пароль:</label>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary btn-block mb-4" style="font-size: 16px">Войти</button>
                </div>

                <div style="text-align: center">
                    <label for="customRange3" class="form-label mb-4"> У меня есть аккаунт. <a style="color: #0a47a9;" data-mdb-toggle="modal" href="#exampleModalToggle1">Войти</a></label>
                </div>
            </div>
            <div class="modal-footer">
                <div style="text-align: left">
                    <label for="customRange3" class="form-label">
                        Нажимая на кнопку, я даю <a style="color: #0a47a9;" data-mdb-toggle="modal" href="{{route('agreement_index')}}"> Согласие на обработку и передачу персональных данных</a>,
                        ознакомлен и принимаю условия <a style="color: #0a47a9;" href="{{route('user_agreement_index')}}" target="_blank"> Пользовательского соглашения</a>.
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Third modal dialog -->
<div class="modal fade" id="exampleModalToggle33" aria-hidden="true" aria-labelledby="exampleModalToggleLabel33" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel33" style="font-size: 30px">Восстановление аккаунта</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="text-align: justify">
                <div class="form-outline mb-4">
                    <input type="email" id="typeEmail" class="form-control" />
                    <label class="form-label" for="typeEmail">E-mail:</label>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary btn-block mb-4" style="font-size: 16px" data-mdb-toggle="modal" href="#exampleModalToggle44">Продолжить</button>
                </div>

                <div style="text-align: center">
                    <label for="customRange3" class="form-label mb-4"> Я вспомнил пароль. <a style="color: #0a47a9;" data-mdb-toggle="modal" href="#exampleModalToggle1">Войти</a></label>
                </div>
            </div>
            <div class="modal-footer">
                <div style="text-align: left">
                    <label for="customRange3" class="form-label">
                        Нажимая на кнопку, я даю <a style="color: #0a47a9;" data-mdb-toggle="modal" href="{{route('agreement_index')}}"> Согласие на обработку и передачу персональных данных</a>,
                        ознакомлен и принимаю условия <a style="color: #0a47a9;" href="{{route('user_agreement_index')}}" target="_blank"> Пользовательского соглашения</a>.
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Send message modal dialog -->
<div class="modal fade" id="exampleModalToggle44" aria-hidden="true" aria-labelledby="exampleModalToggleLabel44" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

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
                    <label for="customRange3" class="form-label" style="font-size: 17px; text-align: center">
                        Если Вы не видите письмо, не забудьте проверить "Спам".
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection()
