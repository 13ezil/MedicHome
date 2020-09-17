 <style>
   /*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  transition: all 0.5s;
  z-index: 997;
  padding: 26px 0;
  background:#48bdc5;
}

#header.header-transparent {
  background: transparent;
}

#header.header-scrolled {
  background:#48bdc5;
  padding: 18px 0;
}

#header .logo {
  font-size: 34px;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-family: "Montserrat", sans-serif;
  font-weight: 700;
  letter-spacing: 3px;
  padding-left: 10px;
  border-left: 4px solid #020202;
}

#header .logo a {
  color: rgb(20, 20, 20);
}

#header .logo img {
  max-height: 40px;
}

@media (max-width: 992px) {
  #header .logo {
    font-size: 28px;
  }
}
/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/* Desktop Navigation */
.nav-menu ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

.nav-menu > ul {
  display: flex;
}

.nav-menu > ul > li {
  position: relative;
  white-space: nowrap;
  padding: 10px 0 10px 28px;
}

.nav-menu a {
  display: block;
  position: relative;
  color:b;
  transition: 0.3s;
  font-size: 14px;
  font-family: "Montserrat", sans-serif;
  text-transform: uppercase;
  font-weight: 600;
}

.nav-menu a:hover, .nav-menu .active > a, .nav-menu li:hover > a {
  color: #000000;
}

.nav-menu .drop-down ul {
  display: block;
  position: absolute;
  left: 14px;
  top: calc(100% + 30px);
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  padding: 10px 0;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(130, 133, 141, 0.25);
  transition: 0.3s;
}

.nav-menu .drop-down:hover > ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}

.nav-menu .drop-down li {
  min-width: 180px;
  position: relative;
}

.nav-menu .drop-down ul a {
  padding: 10px 20px;
  font-size: 13px;
  text-transform: none;
  color: #4e4f52;
}

.nav-menu .drop-down ul a:hover, .nav-menu .drop-down ul .active > a, .nav-menu .drop-down ul li:hover > a {
  color: #111111;
}

.nav-menu .drop-down > a:after {
  content: "\ea99";
  font-family: IcoFont;
  padding-left: 5px;
}

.nav-menu .drop-down .drop-down ul {
  top: 0;
  left: calc(100% - 30px);
}

.nav-menu .drop-down .drop-down:hover > ul {
  opacity: 1;
  top: 0;
  left: 100%;
}

.nav-menu .drop-down .drop-down > a {
  padding-right: 35px;
}

.nav-menu .drop-down .drop-down > a:after {
  content: "\eaa0";
  font-family: IcoFont;
  position: absolute;
  right: 15px;
}

@media (max-width: 1366px) {
  .nav-menu .drop-down .drop-down ul {
    left: -90%;
  }
  .nav-menu .drop-down .drop-down:hover > ul {
    left: -100%;
  }
  .nav-menu .drop-down .drop-down > a:after {
    content: "\ea9d";
  }
}

/* Mobile Navigation */
.mobile-nav-toggle {
  position: fixed;
  right: 15px;
  top: 15px;
  z-index: 9998;
  border: 0;
  background: none;
  font-size: 24px;
  transition: all 0.4s;
  outline: none !important;
  line-height: 1;
  cursor: pointer;
  text-align: right;
}

.mobile-nav-toggle i {
  color: #fff;
}

.mobile-nav {
  position: fixed;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  z-index: 9999;
  overflow-y: auto;
  background: #fff;
  transition: ease-in-out 0.2s;
  opacity: 0;
  visibility: hidden;
  border-radius: 10px;
  padding: 10px 0;
}

.mobile-nav * {
  margin: 0;
  padding: 0;
  list-style: none;
}

.mobile-nav a {
  display: block;
  position: relative;
  color: #333333;
  padding: 10px 20px;
  font-weight: 500;
  outline: none;
}

.mobile-nav a:hover, .mobile-nav .active > a, .mobile-nav li:hover > a {
  color: #132646;
  text-decoration: none;
}

.mobile-nav .drop-down > a:after {
  content: "\ea99";
  font-family: IcoFont;
  padding-left: 10px;
  position: absolute;
  right: 15px;
}

.mobile-nav .active.drop-down > a:after {
  content: "\eaa1";
}

.mobile-nav .drop-down > a {
  padding-right: 35px;
}

.mobile-nav .drop-down ul {
  display: none;
  overflow: hidden;
}

.mobile-nav .drop-down li {
  padding-left: 20px;
}

