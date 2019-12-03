<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        @include('layouts.navbar')
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('body').on('click', '.btn-destroy', function(event) {
                event.preventDefault();
                if(confirm('Realmente desea eliminar este registro ?')) {
                    $(this).parent().submit();
                }
            });
        });
    </script>
    <script>
        // $(document).on("click", ".browse", function() {
        //   var file = $(this).parents().find(".file");
        //   file.trigger("click");
        // });
        // $('input[type="file"]').change(function(e) {
        //   var fileName = e.target.files[0].name;
        //   $("#file").val(fileName);

        //   var reader = new FileReader();
        //   reader.onload = function(e) {
        //     document.getElementById("preview").src = e.target.result;
        //   };
        //   reader.readAsDataURL(this.files[0]);
        // });
    </script>
</body>
</html>
