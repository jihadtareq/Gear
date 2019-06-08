<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>insertpetrolstation</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
       
           
    </head>
    <body>
        <div class="flex-center position-ref full-height">
        <form method="post" action="{{ url('insert/petrolstation') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" name="location" placeholder="location"><br>
            <input type="text" name="nameofpetrolstation" placeholder="nameofpetrolstation"><br>
             <br>
             <input type="submit" value="insert">
        </form>
        </div>
    </body>
</html>
