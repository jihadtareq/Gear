<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>allmechanic</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
       
           
    </head>
    <body>
        <!-- <div class="flex-center position-ref full-height">
        
            <div class="content"> -->
                
              <table class="list_mechanic" border="1">
                    <tr>
                        <th>name_shop</th>
                        <th>mobile</th>
                        <th>area</th>
                        <th>address</th>
                        <th>worktime</th>
                        <th>Wash</th>
                        <th>kindofcartofix</th>
                        <th>description</th>
                        
                    </tr>
                    
                   @foreach($mechanic as $mechanic)
                    <tr>
                        <td>{{$mechanic->name_shop}}</td>
                        <td>{{$mechanic->mobile}}</td>
                        <td>{{$mechanic->area}}</td>
                        <td>{{$mechanic->address}}</td>
                        <td>{{$mechanic->worktime}}</td>
                        <td>{{$mechanic->Wash}}</td>
                        <td>{{$mechanic->kindofcartofix}}</td>
                        <td>{{$mechanic->description}}</td>
                       <td><a href = 'edit/{{ $mechanic->id }}'>Edit</a></td>
                       <td><a href = 'delete/{{ $mechanic->id }}'>Delete</a></td>
                       <!--  <td>
         <form method="post" action="{{ url('del/mechanic/'.$mechanic->id)}}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
         <input type="hidden" name="_method" value="delete">
         <input type="submit" value="delete this mechanic">
         </form>
              </td> -->
              

                    </tr>
       @endforeach
             
                    
                </table>
            <!-- </div>
        </div> -->
    </body>
</html>
