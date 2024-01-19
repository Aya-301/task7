<div class="hero_area">
<!-- header section strats -->
<div class="hero_bg_box">
      <div class="img-box">
        <img src="{{asset('assets/images/hero-bg.jpg')}}" alt="">
      </div>
    </div>

    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="contact_link-container">
            <a href="" class="contact_link1">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Lorem ipsum dolor sit amet,
              </span>
            </a>
            <a href="" class="contact_link2">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +01 1234567890
              </span>
            </a>
            <a href="" class="contact_link3">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                demo@gmail.com
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="{{route('test')}}">
              <span>
              {{__('trans.guarder')}}
              </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""></span>
            </button>

            <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="{{route('test')}}">{{__('trans.home')}} <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('about')}}"> {{__('trans.about')}}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('services')}}"> {{__('trans.services')}} </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('gaurds')}}"> {{__('trans.guards')}} </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('contact')}}">{{__('trans.contactUs')}}</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ LaravelLocalization::getLocalizedURL('en') }}">English</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ LaravelLocalization::getLocalizedURL('ar') }}">عربي</a>
                </li>

              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->