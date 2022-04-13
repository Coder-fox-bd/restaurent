
<div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a class="navbar-brand" href="{{url('home')}}"><img src="{{url('upload/logo/'.$Seo->site_logo)}}" /></a><br>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('home')}}">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item {{ Request::path() == 'order-item' ? 'selected' : '' }}">
                <a class="nav-link" href="{{url('order-item')}}">Online Order (S.Cemetery)</a>
            </li>
            
            <li class="nav-item {{ Request::path() == 'contact-us' ? 'selected' : '' }}">
              <a class="nav-link" href="{{url('contact-us')}}">Contact Us</a>
            </li>
        
            <li class="nav-item">
              <a class="nav-link" href="https://coriandermanchester.co.uk/central-chorlton/auth/registration">Register</a>
            </li>
            
             <li class="nav-item">
              <a class="nav-link" href="https://coriandermanchester.co.uk/central-chorlton/auth/login">Log in</a>
            </li>       
        </ul>
</div>
      
      
      
      
      
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{url('home')}}"><img src="{{url('upload/logo/'.$Seo->site_logo)}}" /></a><br>
            
        <span style="font-size:30px;cursor:pointer" onclick="openNav()" class="mobile-men">&#9776;</span>
      
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarColor01">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('home')}}">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item {{ Request::path() == 'order-item' ? 'selected' : '' }}">
              <a class="nav-link" href="{{url('order-item')}}">Online Order (S.Cemetery)</a>
            </li>
            
            <li class="nav-item {{ Request::path() == 'contact-us' ? 'selected' : '' }}">
                <a class="nav-link" href="{{url('contact-us')}}">Contact Us</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="https://coriandermanchester.co.uk/central-chorlton/auth/registration">Register</a>
            </li>
            
             <li class="nav-item">
              <a class="nav-link" href="https://coriandermanchester.co.uk/central-chorlton/auth/login">Log in</a>
            </li>
                    
        </ul>   
    </div>
</nav>