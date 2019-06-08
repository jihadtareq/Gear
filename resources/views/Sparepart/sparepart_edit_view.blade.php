<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>allsparepart</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
       
           
    </head>
    <body>
        <!-- <div class="flex-center position-ref full-height">
        
            <div class="content"> -->
                
              <table class="list_car" border="1">
                    <tr>
                        <th>name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>storename</th>
                        <th>image</th>
                        
                      
                    </tr>
                    
                   @foreach($sparepart as $sparepart)
                    <tr>
                        <td>{{$sparepart->sparepart}}</td>
                        <td>{{$sparepart->price}}</td>
                        <td>{{$sparepart->description}}</td>
                        <td>{{$sparepart->storename}}</td>
                        
<td> <img width="30%" height="20%" src="{{url('uploads/'.$sparepart->filename)}}" alt="{{$sparepart->filename}}">  </td>
                       <td><a href = 'editsparepart/{{ $sparepart->id }}'>Edit</a></td>
                       <td><a href = 'deletesparepart/{{ $sparepart->id }}'>Delete</a></td>
                    </tr>
       @endforeach
             
                    
                </table>
            <!-- </div>
        </div> -->
    </body>
</html>
