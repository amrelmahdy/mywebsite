<!DOCTYPE html>
<html lang="en">
  <head>
     @include('includes.admin.admin-header')
  </head>
  <body class="no-skin">
     @include('includes.admin.admin-navbar')
     
     <div class="main-container ace-save-state" id="main-container">

       @include('includes.admin.admin-sidebar')
        <div class="main-content">
       	   
           <div class="main-content-inner">
             
              <div class="flash-msg" id="flash-msg"></div>
              
              @if(Session::has('success'))
                <div class="alert alert-success text-center">
                  <button class="close" data-dismiss="alert">
                    <i class="ace-icon fa fa-times"></i>
                  </button>
                  <strong>{{ Session::get('success') }} <i class="fa fa-smile-o fa-lg"></i></strong>
                </div>
              @endif

              @if(Session::has('error'))
                <div class="alert alert-danger text-center">
                  <button class="close" data-dismiss="alert">
                    <i class="ace-icon fa fa-times"></i>
                  </button>
                  <strong>Sorry {{ Session::get('error') }} !</strong>
                </div>
              @endif

              @yield('content')
           </div>

        </div>
        
        @include('includes.admin.admin-footer')
      </div>

  </body>
</html>




