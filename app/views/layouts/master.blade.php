
<!DOCTYPE html>
<!-- Microdata markup added by Google Structured Data Markup Helper. -->
<html lang="en">
  <head>
    <title>
@yield('title')
</title>
<meta name="description" content="@yield('meta_description')">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap core CSS -->
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="/assets/bootstrap-3.2.0-dist/css/bootstrap.min.css">



@yield('meta')

  </head>

<body>


   
<div class="container">
	@include('layouts.nav')
@yield('content')
</div>

</div></span>

<!-- JavaScript And BootStrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
@yield('footer')
  </body>
</html>
