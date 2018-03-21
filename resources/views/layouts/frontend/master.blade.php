<!DOCTYPE html>
<html lang="en">
  <head>

    @include('includes.frontend.header')


  </head>

  <body id="home" style="position: relative"  data-spy="scroll" data-target=".navbar-fixed-top">
     @include('includes.frontend.nav-head')

     @yield('content')
      
     @include('includes.frontend.footer')
  </body>
</html>