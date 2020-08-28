 
<html>
    <head>
      <title>@yield('title')</title>
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}">
    </head>
    <body>
        <div class="container">
                <a href="/cars">Cars</a>
                <a href="/about">About</a>
        </div>
      <div class="container">
        @yield('content')
      </div>
      <script src="{{ URL::asset('js/app.js') }}"/>
    </body>
  </html>