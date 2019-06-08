<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">


<link rel="apple-touch-icon" sizes="57x57" href="../images/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../images/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../images/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../images/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../images/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../images/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../images/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../images/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="../images/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="../images/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../images/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">
<link rel="manifest" href="../images/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">


        <title>GearBox</title>
   <style>
   html, body {
                
                color: black;
                font-weight: 600;
                height: 100vh;
                margin: 0;
            }
    .bgimage {

       background-image: linear-gradient(
          rgba(0, 0, 0, 0.36),
          rgba(0, 0, 0, 0.36)
         ), url('../images/bg.jpg');
       background-position: center center;
       background-size:cover;
       background-attachment: fixed;
       height: 600px;
       
         }
           .title { 
                font-size: 100px;
                color: white;
  }
  .content {
                text-align: center;
            }
            
            .title2 {
                
               font-size: 30px;
                font-family: 'Nunito', sans-serif;
                color: white;
                text-align: center;

            }
             .m-b-md {

                margin-bottom: 30px;
                
            }
             .font  {
         font-size: 200%;
        font-weight: bold;
   
                  }

          .button {
               
                
                text-align: center;
                  }

nav{
   z-index: 500;

}


.loc{
  margin-right: 20px !important;
}
.ml {
    margin-left: 30px;
}

.logo {
  
  margin-left: 50px;
  margin-top:60px;
}
.place {
  margin-top:200px;
}
.page-footer {
        background-color:#202020;
        color: #ffd600;
    }
.mynav-bar{
  background-color: #383838 !important;

}
.ncolor{
  color: #ffd600 !important;
}
 
.download{
  text-align: center;
}
.textcol{
  color: #ffd600 !important;
}
.text{
   margin-left: 30px;
}
      </style>
</head>


  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top mynav-bar">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand mb-0 h1 ncolor" href="{{ url('/') }}">  GearBox</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="">Help</a>
      </li>
    </ul>

    <ul class="nav navbar-nav navbar-right ">
      <div class="container loc">
       <!-- Authentication Links -->
                        @guest
                        <div class="loc">
                    <div class="btn-group">
  <a href="/login" class="btn btn-warning btn-sm my-2 my-lg-0" role="button" span class="sr-only"></span><i class="fa fa-user-circle" aria-hidden="true"></i> Log In</a>
  </button>
  
  </div> 
                   
      
                            
                         @if (Route::has('login'))
                          
              <div class="btn-group">
      <button class="btn btn-sm btn-warning dropdown-toggle dropdown-toggle-split margin-left"  type="button" data-toggle="dropdown"><span class="sr-only"></span><i class="fas fa-sign-in-alt" aria-hidden="true"></i>
    Sign Up
  </button>
  <div class="dropdown-menu ncolor" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="/register">User Signup </a>
      <a class="dropdown-item" href="/reg/owner"> Owner Signup</a>
         
        </div>
    </div>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
              </div>
            </div>
        </nav>
        <br>
        <br>
        <main class="py-0">
            @yield('content')
        </main>
        
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    

  </ol>
  <div class="carousel-inner">
    
    
    <div class="carousel-item active ">
      <a href="/all/car">
      <img class="d-block w-100" width="30"height="600" src="../images/car interior (1).jpg" alt="Second slide" >
       <div class="carousel-caption d-none d-md-block ">
        <div class="textcol">
    <h3>Cars</h3>
  </div>
  </div>
    </div>
    </a>
    <div class="carousel-item">
       <a href="/all/sparepart">
      <img class="d-block w-100" width="30"height="600" src="../images/spareparts2.jpg" alt="Third slide">
       <div class="carousel-caption d-none d-md-block ">
        <div class="textcol">
    <h3>Spareparts</h3>
       </div>
  </div>
    </div>
  </a>
    <div class="carousel-item">
      <img class="d-block w-100" width="30"height="600" src="../images/mechanic2.jpg" alt="Fourth slide">
     <div class="carousel-caption d-none d-md-block ">
      <div class="textcol">
    <h3>Mechanics</h3>
    </div>
   
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
    <br>
    <br>
      
    </header>
  </div>
</div>
</div>
</div>
</ul>
</div>
</nav>
<div class="logo">
<img src="../images/ms-icon-310x310.png" class="rounded float-right" alt="...">
</div>
  <div class="container place logo">
    <div id="band" class="container text-center">
  <h3>GearBox</h3>
  <p><em>We fix your Car, wherever you Are!</em></p>
  <p>We take special and extraordinary care of your car where we provide you with full roadside assistance, the necessary maintenance and checks, tire repairs, battery charging , car cleaning and towing to any location you desire. All with our widespread mobile workshops around you, in addition to a Free 24/7 Phone consultations and tips through our customer care centers.</p>
  <br>
  <div class="download">
          <a class="btn btn-warning btn-lg "  href="/" role="button"><i class="fa fa-download" aria-hidden="true"></i>    download App  </a>
          </div>
</div>
</div>



<div class="place">
<!-- Footer -->
<footer class="page-footer pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
          <h5 class="text-uppercase">gearbox</h5>
          <p>We fix your Car, wherever you Are!</p>
          <p>Your safety comes first.</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">
        

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Link 1</a>
              </li>
              <li>
                <a href="#!">Link 2</a>
              </li>
              <li>
                <a href="#!">Link 3</a>
              </li>
              <li>
                <a href="#!">Link 4</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
  
</div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>