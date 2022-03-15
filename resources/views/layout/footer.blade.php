<?php @include('connect.php');?>
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section
        class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
    >
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
            <span style="font-size: 20px">Присоединяйтесь к нам в социальных сетях:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
            <a href="https://www.facebook.com/groups/1663908647289616" class="me-4 text-reset" target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com/TripRussian" class="me-4 text-reset" target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://instagram.com/_russian_trip_?utm_medium=copy_link" class="me-4 text-reset" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://vk.com/russian___trip/" class="me-4 text-reset" target="_blank">
                <i class="fab fa-vk"></i>
            </a>
        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-map me-3"></i>
                        Russian TRIP
                    </h6>
                    <p>
                        Туристическое агенство, появившееся на рынке в 2021 году. Мы обеспечиваем своих клиентов запоминающимися турами,
                        лучшими отелями и качественным транспортом.
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Контакты:
                    </h6>
                    <p>
                        <i class="fas fa-home me-3"></i>
                        г. Челябинск, ул. Пушкина, д.190
                    </p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        info@example.com
                    </p>
                    <p>
                        <i class="fas fa-phone me-3"></i>
                        + 01 234 567 88
                    </p>
                    <p>
                        <i class="fas fa-print me-3"></i>
                        + 01 234 567 89
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4" id="commentBlock">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Оставьте свой отзыв:
                    </h6>
                    <form class="row g-3 needs-validation" novalidate method="post" name="form" id="myform">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-outline">
                                <input type="text" class="form-control" name="author" id="author" required />
                                <label for="author" class="form-label">
                                    Имя:
                                </label>
                                <div class="valid-feedback">
                                    Готово!
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-outline">
                                <textarea class="form-control"
                                          id="message"
                                          rows="4"
                                          style="min-height: 110px; font-size: 20px"
                                          data-mdb-container="body"
                                          data-mdb-toggle="popover"
                                          data-mdb-placement="right"
                                          data-mdb-content="Комментарий должен содержать минимум 25 символов!"
                                ></textarea>
                                <label class="form-label" for="message">
                                    Сообщение:
                                </label>
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-primary" name="button" type="button" onclick=comment_add() id="send" style="display: block; margin: auto">
                                Отправить
                            </button>
                        </div>
                    </form>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-2" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2022
        <a class="text-reset fw-bold">
            Russian TRIP
        </a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->

