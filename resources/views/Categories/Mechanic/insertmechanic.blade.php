<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>insertmechanic</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
       
           
    </head>
    <body>
        <div class="flex-center position-ref full-height">
        <form method="post" action="{{ url('insert/mechanic') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" name="name_shop" placeholder="name_shop"><br>
            <input type="text" name="mobile" placeholder="mobile"><br>
            <input type="text" name="area" placeholder="area"><br>
            <input type="text" name="address"placeholder="address"><br>
            <input type="text" name="worktime" placeholder="worktime"><br>
            wash:<br>
            yes:<input type="radio" name="Wash" value="Yes" checked>
            no:<input type="radio" name="Wash" value="No">
            <br>
             <input type="text" name="kindofcartofix" placeholder="kindofcartofix"><br>
             <textarea name="description" placeholder="description"></textarea> <br>
             
             <input type="submit" value="insert">
        </form>
        </div>
    </body>
</html>
