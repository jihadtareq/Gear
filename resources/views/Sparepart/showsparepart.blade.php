<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  
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
        <title>Spareparts</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>
<style >

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


.bcolor {
  color:#383838 !important;
}

.loc{
  margin-right: 20px !important;
}
body {
  padding-top: 80px;
}

</style>

<body>

  <!-- Navigation -->
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
  
  </div> 
                   
      
                            
                         @if (Route::has('login'))
                          
              <div class="btn-group">
      <button class="btn btn-sm btn-warning dropdown-toggle dropdown-toggle-split margin-left"  type="button" data-toggle="dropdown"><span class="sr-only"></span><i class="fas fa-sign-in-alt" aria-hidden="true"></i>
    Sign Up
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="/register">User Signup </a>
      <a class="dropdown-item" href="//reg/owner"> Owner Signup</a>
         
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

  <!-- Page Content -->

<div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4 ncolor">GearBox</h1>
        <div class=" list-group  ">
          <a href="/all/sparepart"  class="list-group-item list-group-item-action">Spareparts</a>
          <a href="/all/car" class="list-group-item list-group-item-action ">Cars</a>
          
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        
      <!-- /.col-lg-3 -->


      <!-- /.col-lg-3 -->
         <div class="row">
 @foreach($all_sparepart as $allsparepart)
           
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-30">
              <a href="#"><img src="{{url('uploads/'.$allsparepart->filename)}}" alt="{{$allsparepart->filename}}">
              <div class="card-body">
                <h4 class="card-title ">
                  <a href="#" class="ncolor">{{$allsparepart->sparepart}}</a>
                </h4>
                <h5>{{$allsparepart->price}}</h5>
                <p class="card-text">{{$allsparepart->description}}</p>
                <h6><td>{{$allsparepart->storename}}</td></h6>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
          @endforeach
          {!! $all_sparepart->render() !!} 

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
</div>
</div>
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

  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>