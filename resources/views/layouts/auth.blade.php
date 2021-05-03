<!DOCTYPE html>
<html>
<head>
  <title>Sign In</title>
  <link rel="stylesheet" type="text/css" href="{{asset('project_asset/css/home.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container">
    @include('layouts.header')
    @include('layouts.banner')
    @yield('content')
    @include('layouts.menu')

    </div>

</body>
</html>