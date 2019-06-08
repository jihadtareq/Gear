<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>allcar</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
       
           
    </head>
    <body>
        <!-- <div class="flex-center position-ref full-height">
        
            <div class="content"> -->
                
              <table class="list_car" border="1">
                    <tr>
                        <th>Model</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>agancename</th>
                        <th>image</th>
                        
                      
                    </tr>
                    
                   @foreach($car as $car)
                    <tr>
                        <td>{{$car->kindofcarhave}}</td>
                        <td>{{$car->price}}</td>
                        <td>{{$car->description}}</td>
                        <td>{{$car->agancename}}</td>
                        
<td> <img width="30%" height="20%" src="{{url('uploads/'.$car->filename)}}" alt="{{$car->filename}}">  </td>
                       <td><a href = 'edit1/{{ $car->id }}'>Edit</a></td>
                       <td><a href = 'delete1/{{ $car->id }}'>Delete</a></td>
                    </tr>
       @endforeach
             
                    
                </table>
            <!-- </div>
        </div> -->
    </body>
</html>
