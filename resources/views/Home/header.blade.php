        <!-- header section strats -->
        <header class="header_section">
          <div class="container">
             <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="index.html"><img width="250" src="images/logo.png" alt="#" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav">
                      <li class="nav-item active">
                         <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                      </li>

                      <li class="nav-item">
                         <a class="nav-link" href="/redirect">Dashboard</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" href="#product">Products</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" href="#blog">Blog</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" href="#contact">Contact</a>
                      </li>

                      @if (Route::has('login'))
                      @auth
                      <li class="nav-item">
                        <x-app-layout>
                           
                      </x-app-layout>
                     </li>         
                      @else  
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}" >Login</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registation</a>
                     </li>

                     @endauth
             
                     @endif
                   </ul>
                </div>
             </nav>
          </div>
       </header>
       <!-- end header section -->
       <!-- slider section -->