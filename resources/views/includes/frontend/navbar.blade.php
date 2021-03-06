<nav class="navbar navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">
        <img src="{{ asset('images/logo/logo.png') }}" alt="Amr El Mahdy">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
       {{-- <li class="active"><a href="#" data-scroll="home">Home</a></li>--}}
        <li><a href="#about" data-scroll="about">About</a></li>
        <li><a href="#services" data-scroll="services">Services</a></li>
        <li><a href="#portfolio" data-scroll="portfolio">Portfolio</a></li>
        <li><a href="#resume" data-scroll="resume">Resume</a></li>
        <li><a href="#contact" data-scroll="contact">Contact</a></li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>