.mobile-nav-overly {
  width: 100%;
  height: 100%;
  z-index: 9997;
  top: 0;
  left: 0;
  position: fixed;
  background: rgba(26, 26, 26, 0.6);
  overflow: hidden;
  display: none;
  transition: ease-in-out 0.2s;
}

.mobile-nav-active {
  overflow: hidden;
}

.mobile-nav-active .mobile-nav {
  opacity: 1;
  visibility: visible;
}

.mobile-nav-active .mobile-nav-toggle i {
  color: #fff;
}

 </style>

 <script>
     // Smooth scroll for the navigation menu and links with .scrollto classes
  var scrolltoOffset = $('#header').outerHeight() - 17;
  $(document).on('click', '.nav-menu a, .mobile-nav a, .scrollto', function(e) {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {
        e.preventDefault();

        var scrollto = target.offset().top - scrolltoOffset;

        if ($(this).attr("href") == '#header') {
          scrollto = 0;
        }

        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.nav-menu, .mobile-nav').length) {
          $('.nav-menu .active, .mobile-nav .active').removeClass('active');
          $(this).closest('li').addClass('active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
          $('.mobile-nav-overly').fadeOut();
        }
        return false;
      }
    }
  });
  
  // Header scroll class
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('#header').addClass('header-scrolled');
    } else {
      $('#header').removeClass('header-scrolled');
    }
  });

  if ($(window).scrollTop() > 100) {
    $('#header').addClass('header-scrolled');
  }

  // Navigation active state on scroll
  var nav_sections = $('section');
  var main_nav = $('.nav-menu, .mobile-nav');

  $(window).on('scroll', function() {
    var cur_pos = $(this).scrollTop() + 200;

    nav_sections.each(function() {
      var top = $(this).offset().top,
        bottom = top + $(this).outerHeight();

      if (cur_pos >= top && cur_pos <= bottom) {
        if (cur_pos <= bottom) {
          main_nav.find('li').removeClass('active');
        }
        main_nav.find('a[href="#' + $(this).attr('id') + '"]').parent('li').addClass('active');
      }
      if (cur_pos < 300) {
        $(".nav-menu ul:first li:first").addClass('active');
      }
    });
  });
 </script>
 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top header-transparent">
  <div class="container-fluid">

    <div class="row justify-content-center">
      <div class="col-xl-11 d-flex align-items-center">
        <h1 class="logo mr-auto"><a href="{{route('homepage')}}">MedicHome</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="{{route('homepage')}}">Home</a></li>
            <li><a href="{{route('medicinedetail')}}">Medicine Details</a></li>
            <li><a href="{{route('order')}}">Order</a></li>
            <li><a href="{{route('history')}}">History Details</a></li>
            <li><a href="#team">Team</a></li>
            <li class="drop-down"><a href="">Drop Down</a>
              <ul>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">k rakhne </a></li>
                <li><a href="#">detail</a></li>
                <li><a href="#">rakh</a></li>
              </ul>
            </li>
            <li><a href="#contact">Contact Us</a></li>
            <li> <a href="{{route('notification')}}"><button type="button" class="btn bg-transaparent btn-lg"><i class="fa fa-bell"></i></button></a></li>
            <li>
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle bg-transparent border-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <big> {{auth()->user()->name}}</big>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{route('logout')}}">Log out</a>
                  </div>
                  </button></a>
                  </div>
            </li>
          </ul>
        </nav><!-- .nav-menu -->
      </div>
    </div>

  </div>
</header><!-- End Header -->


{{-- <nav class="navbar nav-pills navbar-expand-md navbar-light" 
style="background-color: #48bdc5; width=100%;">
  <a class="navbar-brand px-3 text-white" href="{{route('homepage')}}""><h2><b>MedicHome</b></h2></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link text-white" href="{{route('medicinedetail')}}"><big>Medicine Details</big></a>
      <a class="nav-item nav-link text-white" href="{{route('order')}}"><big>Order</big></a>
      <a class="nav-item nav-link text-white" href="{{route('history')}}"><big>History Details</big></a>
    </div>
  </div>

  <div>
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle bg-transparent border-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <big> {{auth()->user()->name}}</big>
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="{{route('logout')}}">Log out</a>
      </div>
      <a href="{{route('notification')}}"><button type="button" class="btn bg-transaparent btn-lg"><i class="fa fa-bell"></i></button></a>
  </div>
</nav> --}}
