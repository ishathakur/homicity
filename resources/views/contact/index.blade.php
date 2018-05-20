<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
        </style>
    </head>
    <body>
      @if(session()->has('status'))
      <div class="bg-success" >
          {!! session()->get('status') !!}
      </div>
      @endif
      <form action="{{URL::to('submit-contact')}}" id="submit-contact-form" method="POST">
            {!! csrf_field() !!}
          <input type="text" name="name" id="name" placeholder="name">
          <div id="error-name"></div>
        </br>
          <input type="email" name="email" id="email" placeholder="email">
          <div id="error-email"></div>
        </br>
          <input type="button" value="Send" id="submit-contact">
      </form>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="{{ URL::to('js/contact-us.js')}}"></script>
    </body>
</html>
