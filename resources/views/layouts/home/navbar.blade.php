    {{-- <!-- Top Bar --> --}}


    <div class="top-bar d-none d-sm-block">
            <div class="container">
              <div class="row">

                <div class="ml-auto col-sm-3 col-md-3 text-right account-details">
                  <ul class="list-inline">
                    <li class="list-inline-item"> <a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>



          {{-- <!-- Navbar --> --}}



          <nav class="navbar navbar-expand-lg px-lg-0 bg-light navbar-light">
            <div class="container position-relative">
              {{-- <!-- Navbar Brand--> --}}
              <a href="{{url('/')}}" class="navbar-brand">
                <img width="100" height="50" src="{{asset('/img/logos/leero pngs-03.png')}}" alt="logo"></a>
              {{-- <!-- Toggle Button--> --}}
              <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">Menu <i class="fa fa-bars"></i></button>
              {{-- <!-- Navbar Menu--> --}}
              <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <div class="navbar-nav ml-auto align-items-lg-center">

                  <div class="nav-item active"><a href="{{url('/')}}" class="nav-link">Home</a></div>
                  <div class="nav-item"><a href="{{url('/processes')}}" class="nav-link">Processes</a></div>

                <div class="nav-item"><a href="{{route('projects.index')}}" class="nav-link">Projects</a></div>
                <div class="nav-item"><a href="{{url('/blog')}}" class="nav-link">News</a></div>
                <div class="nav-item"><a href="{{url('/careers')}}" class="nav-link">Careers</a></div>
                  <div class="nav-item"><a href="{{url('/about-us')}}" class="nav-link">About Us</a></div>
                  <div class="nav-item"><a href="{{url('/contact-us')}}" class="nav-link">Contact Us</a></div>
                  <div class="nav-item">
                    <ul class="list-inline">
                    <li class="list-inline-item">
                            {{-- <button type="button" class="btn btn-white btn-quote" >GEt A QUOTE</button> --}}
                            <button id="navbarCategory" class="nav-link text-center btn btn-white btn-quote"
                            data-toggle="modal" data-target="#myModal">GET QUOTE</button>
                    </li>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>

