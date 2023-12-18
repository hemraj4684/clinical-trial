<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
       
    <!-- Bootstrap Bundle with Popper -->
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <title>Medical Trial!</title>
  </head>
  <body>
    <div id="app">
        <div class="container">
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>
  </body>
  <script type="text/javascript" src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#inputFrequency').on('change', function(){
                if(this.value === 'daily') {
                    $('#dailyCat').show();
                } else {
                    $('#dailyCat').hide();
                }
            })
        });
    </script>
</html>