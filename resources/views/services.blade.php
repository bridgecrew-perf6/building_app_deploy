<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>

  {{-- if user is loggedin --}}
  @if (Auth::check() )
your name is: {{ Auth::user()->name }}
<br>
Your Email is: {{ Auth::user()->email }}

@else
 you are not logged in 
@endif
</body>
</html>