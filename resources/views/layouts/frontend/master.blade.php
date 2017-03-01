<!DOCTYPE html>
<html lang="en">
  <head>

    @include('includes.frontend.header')
    
  </head>

  <body>  
     @include('includes.frontend.nav-head')

     @yield('content')
      
     @include('includes.frontend.footer')
  </body>
</html>