<html>
    <head>
        <title>TrustedSearch Crawler</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
            @yield('content')
            
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <center>
                            <div class="footer" style="position:fixed;bottom:0px;margin-bottom:10px">
                                &copy; My first search engine
                            </div>
                        </center>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
    </body>

</html>

