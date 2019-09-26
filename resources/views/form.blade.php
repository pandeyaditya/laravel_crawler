<html>
    <head>
        <title>TrustedSearch Crawler</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
<div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-top:100px;">
                <center>
                    <h1 class="banner-heading"><a href="{{ url('/')}}">My first search engine</a></h1>
                    <form method="post" action="{{ url('/search') }}">
                        <div>
                        <input type="text" class="search_item" name="search_item" placeholder="Enter website like google.com"><br/>
                        <p class="error">{!! $errors->first('search_item') !!}</p>
                        <input type="radio" name="searchmode" class="radio" value="trustpilot" checked="checked">TrustPilot
                        <input type="radio" name="searchmode" class="radio" value="trustedsearch">TrustedSearch
                        <div>
                        <div style="position: absolute;top: 60px;right: 150px;">
                            {{ csrf_field() }}
                            <input type="submit" value="Search" class="btn btn-success">
                        </div>
                    </form>
                </center>
                <hr>
            </div>
        </div>
    </div>
@yield('content')

<center>
        <div class="footer">
            &copy; Copyright TrustedSearch {{ date('d-m-Y') }}               
        </div>
     </center> 
</body>

</html>

