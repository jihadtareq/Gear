<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>allpetrolstation</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
       
           
    </head>
    <body>
        <!-- <div class="flex-center position-ref full-height">
        
            <div class="content"> -->
                
              <table class="list_petrolstation" border="1">
                    <tr>
                        <th>location</th>
                        <th>nameofpetrolstation</th>
                    </tr>
                    
                   @foreach($petrolstation as $petrolstation)
                    <tr>
                        <td>{{$petrolstation->location}}</td>
                        <td>{{$petrolstation->nameofpetrolstation}}</td>
                       <td><a href = 'editpetrolstation/{{ $petrolstation->id }}'>Edit</a></td>
                       <td><a href = 'deletepetrolstation/{{ $petrolstation->id }}'>Delete</a></td>
                    </tr>
       @endforeach       
                </table>
    </body>
</html>
