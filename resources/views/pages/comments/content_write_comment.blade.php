<div class="container">
    <button type="button" class="btn btn-light mb-4" data-mdb-ripple-color="dark" style="display: block; margin: 40px 0 40px 0; font-size: 1.7em" onclick=return_main()>
        <i class="fas fa-angle-left" style="margin-right: 20px"></i>
        Вернуться назад
    </button>

    <h6 class="display-6 " style="text-align: left; margin-bottom: 40px">
        Написать отзыв о туре:
    </h6>

    <form>
        <!-- Name input -->
        <div class="form-outline mb-4">
            <input type="text" id="author" class="form-control" />
            <label class="form-label" for="form4Example1">Имя:</label>
        </div>

        <!-- Message input -->
        <div class="form-outline mb-4">
            <textarea class="form-control" id="message" rows="4" style="min-height: 110px"></textarea>
            <label class="form-label" for="form4Example3">Сообщение:</label>
        </div>

        <!-- Submit button -->
        <input type="hidden" id="id_tour" value="{{$ID_TOUR}}"/>
        <button type="submit" class="btn btn-primary btn-block mb-4" onclick=comment_add_tour()>Отправить</button>
    </form>
</div>

@section('js_content')
    <script>
        function return_main(){
            document.location.href = "{{route('tour_get', $ID_TOUR)}}";
        }

        function comment_add_tour() {
            let author_data = document.getElementById("author").value;
            let message_data = document.getElementById("message").value;
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
