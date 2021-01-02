<header>
  <div class="container_12">
    <div class="grid_12">
      <h1><a href="{{route('frontSite.index')}}"><img src="images/logo.png" alt=""></a> </h1>
      <div class="menu_block">
        <nav>
          <ul class="sf-menu">
            <li class="current"><a href="{{route('frontSite.index')}}">Home</a></li>
            <li class="with_ul"><a href="{{route('frontSite.about')}}">About Us</a>
              <ul>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Archive</a></li>
              </ul>
            </li>
            <li><a href="{{route('frontSite.services')}}">Services</a></li>
            <li><a href="{{route('frontSite.blog')}}">Blog</a></li>
            <li><a href="{{route('frontSite.contacts')}}">Contacts </a></li>

            @guest
            <li><a href="{{route('login')}}">Log In </a></li>
            @endguest

            @auth
            <li><a href="{{route('dashboard.index')}}">Dashboars </a></li>
            <li><a href="{{route('logout')}}">Logout </a></li>
            @endauth
          </ul>
        </nav>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</header>