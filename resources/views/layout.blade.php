<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link
        href="/md_bootstrap/css/mdb.min.css"
        rel="stylesheet"
    />

    <link
        rel="icon"
        href="https://img.icons8.com/doodle/48/000000/signpost-tourist.png"
        type="image/x-icon"
    />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        rel="stylesheet"
    />

    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous">
    </script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous">
    </script>

    <!-- MDB -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css"
        rel="stylesheet"
    />

    <!-- MDB -->
    <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"
    ></script>

    <script
        type="text/javascript"
        src="/js/jqueri-1.5.1.min.js">
    </script>



    <title>Туристическое агенство</title>
</head>

<body>
    @include('layout.header')
    @yield('js_header')
    @include('layout.content')
    @yield('js_content')
    @include('layout.footer')
    <script
      type="text/javascript"
      src="/md_bootstrap/js/mdb.min.js"
    ></script>
    @yield('js_bottom')
        <script>
            function comment_add() {
                let author_data = document.getElementById("author").value;
                let message_data = document.getElementById("message").value;
                $.ajax({
                    async: false,
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    type: 'POST',
                    url: "{{route('comments_add')}}",
                    data: {
                        author : author_data,
                        message : message_data
                    },
                    success: function (data) {
                        console.log(data['message']);
                        alert (data['message']);
                        $('#myform')[0].reset();
                    }
                });
            }
        </script>
</body>

</html>
